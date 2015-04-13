@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="btn btn-primary pull-right" href="category/create">Nueva Categor&iacute;a</a>
					<h1 class="blog-title">Listado de categorias</h1>
				</div>
				<div class="panel-body">
					<div class="container-fluid">
						
						<div class="row">
							@if($categories->count())
							<table class="table table-striped">
								<thead>
									<tr>
										<th> Categor&iacute;a </th>
								</thead>
								<tbody>
									@foreach($categories as $item)
									<tr>
										<td> {{ $item->category }} </td>
									</tr>
									@endforeach
								</tbody>
							</table>
							@else
							<p> No se han encontrado categor&iacute;as </p>
							@endif
						</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
