@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
          <a href="product/add" class="btn btn-success mb-3">Add</a>
            <div class="row justify-content-center">
                <table class="table">
                  <thead class="thead-dark table-striped">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Image</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Product slug</th>
                      <th scope="col">Price</th>
                      <th scope="col" colspan="3" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($data as $value)
                      <tr>
                          <th scope="row">{{ $loop->iteration}}</th>
                          <td>{{ $value->product_image}}</td>
                          <td>{{ $value->product_title}}</td>
                          <td>{{ $value->product_slug}}</td>
                          <td>Rp. {{ $value->product_price}}</td>
                          <td class="text-center">
                            <a href="{{ 'product/detailProduct/'. $value->product_slug }}" class="btn btn-info">
                              Details
                            </a>
                          </td>
                          <td class="text-center">
                            <a href="{{ 'product/editProduct/'. $value->product_slug }}" class="btn btn-warning">
                              Edit
                            </a>
                          </td>
                          <td class="text-center"><a href="{{ 'product/delproduct/'. $value->product_slug}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
            </div>
            {{ $data->links() }}
            <div class="row justify-content-center mt-3">
              <div class="col-6">
                <div>
                    @if(session('infopr'))
                    <div class="alert alert-success form-group">
                    {{session('infopr')}} 
                    </div>
                    @elseif(session('infodl'))
                    <div class="alert alert-danger form-group">
                    {{session('infodl')}} 
                    </div>
                    @elseif(session('infoedit'))
                    <div class="alert alert-primary form-group">
                    {{session('infoedit')}} 
                    </div>
                    @endif
                </div>
              </div>
            </div>
        </div>
    </div>

@endsection