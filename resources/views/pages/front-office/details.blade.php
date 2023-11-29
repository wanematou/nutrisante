@extends('layouts.master')





@section('page-content')

<div class="breadcrump">
    <a href="/">Accueil</a> / <a href="">Blog</a>/ Articles
</div>
<div class="page-header ms-4">
    <a href="/blog"><img src="{{asset('images/retour.png')}}" alt=""></a>  
</div>
<div class="card col-md-9 mx-auto">
    <img src="{{ asset('images/'.$post->image) }}" alt="" width="auto" height="300" class="card-img-top col-md-4 mt-1">
    <div class="card-body">
        <div class="d-md-flex">
            <a href="javascript:void(0);" class="d-flex me-4 mb-2"><i class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent text-secondary bradius"></i>
                <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">{{$post->created_at->format('d/m/y')}}</div>
            </a>
            <a href="profile.html" class="d-flex mb-2"><i class="fe fe-user fs-16 me-1 p-3 bg-primary-transparent text-primary bradius"></i>
                <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">{{$post->user->name }}r</div>
            </a>
           
        </div>
    </div>
    <div class="card-body">
        <h3> {{$post->title}} </h3>
        <p>{{$post->content}}</p>
    </div>
</div>

@endsection