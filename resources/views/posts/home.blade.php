@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="#" class="btn btn-primary pull-right btn-sm" id="createPost">
						<span class="glyphicon fa fa-plus" aria-hidden="true"></span> Nuevo Post
					</a>
					<h1 class="blog-title">Mi Blog Propiedades.com </h1>
					<p class="lead blog-description">Examen de proceso de selecci&oacute;n de propiedades.com</p>
				</div>
				<div class="panel-body">
					<div class="container">
						<div class="blog-header">
							
						</div>
						
						<div class="row">
							<div class="blog-main">
								@foreach($posts as $item)
									<div class="col-md-9 blog-post">
										<h2 class="blog-post-title">{{ $item->title }}<small> - {{ $item->category->category }}</small></h2>
										<p class="blog-post-meta">
											<a href="post/edit/{{ $item->id }}"><i class="fa fa-pencil text-primary"></i></a>&nbsp;&nbsp;
											<a href="post/delete/{{ $item->id }}"><i class="fa fa-trash-o text-primary"></i></a>&nbsp;&nbsp;
											{{ date( "d F Y",strtotime($item->created_at)) }}
											escrito por <a href="#">{{ $item->user->name }}</a>
										</p>
										<p>{{ $item->comment }}</p>
										<hr>
									</div>
								@endforeach
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
				<a href="/category/create" class="btn btn-default btn-sm">
					<span class="glyphicon fa fa-plus" aria-hidden="true"></span> Nueva
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
