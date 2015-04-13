<?php
namespace App\Http\Controllers;

class InstagramController extends Controller {
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index() {
        $auth_config = array(
            'client_id'         => 'fed7b22876a64463996b3a5346d85943',
            'client_secret'     => 'e63b4f3ff3574373a3cfff964d7933ff',
            'redirect_uri'      => 'http://propiedades.beeusoft.mx/instagram/fotos',
            'scope'             => array( 'likes', 'comments', 'relationships' )
        );

        $this->curl = curl_init();
        $auth = new \Instagram\Auth( $auth_config );

        $auth->authorize();
        

        return View('instagram.index');
    }

    public function fotos() {
        $auth_config = array(
            'client_id'         => 'fed7b22876a64463996b3a5346d85943',
            'client_secret'     => 'e63b4f3ff3574373a3cfff964d7933ff',
            'redirect_uri'      => 'http://propiedades.beeusoft.mx/instagram/fotos',
            'scope'             => array( 'likes', 'comments', 'relationships' )
        );
        $auth = new \Instagram\Auth( $auth_config );
        $_SESSION['instagram_access_token'] = $auth->getAccessToken( $_GET['code'] );

        $instagram = new \Instagram\Instagram( $_SESSION['instagram_access_token'] );

        $location = $instagram->getLocation( 3001881 );
        $current_user = $instagram->getCurrentUser();
        $media = $instagram->searchMedia( 19.4324907,-99.1329261 );
        dd( $media );
        return View('instagram.fotos')->with( 'userInst', $media );
    }
}
