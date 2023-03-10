@extends('layouts.app')

@section('meta_title') Edit a Website @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главная</div>
                    <div class="breadcrumb-item">Сайты</div>
                    <div class="breadcrumb-item active">Редактировать</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form method="POST" action="{{ route('websites.update', ['website' => $websites->id]) }}">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary my-3 make mx-1 float-end" type="submit">
                        Сохранить
                    </button>
                    <label for="name" class="w-100"> Имя
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;" value="{{ $websites->name }}">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="link" class="w-100"> Ссылка
                        <input type="text" class="form-control" id="link" name="link" style="outline: 0;" value="{{ $websites->link }}">
                        @error('link')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="api_token" class="w-100"> Токен
                        <input type="text" class="form-control" id="api_token" name="api_token" style="outline: 0;" value="{{ $websites->api_token }}">
                        @error('api_token')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="status" class="w-100"> Статус
                        <select name="status" id="status" class="form-control">
                            <option value="0">Выключить</option>
                            <option value="1">Включить</option>
                        </select>
                        @error('status')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="language_id" class="w-100"> Языки
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
        </div>
    </div>

@endsection
