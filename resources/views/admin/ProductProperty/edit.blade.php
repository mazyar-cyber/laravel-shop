@extends('admin.layouts.master')
@section('context')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">ویرایش نمودن مشخصه ی محصول</h3>
            @include('admin.partial.error')
            <br><br>
            <a class="btn  pull-right" href="{{route('productProperty.index')}}">
                <i class="fa fa-list"></i> لیست مشخصه ی محصول
            </a>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!! Form::model($property, ['route' => ['productProperty.update', $property->id], 'method' => 'PATCH']) !!}

        <div class="box-body">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label"> عنوان مشخصه ی محصول</label>

                <div class="col-sm-10">
                    <input type="hidden" value="{{$property->id}}" name="id">
                    <input type="text" class="form-control" id="inputEmail3" placeholder=" نام مشخصه ی محصول"
                           name="title" value="{{$property->title}}">
                </div>
            </div>
            <br><br>

            <div class="form-group">
                <label for="parent" class="col-sm-2 control-label">نوع مشخصه را انتخاب کنید</label>
                <div class="col-sm-10">
                    <select name="type">
                        <option value="تنها" @if ($property->type=='تنها')
                        selected
                        @endif>تنها</option>
                        <option value="چندتایی" @if ($property->type=='چندتایی')
                        selected
                            @endif>چندتایی</option>
                    </select>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-app pull-left" name="btn"><i class="fa fa-save"></i>ویرایش
                </button>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
