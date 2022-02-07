@extends('layouts.app')

@section('meta_title') Create a new Category @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Home</div>
                    <div class="breadcrumb-item">Websites</div>
                    <div class="breadcrumb-item active">Create</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form action="{{ route('websites.store') }}" method="POST" class="w-100">
                    @csrf
                    <button type="submit" class="btn btn-primary my-3 make mx-1 float-end">Add</button>
                    <label for="name" class="w-100"> Name
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;">
                    </label>
                    <label for="link" class="my-4 w-100"> Link
                        <input type="text" class="form-control" id="link" name="link">
                    </label>
                    <label for="api_token" class="my-4 w-100"> Api Token
                        <input type="text" class="form-control" id="api_token" name="api_token">
                    </label>
                    <label for="status" class="my-4 w-100"> Status
                        <input type="text" class="form-control" id="status" name="status">
                    </label>
                    <label for="language_id" class="my-4 w-100"> Language_id
                        <input type="text" class="form-control" id="language_id" name="language_id">
                    </label>
                </form>
            </div>
        </div>
    </div>

@endsection
