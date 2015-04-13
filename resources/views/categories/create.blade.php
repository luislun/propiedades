@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="blog-title">Agregar categor&iacute;a</h1>
				</div>
				<div class="panel-body">
					<div class="container">
						<form class="form-horizontal" action="/category/save" method="post">
							<input type="hidden" name="_token" value="{{csrf_token() }}">

							<div class="form-group">
								<label for="category" class="col-sm-2 control-label">Categor&iacute;a</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="category" id="category" placeholder="Categor&iacute;a">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary">Enviar</button>
									<a class="btn btn-default" href="/categories">Cancelar</a>
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
