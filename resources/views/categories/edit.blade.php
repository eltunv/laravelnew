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
                <form method="POST" action="{{ route('categories.update', ['id' => $categories->id]) }}">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary my-3 make mx-1 float-end" type="submit">
                        Save
                    </button>
                    <label for="name" class="w-100"> Name
                        <input type="text" class="form-control" id="firstName" name="name" style="outline: 0;" value="{{ $categories->name }}">
                    </label>
                    <label for="status" class="my-4 w-100"> Status
                        <input type="text" class="form-control" id="status" name="status" value="{{ $categories->status }}">
                    </label>
                </form>
            </div>
            <div class="form-group">

            </div>
        </div>
    </div>

@endsection
