@extends('layouts.public.master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8">
<h1>Add Post </h1>
        <form action="{{route('addPost.store')}}" method="post" role="form" component="profile/edit/form">
            @csrf

            <div class="form-group">
                <label for="fullname">Post Titile</label>
                <input class="form-control" type="text" id="post_title" name="post_title" placeholder="Add post title " value="">
            </div>


            <div class="form-group">
                <label for="location">Categories</label>
                <select name="category_id" class="form-select form-control" id="">
                    @foreach ($cat as $item)
                    <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="birthday">Discussion tag</label>
                <input type="text" class=" form-control" name="post_tag"></textarea>
            </div>

            <div class="form-group">
                <label for="birthday">Discussion body</label>
                <textarea class="ckeditor form-control" name="post_body"></textarea>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Add Post">

        </form>

    </div>
</div>
</div>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

@endsection
