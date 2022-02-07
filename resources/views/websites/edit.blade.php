@extends('layouts.app')

@section('meta_title') Edit a Website @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Home</div>
                    <div class="breadcrumb-item">Websites</div>
                    <div class="breadcrumb-item active">Edit</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form method="POST" action="{{ route('websites.update', ['website' => $websites->id]) }}">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary my-3 make mx-1 float-end" type="submit">
                        Save
                    </button>
                    <label for="name" class="w-100"> Name
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;" value="{{ $websites->name }}">
                    </label>
                    <label for="link" class="w-100"> Link
                        <input type="text" class="form-control" id="link" name="link" style="outline: 0;" value="{{ $websites->link }}">
                    </label>
                    <label for="api_token" class="w-100"> Api Token
                        <input type="text" class="form-control" id="api_token" name="api_token" style="outline: 0;" value="{{ $websites->api_token }}">
                    </label>
                    <label for="status" class="w-100"> Status
                        <input type="text" class="form-control" id="status" name="status" style="outline: 0;" value="{{ $websites->status }}">
                    </label>
                    <label for="language_id" class="w-100"> Language_id
                        <input type="text" class="form-control" id="language_id" name="language_id" style="outline: 0;" value="{{ $websites->language_id }}">
                    </label>
                </form>
            </div>
        </div>
    </div>

@endsection
