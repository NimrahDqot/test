@extends('admin.app_admin')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Product</h1>

    <form action="{{ route('admin_product_update', $product->id) }}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary"></h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin_product_view') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                        {{ VIEW_ALL }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">{{ NAME }} *</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" autofocus>
                </div>

                <div class="form-group">
                    <label for="">price *</label>
                    <input type="text" name="price" class="form-control" value="{{ $product->price }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Existing Image *</label>
                    <img src="{{asset('uploads/products/'.$product->image)}}" class="w_100" alt="">
                </div>
                <div class="form-group">
                    <label for="">Image *</label>
                    <input type="file" name="image" class="form-control" value="" autofocus>
                </div>
            </div>
            <button type="submit" class="btn btn-success">{{ SUBMIT }}</button>
        </div>
    </form>
@endsection
