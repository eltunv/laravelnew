@extends('layouts.app')

@section('meta_title') Users List @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Home</div>
                    <div class="breadcrumb-item active">Posts</div>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('posts.create') }}" class="btn btn-primary float-end">Добавить</a>
            </div>
            <div class="col-12 my-2">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th class="col-3">Name</th>
                        <th class="col-3">Meta Title</th>
                        <th class="col-2">Meta Description</th>
                        <th class="col-2">Meta KeyWords</th>
                        <th class="col-2">Published</th>
                        <th class="col-2">Category</th>
                        <th class="col-1">Language</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $item)
                        <tr class="border-1 hover">
                            <td class="border-1 act">{{ $item->id }}</td>
                            <td class="border-1 act">{{ $item->name }}</td>
                            <td class="act border-1">{{ $item->meta_title }}</td>
                            <td class="act border-1">{{ $item->meta_description }}</td>
                            <td class="act border-1">{{ $item->meta_keywords }}</td>
                            <td class="act border-1">{{ $item->published }}</td>
                            <td class="act border-1">{{ $item->category_id }}</td>
                            <td class="act border-1">{{ $item->language_id }}</td>
                            <td class="right d-flex">
                                <a href="{{ route('posts.edit', ['post' => $item->id]) }}" class="mx-2 btn btn-primary edit">
                                    Edit
                                </a>
                                <form action="{{ route('posts.destroy', ['post' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
