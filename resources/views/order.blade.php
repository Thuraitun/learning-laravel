@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-4 shadow-sm p-3">
                <div class="text-center mb-4">
                    <h4 class="fw-bold">Order Create</h4>
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
                <form action="{{route('order.store')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="name">User Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-2">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product Name">
                    </div>
                    <div class="mb-2">
                        <label for="item">Items</label>
                        <input type="text" name="item" class="form-control" id="item">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Create">
                </form>
            </div>
            <div class="col shadow-sm ms-3 p-3">
                <div class="mb-4">
                    <h4 class="text-center fw-bold">Order Lists</h4>
                </div>

                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th>User Name</th>
                        <th>Product Name</th>
                        <th>Items</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($orders as $ord)
                        <tr class="">
                            <td>{{ $ord->name }}</td>
                            <td class="text-center">{{ $ord->product_name }}</td>
                            <td class="text-center">{{ $ord->items }}</td>
                            <td class="text-center"><a href="{{route('order.edit',$ord->id)}}" class="text-decoration-none text-dark"><i class="fa-solid fa-pen-to-square"></i>edit</a></td>
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
                                                <a href="{{ route('order.destroy', $ord->id)}}" class="">
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
