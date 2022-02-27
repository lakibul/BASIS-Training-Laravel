@extends('master')

@section('title')
    Edit Product Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-warning text-center"><h3>Edit Product Form</h3></div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                            <form action="{{route('update-product', ['id' => $product->id])}}" method="post">

                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->name}}" name="name" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->category}}" name="category" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->brand}}" name="brand" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" value="{{$product->price}}" name="price" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update New Product"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
