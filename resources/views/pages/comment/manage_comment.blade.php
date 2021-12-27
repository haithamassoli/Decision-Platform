@extends('layouts.arabic.master')
@section('title','إدارة التعليقات')
@section('comment-active','class=active')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        @include('alerts.success')
        <div class="card ">
          <div class="card-header text-right">
            <h4 class="card-title">جدول التعليقات</h4>
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th class="text-center">
                      التعليق
                    </th>
                    <th class="text-center">
                      اسم المعلق
                    </th>
                    <th class="text-center">
                        عنوان المنشور
                      </th>
                    <th class="text-center">
                     تاريخ الانشاء
                    </th>
                    <th class="text-center">
                      الحذف
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                      <td class="text-center">
                        {{$comment->comment_id}}
                      </td>
                      <td class="text-center">
                        {{$comment->comment}}
                      </td>
                      <td class="text-center">
                        {{$comment->name}}
                      </td>
                      <td class="text-center">
                        {{$comment->post_title}}
                      </td>
                      <td class="text-center">
                        {{$comment->created_at}}
                      </td>
                      <td class="text-center">

                        <form style="display: inline-block" action="{{route('admin.manage_comments.destroy',$comment->comment_id)}}" method="POST">
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
  </div>
@endsection
