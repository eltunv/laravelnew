@extends('layouts.app')

@section('meta_title') Create a new Language @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Home</div>
                    <div class="breadcrumb-item">Languages</div>
                    <div class="breadcrumb-item active">Create</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form action="{{ route('languages.store') }}" method="POST" class="w-100">
                    @csrf
                    <button type="submit" class="btn btn-primary my-3 make mx-1 float-end">Add</button>
                    <label for="name" class="w-100"> Name
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;">
                    </label>
                    <label for="code" class="my-4 w-100"> Code
                        <input type="text" class="form-control" id="code" name="code">
                    </label>
                </form>
            </div>
        </div>
    </div>

@endsection