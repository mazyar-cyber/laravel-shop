@extends('admin.layouts.master')
@section('context')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h2 class="box-title">لیست دسته بندی محصولات</h2>
                    <br><br>
                    <a class="btn btn-app pull-left" href="{{route('procat.create')}}">
                        <i class="fa fa-edit"></i> افزودن
                    </a>
                    
                    <a class="btn btn-app pull-left" href="{{route('procat.create')}}">
                        <i class="fa  fa-eraser"></i> حذف
                    </a>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>عنوان</th>
                            <th>زیرگروه</th>
                            <th>تاریخ</th>
                            <th>حذف همه <input type="checkbox" name="allCheckBox" class="CheckBox"></th>
                            <th></th>
                        </tr>
                        @foreach($procats as $cat)
                            <tr>
                                <td>{{$cat->name}}</td>
                                @if ($cat->parent_id)
                                    @if ($cat->category)
                                        <td>{{$cat->category->name}}</td>
                                    @else
                                        <td>سرگروه آن از بین رفته</td>
                                    @endif
                                @else
                                    <td>سرگروه است</td>
                                @endif
                                <td>{{$cat->created_at}}</td>

                                {!! Form::model($cat, ['route' => ['procat.destroy', $cat->id], 'method' => 'DELETE']) !!}
                                <td>
                                    <input type="checkbox" id="ch1" class="checkBox"> <button class="btn btn-danger  "> حذف </button>
                                </td>
                                {!! Form::close() !!}

                                {!! Form::model($cat, ['route' => ['procat.edit', $cat->id], 'method' => 'GET']) !!}
                                <td>
                                    <button class="btn btn-warning  ">ویرایش</button>
                                </td>
                                {!! Form::close() !!}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
