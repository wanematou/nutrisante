

@extends('layouts.masterback')
@section('page-content')
    <div class="container-fluid">
        <div class="main-content app-content mt-0">
            <div class="side-app">
                <div class="main-container container-fluid">  
                    <div class="page-header">
                        <h1 class="page-title">Blog Post</h1>
                        <div>
                            <ol class="breadcrumb">
                               <a href="/dashboard" class="text-primary">Blog</a>
                            </ol>
                        </div>
                    </div>                   
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> Nouveau Post</div>
                                </div>
                                <form action="/posts" method="POST" enctype="multipart/form-data">
                                    
                                    @method('post')
                                    @csrf
                                    <div class="card-body">
                                            <div class="row mb-4">
                                                @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <label for="title" class="col-md-3 form-label">Titre :</label>
                                                <div class="">
                                                    <input type="text" name="title" class=" @error('title') is-invalid @enderror  form-control" value="{{$post->title}}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            @error('category_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            <label class="col-md-3 form-label" for="category_id">Categorie :</label>
                                            <div class="">
                                                <select name="category_id" class=" @error('category_id') is-invalid @enderror  form-control form-select select2" data-bs-placeholder="Select Country">
                                                        <option value="$categories"></option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" >{{$category->name}}</option>
                                                    @endforeach
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label  class="col-md-3 form-label">en ligne?</label>
                                            <div class="">                                            
                                                <input name="online" type="checkbox" value="{{$post->online}}">                                                                                        
                                            </div>
                                        </div>

                                    
                                        <div class="row">                                       
                                            @error('content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <label for="content" class="col-md-3 form-label mb-4"> Contenue :</label>
                                            <div class="mb-4">
                                                <textarea class=" @error('contenue') is-invalid @enderror content" name="content" value="{{$post->content}}"></textarea>
                                            </div>
                                        </div>
                                    
                                  
                                        <div class="form-group mb-0">
                                            @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <label for="image" class="col-md-3 form-label mb-4">Telecharger image :</label>
                                            <input class="@error('iamge') is-invalid @enderror" id="demo" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                        </div>
                                    </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Poster</button>                                        
                                        </div>

                                </form>
                              
                             
                              
                             
                            </div>
                        </div>                       
                    </div>                    
                </div>
            </div>            
        </div>                    
    </div>                 
@endsection 