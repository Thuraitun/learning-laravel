@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 shadow-sm p-3">
                <div class="">
                    <a href="{{route('employee.index')}}"><button class="btn btn-primary">Back</button></a>
                </div>
                <div class="text-center">
                    <h4 class="fw-bold">Employee Create</h4>
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

                <form action="{{route('employee.update',$edit->id)}}" method="post">
                    @csrf @method('PUT')
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value={{$edit->name}} placeholder="Your Name">
                    </div>
                    <div class="mb-2">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male" @if($edit->gender == 'male') selected @endif>Male</option>
                            <option value="female" @if($edit->gender == 'female') selected @endif>Female</option>
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
                    <input type="submit" class="btn btn-primary" value="Update">
                </form>
            </div>
        </div>
    </div>
@endsection
