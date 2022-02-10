@extends('layouts.app')

@section('meta_title') Users List @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главная</div>
                    <div class="breadcrumb-item active">Посты</div>
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
                        <th class="col-3">Имя</th>
                        <th class="col-3">Заголовок</th>
                        <th class="col-2">Описания</th>
                        <th class="col-2">Ключевое слово</th>
                        <th class="col-2">Опубликовано</th>
                        <th class="col-2">Категории</th>
                        <th class="col-1">Языки</th>
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
                                    Редактировать
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
                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection
