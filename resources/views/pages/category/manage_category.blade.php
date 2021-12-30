@extends('layouts.arabic.master')
@section('title','إدارة الأصناف')
@section('cat-active','class=active')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        @include('alerts.success')
        <div class="card ">
          <div class="card-header text-right">
            <h4 class="card-title">جدول الأصناف</h4>
          </div>
          <a class="text-white text-right" href="{{route('admin.manage_categories.create')}}"><button class="btn ml-4 btn-success" style="width: 150px">إضافة</button></a>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr style="font-size:20px;font-weight:bolder">
                    <th class="text-center " >
                      #
                    </th>
                    <th class="text-center">
                      الإسم
                    </th>
                    <th class="text-center">
                      وصف الصنف
                    </th>
                    <th class="text-center">
                     تاريخ الانشاء
                    </th>
                    <th class="text-center">
                      التعديلات
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                      <td class="text-center">
                        {{$category->category_id}}
                      </td>
                      <td class="text-center">
                        {{$category->category_name}}
                      </td>
                      <td class="text-center" style="max-width:220px">
                       {{$category->category_description}}
                      </td>
                      <td class="text-center">
                        {{$category->created_at}}
                      </td>
                      <td class="text-center">
                        <a href="{{route('admin.manage_categories.edit', $category->category_id)}}"><button type="button" class="btn btn-primary btn-sm">تعديل</button></a>
                        <form style="display: inline-block" action="{{route('admin.manage_categories.destroy',$category->category_id)}}" method="POST">
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
