@extends('layouts.app')

@section('title')Главная сраница@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <h1 class="mt-5 text-center">Список записей</h1>
                @if ($flash = session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ $flash }}
                    </div>
                @endif
                @foreach($data as $el)
                    <div class="alert alert-info text-center mt-5">
                        <h3>{{ $el->record }}</h3>
                        <p><small>{{ $el->created_at }}</small></p>
                        <a href="{{ route('record', $el->id) }}"><button class="btn btn-success">Редактировать</button></a>
                        <a href="{{ route('record-delete', $el->id) }}"><button class="btn btn-danger">Удалить</button></a>
                    </div>
                @endforeach
                {{$data->links()}}
            </div>
        </div>
    </div>
@endsection