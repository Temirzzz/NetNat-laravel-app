@extends('layouts.app')

@section('title')Страница редактирования@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 col-sm-12">
                <h1 class="mt-5 text-center">Изменить запись</h1>
                <form action="{{ route('record-update-submit', $data->id) }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="record_name">Новая запись</label>
                        <input type="text" name="record" value="{{ $data->record }}" id="record_name" class="form-control">
                        <button type="submit" class="btn btn-success mt-3">Изменить</button>
                    </div>
                </form>       
            </div>
        </div>
    </div>
@endsection