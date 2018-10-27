@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					This is page product!
				</div>
			</div>
		</div>
	</div>

	@foreach ($products as $product)
		<div class="row">
			<h1>Product {{ $product->id }}</h1>
			<ul>
				<li>productKey: {{ $product->productKey }}</li>
				<li>nameProduct: {{ $product->nameProduct }}</li>
				<li>nameProductEN: {{ $product->nameProductEN }}</li>
				<li>typeProductId: {{ $product->typeProductId }}</li>
				<li>price: {{ $product->price }}</li>
				<li>percentSalePrice: {{ $product->percentSalePrice }}</li>
				<li>pathProduct: {{ $product->pathProduct }}</li>

			</ul>
		</div>
	@endforeach

	


</div>
@endsection
