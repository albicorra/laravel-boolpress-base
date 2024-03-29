@extends('layouts.app')

@section('content')

    <div class="container">
        <a class="btn btn-info my-3" href="{{route('admin.posts.create')}}">Crea un post</a>
    
        <div class="row justify-content-center">
            @foreach ($posts as $post)
            <div class="card m-3 col-auto" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$post->slug}}</h6>
                  <p class="card-text">{{$post->content}}</p>
                  <a href="{{route('admin.posts.edit', $post)}}" class="card-link">Modifica</a>
                  <form class="d-inline" action="{{route('admin.posts.destroy', $post/* [ 'comic' => $post->id ] */)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-link">
                        Cancella
                    </button>
                </form>
                </div>
              </div>
            @endforeach
        </div>
    </div>

@endsection