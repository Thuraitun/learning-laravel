@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col shadow-sm p-3">
                <div class="text-center">
                    <h4 class="fw-bold">Product Create</h4>
                </div>

                <div class="alert-message">

                    @if (session('create'))

                        <div class="alert-message">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="text-warning">{{ session('create') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>

                    @endif

                </div>

                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Product name">
                    </div>
                    <div class="mb-2">
                        <label for="description">Name</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Product description"></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    {{-- <div class="d-grid ">
                        <button class="btn btn-primary" type="button">Create</button>
                    </div> --}}
                    <input type="submit" class="btn btn-primary" value="Create">
                </form>
            </div>
            <div class="col shadow-sm ms-3 p-3">
                <div class="mb-4">
                    <h4 class="text-center fw-bold">Product Lists</h4>
                </div>

                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td class=" text-end">{{ $product->price }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
