@extends('layouts.admin')

@section('title','posts list')

@section('content')
<div class="text-center">
    <a href="{{route("admin.posts.create")}}"><button type="button" class="btn btn-success mb-5 mt-5">Aggiungi</button></a>  <!--questo bottone se cliccato reindirizza alla route posts/create, possiamo vedere la rotta con php artisan route:list-->
</div>
<div class="container">
    <div class="row justify-content-around flex-wrap">
        @foreach($posts as $post)
        <div class="col-4 text-center ">
            <div class="my_height">
                <h1 class="mt-5 mb-4">{{$post->title}}</h1>
                <div class="mb-4">{{$post->category?$post->category->name:'-'}}</div>
                <div class="col-12 mt-5 mb-5">
                    <img class="w-100 product_img" src="{{$post->img}}" alt="">
                </div>
                <p><strong class="info_smart">ingredients:</strong> {{$post->ingredients}}</p>
                <ul class="p-0">
                    <strong class="info_smart">Description:</strong> 
                    <li>
                        {{$post->content}}
                    </li>
                </ul>
                <p><strong class="info_smart">Time Cooking:</strong> {{$post->time_cooking}}</p>
            </div>
            <div class="d-flex justify-content-around">
                <a href="{{route("admin.posts.show", $post->id)}}"><button type="button" style="background-color:rgb(218, 235, 107; color:black;" class="btn btn-primary m-3">See More</button></a>  <!--con questo bottone richiamo la rotta posts/show dove show sarà il numero id del mio elemento.Quindi verrò indirizzato alla vista show.blade.php-->
                <a href="{{route("admin.posts.edit", $post->id)}}"><button type="button" style="background-color:rgb(218, 235, 107; color:black;" class="btn btn-primary m-3">Edit</button></a>  <!--con questo bottone richiamo la rotta posts/edit dove potrò modificare il mio elemento.Quindi verrò indirizzato alla vista edit.blade.php-->
                <form action="{{route("admin.posts.destroy", $post->id)}}" method="POST" onsubmit="return confirm('sicuro?')">
                    @csrf
                    
                    @method("DELETE")
                    <button type="submit" style="background-color:rgb(236, 148, 89); color:black; " class="btn btn-danger m-3">Delete</button>
                </form>
            </div>
        </div> 
        @endforeach
    </div>
</div>
@endsection
