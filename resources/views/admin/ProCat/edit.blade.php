@extends('admin.layouts.master')
@section('context')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">ویرایش نمودن دسته بندی</h3>
            <br><br>
            <a class="btn  pull-right" href="{{route('procat.index')}}">
                <i class="fa fa-list"></i> لیست دسته بندی
            </a>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!! Form::model($cat, ['route' => ['procat.update', $cat->id], 'method' => 'PATCH']) !!}

        <div class="box-body">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label"> نام دسته بندی</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder=" نام دسته بندی"
                           name="name" value="{{$cat->name}}">
                </div>
            </div>
            <br><br>

            <div class="form-group">
                <label for="parent" class="col-sm-2 control-label">سرگروه را انتخاب کنید</label>
                <div class="col-sm-10">
                    <select name="parent_id">
                        <option value="0">سرگروه</option>
                        @foreach($mainCats as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                    @if ($c->childrenRecursive!=null)
                        @include('admin.partial.childrenRecursive',['c'=>$c->childrenRecursive,'level'=>2])
                    @endif
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
