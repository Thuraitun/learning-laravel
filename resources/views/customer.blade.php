@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-4 shadow-sm p-3">
                <div class="text-center">
                    <h4 class="fw-bold">Customer Create</h4>
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

                <form action="{{route('customer.store')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-2">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Choose Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="mb-2">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number">
                    </div>
                    <div class="mb-2">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Your Address" cols="10" rows="10"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Create">
                </form>
            </div>
            <div class="col shadow-sm ms-3 p-3">
                <div class="mb-4">
                    <h4 class="text-center fw-bold">Customer Lists</h4>
                </div>

                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th>Customer Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td class="text-center">{{ $customer->gender }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td class="text-center">{{ $customer->address }}</td>
                            <td class="text-center"><a href="{{ route('customer.edit', $customer->id)}}" class="text-decoration-none text-dark"><i class="fa-solid fa-pen-to-square"></i>edit</a></td>
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
                                                <a href="{{ route('customer.destroy', $customer->id)}}" class="">
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
