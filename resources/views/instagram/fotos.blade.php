@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="blog-title">Listado de fotos del DF</h1>
				</div>
				<div class="panel-body">
					<div class="container-fluid">
						<div class="row">
							@foreach($media.data as $fotos)
								
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
