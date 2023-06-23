@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col shadow-sm p-3">
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
                    </tr>
                    @foreach ($orders as $ord)
                        <tr class="">
                            <td>{{ $ord->name }}</td>
                            <td class="text-center">{{ $ord->product_name }}</td>
                            <td class="text-center">{{ $ord->items }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
