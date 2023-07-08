@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 shadow-sm p-3">
                <div class="">
                    <a href="{{ route('customer.index') }}"><button class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Back</button></a>
                </div>
                <div class="text-center">
                    <h4 class="fw-bold">Customer Edit</h4>
                </div>

                <form action="{{route('customer.update',$edit->id)}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$edit->name}}" placeholder="Your Name">
                    </div>
                    <div class="mb-2">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male" @if ($edit->gender == 'male' ) selected @endif>Male</option>
                            <option value="female" @if ($edit->gender == 'female' ) selected @endif>Female</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value={{$edit->email}} placeholder="Your Email">
                    </div>
                    <div class="mb-2">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" value={{$edit->phone}} placeholder="Your Phone Number">
                    </div>
                    <div class="mb-2">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Your Address" cols="10" rows="10">{{$edit->address}}</textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Create">
                </form>
            </div>
        </div>
    </div>
@endsection
