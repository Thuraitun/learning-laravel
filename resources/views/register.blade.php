@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="row">
                    <div class="col">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-control">
                    </div>
                    <div class="col">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-control">
                    </div>
                </div>
                <div class="">
                    <label for="phone">Phone Number</label>
                    <input type="phone" id="phone" class="form-control">
                </div>

                <div class="">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" class="form-control">
                </div>
            </div>
        </div>
    </div>
@endsection
