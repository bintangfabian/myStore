@extends('layouts.app')

@section('content')
    <div class="row align-items-center justify-content-center h-100">
        <div class="col-10">
            <div class="card mt-md-3">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="">
                            <h2 class="mt-1 ml-2">Add Product</h2>
                        </div>
                        <div class="mt-1 mr-2">
                        <a href="/product" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/product/addProduct" method="post">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label for="#">Product Title</label>
                        <input type="text" name="title" class="form-control"
                            placeholder="Nama Product" value="">
                    </div>
                    <div class="form-group">
                        <label for="#">Product Slug</label>
                        <input type="text" name="slug" class="form-control" disabled
                            placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="#">Image</label>
                        <input type="text" name="image" class="form-control"
                            placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                            </div>
                            <input type="text" name="price" class="form-control" placeholder="3000000">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary form-control mt-3">Save</button>
                </form>                    
            </div>
            <div class="card-footer">
                @if(session('info'))
                <div class="alert alert-danger form-group">
                {{session('info')}} 
                </div>
                @endif
            </div>
            </div>
        </div>
    </div>
@endsection