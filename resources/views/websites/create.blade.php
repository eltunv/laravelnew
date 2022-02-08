@extends('layouts.app')

@section('meta_title') Create a new Category @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главная</div>
                    <div class="breadcrumb-item">Сайты</div>
                    <div class="breadcrumb-item active">Создать</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form action="{{ route('websites.store') }}" method="POST" class="w-100">
                    @csrf
                    <button type="submit" class="btn btn-primary my-3 make mx-1 float-end">Создать</button>
                    <label for="name" class="w-100"> Имя
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="link" class="my-4 w-100"> Ссылка
                        <input type="text" class="form-control" id="link" name="link">
                        @error('link')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="api_token" class="my-4 w-100"> Токен
                        <input type="text" class="form-control" id="api_token" name="api_token">
                        @error('api_token')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="status" class="my-4 w-100"> Статус
                        <input type="text" class="form-control" id="status" name="status">
                        @error('status')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="language_id" class="my-4 w-100"> Языки
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
