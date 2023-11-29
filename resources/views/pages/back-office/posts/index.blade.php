
@extends('layouts.masterback')

@section('page-content')
    <div class="container-fluid">
        <div class="side-app " >
            <div class="main-container container-fluid" >
                @if(session('success'))
                    <div class="alert alert-white bg-green">
                    {{ session('success') }}
                    </div>
                @endif

                <div class="page-header" >
                    <h1 class="page-title" id="blog">Blog</h1>
                <div>
                <div class="breadcrumb">
                    <a href="{{route('posts.create')}}" class="btn btn-green"><i class="fa fa-plus-square me-2"></i>Creer un nouvel article</a>
                </div>
                </div>
            </div>
           
            
            <div class="row" id="sideapp">
                @foreach ($posts as $post)
                    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-4">
                        <div class="card">
                           <div class="imageblg">
                                @if($post->image)
                                    <img src="{{ asset('images/'.$post->image) }}" alt=""  class="card-img-top">
                                    @else
                                    <p>Aucune photo</p>
                                @endif
                           </div>
                            
                            
                            <div class="card-body d-flex flex-column">
                                <h3><a href="blog-details.html">{{ Str::limit($post->title, 15) }}</a></h3>
                                <h4 class=" text-primary w-50" >{{Str::limit($post->category->name,15) }}</h4>
                                <div class="text-muted">{{ Str::limit($post->content, 125) }}</div>
                                <div class="d-flex align-items-center pt-5 mt-auto">
            
                                    <div>
                                        <a href="profile.html" class="text-default">écrit par {{$post->user->name }} {{$post->user->prenom }}</a>
                                        <small class="d-block text-muted">Le {{$post->created_at->format('d/m/y')}}</small>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="{{route('posts.show', $post)}}" ><img src="{{asset('images/edit.png')}}" alt="edit" width="30" height="auto"></i></a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" style="border:none; background-color:transparent; cursor:pointer;">
                                                <img src="{{ asset('images/delete.png') }}" alt="delete" width="30" height="auto">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>               
                    </div>
                @endforeach 
                    {{ $posts->links() }}
            </div>         
        </div> 
    </div>                 
@endsection 