@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-4 shadow-sm p-3">
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
                        <label for="description">Description</label>
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
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td class=" text-end">{{ $product->price }}</td>
                            <td class="text-center"><a href="{{route('product.edit', $product->id)}}" class="text-dark text-decoration-none"><i class="fa-solid fa-pen-to-square"></i>edit</a></td>
                            <td class="text-center">
                                <span class="" data-bs-toggle="modal" data-bs-target="#feedback"><a href="#" class="text-danger text-decoration-none"><i class="fa-solid fa-trash text-danger"></i>delete</a></span>
                                <div class="modal" id="feedback">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Do you wanna delete?</h5>
                                                <button class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ route('product.destroy', $product->id)}}" class="">
                                                    <button class="btn btn-danger">Delete</button>
                                                </a>
                                                <button class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
