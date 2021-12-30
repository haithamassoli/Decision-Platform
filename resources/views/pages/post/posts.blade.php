@extends('layouts.arabic.master')
@section('title','إدارة المنشورات')
@section('post-active','class=active')
@section('content')
<div class="content">

    <div class="row">
      <div class="col-md-12">
        @include('alerts.success')
        <div class="card ">
          <div class="card-header text-right">
            <h4 class="card-title">جدول المنشورات</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th class="text-center">
                        عنوان المنشور
                    </th>
                    <th class="text-center">
                        نص المنشور
                    </th>
                    <th class="text-center">
                        اسم المستخدم
                    </th>
                    <th class="text-center">
                        اسم التصنيف
                    </th>
                    <th class="text-center">
                        الصورة
                    </th>
                    <th class="text-center">
                        تاريخ الانشاء
                    </th>
                    <th class="text-center">
                      إجراء
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 0;
                    @endphp
                    @foreach ($posts as $post)
                    @php
                        $counter++;
                    @endphp
                    <tr>
                      <td class="text-center">
                        {{$counter}}
                      </td>
                      <td class="text-center">
                        {{$post->post_title}}
                      </td>
                      <td class="text-center">
                        {{$post->post_body}}
                      </td>
                      <td class="text-center">
                        {{$post->name}}
                      </td>
                      <td class="text-center">
                        {{$post->category_name}}
                      </td>
                      <td class="text-center">
                        صورة المنشور
                        {{-- {{$post->post_image}} --}}
                      </td>
                      <td class="text-center">
                        {{$post->created_at}}
                      </td>
                      {{-- <td class="text-center">
                        <img src='{{asset("black/img/$post->post_image")}}' alt="" width="90px" height="90px">
                      </td> --}}
                      <td class="text-center">
                        <form style="display: inline-block" action="{{route('admin.manage_posts.destroy',$post->post_id)}}" method="POST">
                          @csrf
                          @method("delete")
                          <button class="btn btn-danger btn-sm">حذف</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>

            </div>

          </div>
        </div>

      </div>
    </div>
    <div class="row">
      <style>
        .pagi *{
          display: inline-block;

        }
      </style>
        <div class="col-md-12 pagi">
          {{ $posts->links() }}
        </div>

    </div>
  </div>

@endsection
