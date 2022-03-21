@extends('layouts.admin')

@section('title','product list')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-10 back_show">
            <h1 class="mt-5 mb-3">{{$post->title}}</h1>

            <div><strong class="info_smart mb-5">Category:</strong> {{$post->category?$post->category->name:'-'}}</div>
            
            <img src="{{$post->img}}" alt="" class="col-8 w-100 mt-5 mb-5">
            
            <p><strong class="info_smart">Ingredients:</strong> {{$post->ingredients}}</p>
            
            <ul class='p-0'>
                <strong class="info_smart mt-3">Description:</strong> 
                <li>
                    {{$post->content}}
                </li>
            </ul>
            <ul class='p-0'>
                <strong class="info_smart">Price:</strong> 
                <li>
                    {{$post->price}}
                </li>
            </ul>
            <ul class='p-0'>
                <strong class="info_smart">Time for Cook:</strong> 
                <li>
                    {{$post->time_cooking}}
                </li>
            </ul> 
            <a href="{{route("admin.posts.index")}}"><button type="button" class="btn btn-primary m-3">Back</button></a>
        </div>
    </div>
</div>
@endsection