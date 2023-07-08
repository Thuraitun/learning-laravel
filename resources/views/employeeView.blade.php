@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col shadow-sm ms-3 p-3">
                <div class="">
                    <a href="{{route('employee.index')}}"><button class="btn btn-primary">Back</button></a>
                </div>
                <div class="mb-4">
                    <h4 class="text-center fw-bold">Customer Detail</h4>
                </div>

                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th>Customer Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    <tr>
                        <td>{{$detail->name}}</td>
                        <td class="text-center">{{$detail->gender}}</td>
                        <td>{{$detail->email}}</td>
                        <td>{{$detail->phone}}</td>
                        <td class="text-center">{{$detail->address}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
