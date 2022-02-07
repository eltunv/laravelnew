@extends('layouts.app')

@section('meta_title') Edit a Language @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Home</div>
                    <div class="breadcrumb-item">Languages</div>
                    <div class="breadcrumb-item active">Edit</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form method="POST" action="{{ route('languages.update', ['language' => $languages->id]) }}">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary my-3 make mx-1 float-end" type="submit">
                        Save
                    </button>
                    <label for="name" class="w-100"> Name
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;" value="{{ $languages->name }}">
                    </label>
                    <label for="code" class="w-100"> Code
                        <input type="text" class="form-control" id="code" name="code" style="outline: 0;" value="{{ $languages->code }}">
                    </label>
                </form>
            </div>
        </div>
    </div>

@endsection
