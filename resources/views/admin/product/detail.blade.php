@extends('admin.master')
@section('title')
    Detail Product Page
@endsection
@section('body')
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <h2 class="header-title">Detail Product Form</h2>
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                        <a class="breadcrumb-item" href="#">Tables</a>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-overflow">
                        <table id="dt-opt" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <tr>
                                <th>Product ID</th>
                                <td>{{$product->id}}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{$product->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>{{$product->code}}</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td>{{$product->category->name}}</td>
                            </tr>
                            <tr>
                                <th>Sub Category Name</th>
                                <td>{{$product->subCategory->name}}</td>
                            </tr>
                            <tr>
                                <th>Brand Name</th>
                                <td>{{$product->brand->name}}</td>
                            </tr>
                            <tr>
                                <th>Unit Name</th>
                                <td>{{$product->unit->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Stock Amount</th>
                                <td>{{$product->stock_amount}}</td>
                            </tr>
                            <tr>
                                <th>Product Regular Price</th>
                                <td>{{$product->regular_price}}</td>
                            </tr>
                            <tr>
                                <th>Product Selling Price</th>
                                <td>{{$product->selling_price}}</td>
                            </tr>
                            <tr>
                                <th>Product Short Description</th>
                                <td>{{$product->short_description}}</td>
                            </tr>
                            <tr>
                                <th>Product Long Description</th>
                                <td>{{$product->long_description}}</td>
                            </tr>
                            <tr>
                                <th>Product Image</th>
                                <td><img src="{{asset($product->image)}}" alt="" height="70" width="50"></td>
                            </tr>
                            <tr>
                                <th>Product OtherImage</th>
                                <td>
                                    @foreach($product->otherImages as $otherImage)
                                    <img src="{{asset($otherImage->image)}}" alt="" width="50" height="70">
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <td>{{$product->status}}</td>
                            </tr>
                            <tr>
                                <th>Product HitCount</th>
                                <td>{{$product->hit_count}}</td>
                            </tr>
                            <tr>
                                <th>Product Featured Count</th>
                                <td>{{$product->featured_count}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


