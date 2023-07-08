@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 shadow-sm p-3">
                <div class="">
                    <a href="{{route('order.index')}}" class=""><button class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Back</button></a>
                </div>
                <div class="text-center mb-4">
                    <h4 class="fw-bold">Order Edit</h4>
                </div>

                <form action="{{route('order.edit', $edit->id)}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="name">User Name</label>
                        <input type="text" name="name" class="form-control" value={{$edit->name}} id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-2">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="product_name" value={{$edit->product_name}} placeholder="Product Name">
                    </div>
                    <div class="mb-2">
                        <label for="item">Items</label>
                        <input type="text" name="item" class="form-control" value={{$edit->items}} id="item">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Create">
                </form>
            </div>
        </div>
    </div>
@endsection
