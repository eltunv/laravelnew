@extends('layouts.app')

@section('meta_title') Users List @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главная</div>
                    <div class="breadcrumb-item active">Сайты</div>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('websites.create') }}" class="btn btn-primary float-end">Добавить</a>
            </div>
            <div class="col-12 my-2">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-3">Имя</th>
                        <th class="col-3">Ссылка</th>
                        <th class="col-4">Токен</th>
                        <th class="col-1">Активный</th>
                        <th class="col-1">Язык</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($websites as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->link }}</td>
                        <td>{{ $item->api_token }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->language_id }}</td>
                        <td class="d-flex">
                            <a href="{{ route('websites.edit', ['website' => $item->id]) }}" class="mx-2 btn btn-primary edit">
                                Редактировать
                            </a>
                            <form action="{{ route('websites.destroy', ['website' => $item->id]) }}" method="POST">
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
