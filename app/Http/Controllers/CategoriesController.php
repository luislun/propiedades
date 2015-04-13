<?php
namespace App\Http\Controllers;

class CategoriesController extends Controller {
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index() {
        $categories = \App\Models\Category::all();
        return View('categories.index')->with('categories', $categories);
    }

    public function show($id) { 

    }

    public function create() {
       return View('categories.create');
    }

    public function save() {
       $category = new \App\Models\Category();
       $category->category = \Input::get('category');
       $category->save();
       return \Redirect::to('categories')->with('notice', 'El usuario ha sido creado correctamente.');
    }

    public function add(){
        $validator = Validator::make(Input::all(), Category::$rules);
        if ($validator->passes()) {
            $client = new Category;
            $client->category = Input::get('category');
            
            $client->save();
            return Redirect::to('category/list')->with('message', 'Categor&iacute;a registrada correctamente!');
        } else {
            return Redirect::to('category/add')->with('message', 'Ha ocurrido un error!')->withErrors($validator)->withInput();    
        }     
        return view( 'category-add' );
    }
}
