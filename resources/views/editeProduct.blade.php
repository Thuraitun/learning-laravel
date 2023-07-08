@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 shadow-sm p-3">

                <a href="{{ route('product.index')}}"><button class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Back</button></a>

                <div class="text-center">
                    <h4 class="fw-bold">Product Edit</h4>
                </div>
                <form action="{{route('product.update', $edit->id)}}" method="post" >
                    @csrf
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value={{ $edit->name }}>
                    </div>
                    <div class="mb-2">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $edit->description }}</textarea>
                    </div>
                    <div class="mb-2">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" value={{ $edit->price}}>
                    </div>
                    {{-- <div class="d-grid ">
                        <button class="btn btn-primary" type="button">Create</button>
                    </div> --}}
                    <input type="submit" class="btn btn-primary" value="Create">
                </form>
            </div>
        </div>
    </div>
@endsection
