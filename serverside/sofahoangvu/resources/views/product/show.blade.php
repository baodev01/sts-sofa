@extends('app')

@section('content')
<div class="container">
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
</div>
@endsection
