@extends('layouts.app')

@section('content')
    <div class="row align-items-center justify-content-center h-100">
        <div class="col-10">
            <div class="card mt-md-3">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="">
                            <h2 class="mt-1 ml-2">Update Product</h2>
                        </div>
                        <div class="mt-1 mr-2">
                        <a href="/product" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ 'updateProduct/'. $data_edit->product_slug }}" method="post">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label for="#">Product Title</label>
                        <input type="text" name="title" class="form-control"
                            placeholder="Nama Product" value="{{ $data_edit->product_title}}">
                    </div>
                    <div class="form-group">
                        <label for="#">Product Slug</label>
                        <input type="text" name="slug" class="form-control"
                            placeholder="Nama Product" value="{{ $data_edit->product_slug}}">
                    </div>
                    <div class="form-group">
                        <label for="#">Image</label>
                        <input type="text" name="image" class="form-control"
                            placeholder="" value="{{ $data_edit->product_image}}">
                    </div>
                    <button type="submit" class="btn btn-primary form-control mt-3">Save</button>
                </form>                    
            </div>
            </div>
        </div>
    </div>
@endsection