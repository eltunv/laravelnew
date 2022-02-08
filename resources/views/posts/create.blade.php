@extends('layouts.app')

@section('meta_title') Create a new Category @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Home</div>
                    <div class="breadcrumb-item">Posts</div>
                    <div class="breadcrumb-item active">Create</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form action="{{ route('posts.store') }}" method="POST" class="w-100">
                    @csrf
                    <button type="submit" class="btn btn-primary my-3 make mx-1 float-end">Add</button>
                    <label for="name" class="w-100"> Name
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="meta_title" class="my-4 w-100"> Meta Title
                        <input type="text" class="form-control" id="meta_title" name="meta_title">
                        @error('meta_title')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="meta_description" class="my-4 w-100"> Meta Description
                        <input type="text" class="form-control" id="meta_description" name="meta_description">
                        @error('meta_description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="meta_keywords" class="my-4 w-100"> Meta KeyWords
                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords">
                        @error('meta_keywords')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="published" class="my-4 w-100"> Published
                        <input type="datetime-local" class="form-control" id="published" name="published">
                        @error('published')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="category_id" class="my-4 w-100"> Category Id
                        <input type="text" class="form-control" id="category_id" name="category_id">
                        @error('category_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="language_id" class="my-4 w-100"> Language Id
                        <input type="text" class="form-control" id="language_id" name="language_id">
                        @error('language_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                </form>
            </div>
        </div>
    </div>

@endsection
