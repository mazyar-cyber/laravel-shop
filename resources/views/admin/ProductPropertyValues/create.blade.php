@extends('admin.layouts.master')
@section('context')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">اضافه نمودن مقدار برای مشخصات</h3>
            @include('admin.partial.error')
            <br><br>
            <a class="btn  pull-right" href="{{route('ProductPropertyValue.index')}}">
                <i class="fa fa-list"></i> لیست
            </a>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="{{route('ProductPropertyValue.store')}}" method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> عنوان مقدار</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="(قرمز،کتان،..) عنوان مقدار را برای ویژگی موردنظر بنویسید"
                                   name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="parent" class="col-sm-2 control-label"> مشخصه را انتخاب کنید</label>
                        <div class="col-sm-10">
                            <select name="property">
                                @foreach($property as $p)
                                <option value="{{$p->id}}">{{$p->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-app pull-left" name="btn"><i class="fa fa-save"></i>ذخیره
                        </button>
                    </div>
                    <!-- /.box-footer -->
            </form>
        </div>
    </div>
@endsection
