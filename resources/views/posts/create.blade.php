@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="blog-title">{{ $title }}</h1>
				</div>
				<div class="panel-body">
					<div class="container">
						<form class="form-horizontal" action="{{ $url }}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token() }}">
							<input type="hidden" name="id" value="{{ $post->id }}">

							<div class="form-group">
								<label for="title" class="col-sm-2 control-label">T&iacute;tulo</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="title" id="title" placeholder="T&iacute;tulo" value="{{ $post->title }}">
								</div>
							</div>
							
							<div class="form-group">
								<label for="category" class="col-sm-2 control-label">Categor&iacute;a</label>
								<div class="col-sm-8">
									<?php echo Form::select('category_id', $categories, $post->category_id ); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="comment" class="col-sm-2 control-label">Comentario</label>
								<div class="col-sm-8">
									<textarea class="form-control" name="comment" id="comment" placeholder="Escribe aqu&iacute; tu comentario">{{ $post->comment }}</textarea>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary">Publicar</button>
									<a class="btn btn-default" href="/">Cancelar</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
