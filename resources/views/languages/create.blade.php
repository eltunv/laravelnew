@extends('layouts.app')

@section('meta_title') Create a new Language @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главная</div>
                    <div class="breadcrumb-item">Язык</div>
                    <div class="breadcrumb-item active">Создать</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form action="{{ route('languages.store') }}" method="POST" class="w-100">
                    @csrf
                    <button type="submit" class="btn btn-primary my-3 make mx-1 float-end">Создать</button>
                    <label for="name" class="w-100"> Имя
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="code" class="my-4 w-100"> Код
                        <input type="text" class="form-control" id="code" name="code">
                        @error('code')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                </form>
            </div>
        </div>
    </div>

@endsection
