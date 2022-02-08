@extends('layouts.app')

@section('meta_title') Create a new Category @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Главная</div>
                    <div class="breadcrumb-item">Посты</div>
                    <div class="breadcrumb-item active">Создать</div>
                </div>
            </div>
            <div class="col-12 my-2">
                <form action="{{ route('posts.store') }}" method="POST" class="w-100">
                    @csrf
                    <button type="submit" class="btn btn-primary my-3 make mx-1 float-end">Создать</button>
                    <label for="name" class="w-100"> Имя
                        <input type="text" class="form-control" id="name" name="name" style="outline: 0;">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="meta_title" class="my-4 w-100"> Заголовок
                        <input type="text" class="form-control" id="meta_title" name="meta_title">
                        @error('meta_title')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="meta_description" class="my-4 w-100"> Описание
                        <input type="text" class="form-control" id="meta_description" name="meta_description">
                        @error('meta_description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="meta_keywords" class="my-4 w-100"> Ключевые Слова
                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords">
                        @error('meta_keywords')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="published" class="my-4 w-100"> Опубликовано
                        <input type="datetime-local" class="form-control" id="published" name="published">
                        @error('published')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="category_id" class="my-4 w-100"> Категории
                        <input type="text" class="form-control" id="category_id" name="category_id">
                        @error('category_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="language_id" class="my-4 w-100"> Языки
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
