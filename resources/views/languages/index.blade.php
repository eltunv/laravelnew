@extends('layouts.app')

@section('meta_title') Languages List @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главная</div>
                    <div class="breadcrumb-item active">Язык</div>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('languages.create') }}" class="btn btn-primary float-end">Создать</a>
            </div>
            <div class="col-12 my-2">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-6">Имя</th>
                        <th class="col-5">Код</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($languages as $item)
                        <tr class="border-1 hover">
                            <td>{{ $item->id }}</td>
                            <td class="border-1 act">{{ $item->name }}</td>
                            <td class="act border-1">{{ $item->code }}</td>
                            <td class="right d-flex">
                                <a href="{{ route('languages.edit', ['language' => $item->id]) }}" class="mx-2 btn btn-primary edit">
                                    Редактировать
                                </a>
                                <form action="{{ route('languages.destroy', ['language' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $languages->links() }}
            </div>
        </div>
    </div>

@endsection
