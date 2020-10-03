@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h1>{{ $ddata->product_title}}</h1>
            <p>{{ $ddata->product_image}}</p>
        </div>
    </div>
@endsection