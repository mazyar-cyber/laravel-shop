@extends('admin.layouts.master')
@section('context')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">ویرایش نمودن مشخصه ی محصول</h3>
            @include('admin.partial.error')
            @if (session('value-update'))
                <div class="alert alert-success">{{session('value-update')}}</div>
            @endif
            <br><br>
            <a class="btn  pull-right" href="{{route('ProductPropertyValue.index')}}">
                <i class="fa fa-list"></i> لیست مقادیر ویژگی های محصولات
            </a>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!! Form::model($value, ['route' => ['ProductPropertyValue.update', $value->id], 'method' => 'PATCH']) !!}

        <div class="box-body">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label"> عنوان مقدار مشخصه ی محصول</label>

                <div class="col-sm-10">
                    <input type="hidden" value="{{$value->id}}" name="id">
                    <input type="text" class="form-control" id="inputEmail3" placeholder=" نام مشخصه ی محصول"
                           name="title" value="{{$value->name}}">
                </div>
            </div>
            <br><br>

            <div class="form-group">
                <label for="parent" class="col-sm-2 control-label"> مشخصه را انتخاب کنید</label>
                <div class="col-sm-10">
                    <select name="property">
                        @foreach($property as $p)
                            <option value="{{$p->id}}" @if ($p->id==$value->property_id)
                            selected
                                @endif>{{$p->title}}</option>
                        @endforeach
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
