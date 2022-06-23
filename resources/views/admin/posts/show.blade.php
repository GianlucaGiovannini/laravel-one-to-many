@extends('layouts.admin')


@section('content')


<div class="posts py-5">
    <div class="row row-cols-2 pt-5 px-5">
        <div class="col px-3">
            <img class="img-fluid" src="{{$post->cover_image}}" alt="{{$post->title}}">
        </div>
        <div class="col px-5 d-flex justify-content-center align-items-center">
            <div class="post-data pe-5">
                <h1>{{$post->title}}</h1>
                <div class="content">
                    {{$post->content}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection