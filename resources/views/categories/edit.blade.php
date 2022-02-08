@extends('layouts.app')

@section('meta_title') Create a new Category @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главная</div>
                    <div class="breadcrumb-item">Категории</div>
                    <div class="breadcrumb-item active">Создать</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form method="POST" action="{{ route('categories.update', ['id' => $categories->id]) }}">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary my-3 make mx-1 float-end" type="submit">
                         Сохранить
                    </button>
                    <label for="name" class="w-100"> Имя
                        <input type="text" class="form-control" id="firstName" name="name" style="outline: 0;" value="{{ $categories->name }}">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="status" class="my-4 w-100"> Статус
                        <select name="status" id="status" class="form-control">
                            <option value="0">Выключить</option>
                            <option value="1">Включить</option>
                        </select>
                        @error('status')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="language_id" class="my-4 w-100"> Язык
                        <select name="language_id" id="language_id" class="form-control">
                            @foreach ($languages as $language)
                                <option value="{{ $language->id }}">{{ $language->name }}</option>
                            @endforeach
                        </select>
                        @error('language_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                </form>
            </div>
            <div class="form-group">

            </div>
        </div>
    </div>

@endsection
