@extends('app')
@section('content')
    <div class="container my-5">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-3 mb-3">
                    <a href="{{ route('post', ['id' => $post->id]) }}" class="card text-decoration-none text-black">
                        <img src="{{ $post->main_image }}" class="card-img-top" alt="{{ $post->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::of($post->description)->words(30)  }}</p>
                            <hr>
                            <p>Обновлено:
                                <small>{{ \Carbon\Carbon::parse($post->updated_at)->format('d M Y h:i') }}</small></p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center my-3">
            {!! $posts->links() !!}
        </div>
    </div>
@endsection
