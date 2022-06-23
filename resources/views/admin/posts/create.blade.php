@extends('layouts.admin')

@section('content')

<h2>Create a new Post</h2>

@include('partials.errors')

<form action="{{route('admin.posts.store')}}" method="post">
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Learn php article" aria-describedby="titleHelper" value="{{old('title')}}">
      <small id="titleHelper" class="text-muted">Type the post title, max: 150 </small>
    </div>

    <div class="mb-3">
      <label for="cover_image" class="form-label">Cover Image</label>
      <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="Learn php article" aria-describedby="cover_imageHelper" value="{{old('cover_image')}}">
      <small id="cover_imageHelper" class="text-muted">Url image</small>
    </div>


    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" name="content" id="content" rows="3">
      {{old('content')}}
      </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection