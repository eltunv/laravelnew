@extends('layouts.app')

@section('meta_title') Category List @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главное</div>
                    <div class="breadcrumb-item active">Категории</div>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('categories.create') }}" class="btn btn-primary float-end">Добавить</a>
            </div>
            <div class="col-12 my-2">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-9">Имя</th>
                        <th class="col-1">Статус</th>
                        <th class="col-1">Язык</th>
                        <th class="col-1">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $item)
                        <tr class="border-1 hover">
                            <td class="border-1 act">{{ $item->id }}</td>
                            <td class="border-1 act">{{ $item->name }}</td>
                            <td class="act border-1">{{ $item->status }}</td>
                            <td class="act border-1">{{ $item->language_id }}</td>
                            <td class="right d-flex">
                                <a href="{{ route('categories.edit', ['id' => $item->id]) }}" class="mx-2 btn btn-primary edit">
                                    Редактировать
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
                {{ $categories->links() }}
            </div>
        </div>
    </div>

@endsection
