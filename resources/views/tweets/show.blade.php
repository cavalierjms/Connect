@extends('layout')

@section('content')

<div class="show_contents">
  <section class="item_box">
    <h2>{{ $product->title }}</h2>
  <div class="item_box2">
    <img src="images/{{$product->product_image}}" alt="">
    <table border="1">
      <tr>
        <td>カテゴリー</td><td>{{ $product->category_id}}</td>
    </table>
  </div>
</section>
</div>

@endsection
