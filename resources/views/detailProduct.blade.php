@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h1>title : {{ $ddata->product_title}}</h1>
            <h1>slug : {{ $ddata->product_slug}}</h1>
            <h1>image : {{ $ddata->product_image}}</h1>
            <h1>price : {{ $ddata->product_price}}</h1>
        </div>
    </div>
@endsection