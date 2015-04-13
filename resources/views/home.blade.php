@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<input type="button" class="btn btn-primary pull-right" value="Nuevo Post" id="createPost">
					<h1 class="blog-title">Mi Blog Propiedades.com </h1>
					<p class="lead blog-description">Examen de proceso de selecci&oacute;n de propiedades.com</p>
				</div>
				<div class="panel-body">
					<div class="container">
						<div class="blog-header">
							
						</div>

						<div class="row">
							<div class="blog-main">
								<div class="col-md-9 blog-post">
									<h2 class="blog-post-title">Mi primer post</h2>
									<p class="blog-post-meta">Enero 1, 2015 por <a href="#">Luis Luna</a></p>
									<p>Este es el primer post registrado en el blog de propiedades.com</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sapiente obcaecati dignissimos assumenda sit, atque doloremque debitis, vero blanditiis pariatur distinctio. Similique minima velit hic quasi optio. Odit, doloremque, laborum! 55 38 65 93 45</p>
								</div>
								<hr class="clearfix" />
								<div class="col-md-9 blog-post">
									<h2 class="blog-post-title">Un post mas...</h2>
									<p class="blog-post-meta">Febrero 05, 2015 por <a href="#">Luis Luna</a></p>
									<p>Este es el segundo post, podemos hacer muchas cosas con Laravel framework, muy &aacute;gil y divertido el desarrollo con este framework.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam error est perferendis eveniet reprehenderit quia vero quam tempore quis. Molestiae officia ab, alias magnam aperiam optio mollitia quia ducimus facere!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe blanditiis ullam debitis deserunt, vitae, quod ratione nulla! Ex atque illo adipisci nobis rerum blanditiis suscipit sit est, praesentium earum, quam.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-2 ">
			<div class="sidebar-module">
				<h4>Categor&iacute;as</h4>
				<ol class="list-unstyled">
					@if($categories->count())
						@foreach($categories as $item)
							<li><a href="#">{{ $item->category }}</a></li>
						@endforeach
					@else
						<p> No se han encontrado categor&iacute;as </p>
					@endif
				</ol>
			</div>
		</div>
	</div>
</div>
@endsection
