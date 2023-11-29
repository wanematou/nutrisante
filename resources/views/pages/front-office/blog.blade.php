@extends('layouts.master')

@section('page-content') 

    <div class="breadcrump">
        <a href="/">Accueil</a> / Blog
    </div>
    <div class="row" id="sideapp">
        @foreach ($posts as $post)
            <div class="col-sm-6 col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-4 border">
                    <a href="{{ route('posts.edit', $post) }}">
                        @if($post->image)
                            <img src="{{ asset('images/'.$post->image) }}" alt="" width="auto" height="200" class="card-img-top">
                        @else
                            <p>Aucune photo</p>
                        @endif
                    </a>

                    <div class="card-body">
                        <h3 class="card-title"><a href="{{ route('posts.edit', $post) }}">{{ Str::limit($post->title, 15) }}</a></h3>
                        <h4 class="card-subtitle mb-2 text-muted">{{ $post->category->name }}</h4>
                        <p class="card-text text-muted">{{ Str::limit($post->content, 55) }}... <a href="{{ route('posts.edit', $post) }}">Voir plus</a></p>
                        <div>
                            <a href="profile.html" class="text-default">Ecrit par {{ $post->user->name }} {{ $post->user->prenom }}</a>
                            <small class="d-block text-muted">Le {{ $post->created_at->format('d/m/y') }}</small>
                        </div>
                    </div>

                    
                </div>               
            </div>
        @endforeach 
        {{ $posts->links() }}
    </div>
@endsection
