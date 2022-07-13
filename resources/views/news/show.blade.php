@extends('app')
@section('content')
    <div class="container my-5">
        <div class="col-12 mb-3">
            <div class="card" style="max-width: 500px">
                <img src="{{ $post->main_image }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description  }}</p>
                    <hr>
                    <p>Обновлено: <small>{{ \Carbon\Carbon::parse($post->updated_at)->format('d M Y h:i') }}</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection
