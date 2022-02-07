@extends('layouts.app')

@section('meta_title') Category List @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Home</div>
                    <div class="breadcrumb-item active">Category</div>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('categories.create') }}" class="btn btn-primary float-end">Add</a>
            </div>
            <div class="col-12 my-2">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-9">Name</th>
                        <th class="col-1">Status</th>
                        <th class="col-1">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $item)
                        <tr class="border-1 hover">
                            <td>{{ $item->id }}</td>
                            <td class="border-1 act">{{ $item->name }}</td>
                            <td class="act border-1">{{ $item->status }}</td>
                            <td class="right d-flex">
                                <a href="{{ route('categories.edit', ['id' => $item->id]) }}" class="mx-2 btn btn-primary edit">
                                    Edit
                                </a>
                                <form action="{{ route('categories.destroy', ['id' => $item->id]) }}" method="POST">
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
