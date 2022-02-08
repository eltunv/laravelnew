@extends('layouts.app')

@section('meta_title') Create a new Category @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Home</div>
                    <div class="breadcrumb-item">Categories</div>
                    <div class="breadcrumb-item active">Create</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form action="{{ route('categories.store') }}" method="POST" class="w-100">
                    @csrf
                    <button type="submit" class="btn btn-primary my-3 make mx-1 float-end">Add</button>
                    <label for="name" class="w-100"> Name
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="status" class="my-4 w-100"> Status
                        <input type="text" class="form-control" id="status" name="status">
                        @error('status')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="language_id" class="my-4 w-100"> Language
                        <input type="text" class="form-control" id="language_id" name="language_id">
                        @error('language')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                </form>
            </div>
            <div class="form-group">

            </div>
        </div>
    </div>

@endsection
