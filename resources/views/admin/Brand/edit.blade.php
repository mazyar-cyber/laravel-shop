@extends('admin.layouts.master')
@section('context')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">ویرایش برند</h3>
            <br><br>
            <img src="/storage/photos/brand/{{$brand->photo_path}}" width="200px" alt="brand-pic">
            @include('admin.partial.error')
            <br><br>
            <a class="btn  pull-right" href="{{route('brand.index')}}">
                <i class="fa fa-list"></i> لیست برندها
            </a>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!! Form::model($brand, ['route' => ['brand.update', $brand->id], 'method' => 'PATCH','files'=>true]) !!}

        <div class="box-body">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label"> عنوان  برند محصول</label>

                <div class="col-sm-10">
                    <input type="hidden" value="{{$brand->id}}" name="id">
                    <input type="text" class="form-control" id="inputEmail3" placeholder=" نام برند محصول"
                           name="name" value="{{$brand->name}}">
                </div>
            </div>
            <br><br>

            <div class="form-group">
                <label for="parent" class="col-sm-2 control-label">توضیحات</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" cols="100">{{$brand->description}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="parent" class="col-sm-2 control-label">عکس</label>
                <input type="file" class="filename" name="file">
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-app pull-left" name="btn"><i class="fa fa-save"></i>ویرایش
                </button>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
