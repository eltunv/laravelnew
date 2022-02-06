@extends('layouts.app')

@section('meta_title') Users List @endsection

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <div class="breadcrumb-item">Home</div>
                    <div class="breadcrumb-item active">Websites</div>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('websites.create') }}" class="btn btn-primary float-end">Добавить</a>
            </div>
            <div class="col-12 my-2">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="col-3">Name</th>
                        <th class="col-3">Link</th>
                        <th class="col-3">Api Token</th>
                        <th class="col-2">Is Active</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($websites as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->link }}</td>
                        <td>{{ $item->api_token }}</td>
                        <td>{{ $item->status }}</td>
                        <td class="d-flex">
                            <a href="{{ route('websites.edit', ['website' => $item->id]) }}" class="mx-2 btn btn-primary edit">
                                Edit
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
