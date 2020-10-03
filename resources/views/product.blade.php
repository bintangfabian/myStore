@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <table class="table">
                <thead class="thead-dark table-striped">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col" colspan="3" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $value->product_image}}</td>
                        <td>{{ $value->product_title}}</td>
                        <td class="text-center">
                          <a href="{{ 'detailProduct/'. $value->product_slug }}" class="btn btn-info">
                            Details
                          </a>
                        </td>
                        <td class="text-center">
                          <a href="{{ 'editProduct/'. $value->product_slug }}" class="btn btn-warning">
                            Edit
                          </a>
                        </td>
                        <td class="text-center"><a href="{{ 'delproduct/'. $value->product_slug}}" class="btn btn-danger">Delete</a></td>
                      </tr>
                      @endforeach
                </tbody>
              </table>
                </form>
            </div>
        </div>
    </div>

@endsection