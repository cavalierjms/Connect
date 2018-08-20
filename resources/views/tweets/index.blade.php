@extends('layout')

@section('content')
<div class="contents">
  @foreach($products as $product)
  <!-- <div class="content_post" style="background-image: url({{ $product->product_image }});"> -->
  <div class="content_post">
    <a href="{{ $product->id }}"><img src="images/{{$product->product_image}}" alt=""></a>
    <p>{{ $product->title}}</p>
      <p>{{ $product->detail }}</p>
      <p>{{ $product->price}}円</p>
  </div>
  @endforeach
</div>
@endsection
