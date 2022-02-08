@extends('layouts.app')

@section('meta_title') Edit a Language @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главная</div>
                    <div class="breadcrumb-item">Язык</div>
                    <div class="breadcrumb-item active">Редактировать</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form method="POST" action="{{ route('languages.update', ['language' => $language->id]) }}">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary my-3 make mx-1 float-end" type="submit">
                        Сохранить
                    </button>
                    <label for="name" class="w-100"> Имя
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;" value="{{ $language->name }}">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="code" class="w-100"> Код
                        <input type="text" class="form-control" id="code" name="code" style="outline: 0;" value="{{ $language->code }}">
                        @error('code')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                </form>
            </div>
        </div>
    </div>

@endsection
