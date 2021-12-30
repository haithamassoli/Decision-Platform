@extends('layouts.public.master')
{{-- <!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user-profile.css">
  </head> --}}
  @section('content')
    <div class="container">
      <div class="main-body">

          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src='{{asset("black/img/".Auth::user()->image)}}' alt="Admin"
                      class="rounded-circle" width="100">
                  <div class="mt-3">
                    <h4>{{Auth::user()->name}}</h4>
                    <p class="text-secondary mb-1">{{Auth::user()->email}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br>
            <?php
            // $posts =DB::table('posts')->where('user_id',Auth::user()->id)->get();
            $cats =DB::table('categories')->select('*')->get();
            ?>
            <!-- Copy Block On Line 32 To Main Page (Public Site) -->
            <!-- <div class="card mb-3 p-2 d-flex flex-row align-items-center"> -->
              <form action="{{route('profile_filter')}}" method="post" role="form">
                @csrf
              <div class="form-group">
                <label for="location">Filter by Category</label>
                <br>
                <select name="filter" class="form-select form-control" id="" style="width:400px;display:inline-block">
                    @foreach ($cats as $item)
                    <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                    @endforeach
                </select>
                <input class="btn btn-primary" type="submit" value="Filter" name="submit" style="display:inline-block">
              </form>
            </div>
              @include('alerts.success')
              <h4 class="mb-3" style="color: #ff3f18">Posts</h4>
              @if (@$posts !== null)
              @foreach ($posts as $item)
          <div class="row gutters-sm">
          <div class="col-md-12">
                <div class="row mb-3">
                  <div class="col-md-12 col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <a href="{{'./index/post/'.$item->post_id}}">
                          <h5 style="margin-bottom:-2px" class="card-title">{{$item->post_title}}</h5></a>
                        <small style="color:rgb(173, 173, 173)">{{ $item->created_at}}</small>
                        <p class="card-text">{!! $item->post_body !!} </p>
                        <form style="display: inline-block" action="{{route('profile_delete',$item->post_id)}}" method="POST">
                          @csrf
                          @method("delete")
                          <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
    @endsection
