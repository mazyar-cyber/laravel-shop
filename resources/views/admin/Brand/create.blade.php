@extends('admin.layouts.master')
@section('context')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">اضافه نمودن برند</h3>
            @include('admin.partial.error')
            @if (\Illuminate\Support\Facades\Session::has('brand-save'))
                <div class="alert alert-success">
                    {{session('brand-save')}}
                </div>
            @endif
            <br><br>
            <a class="btn  pull-right" href="{{route('brand.index')}}">
                <i class="fa fa-list"></i> لیست برندها
            </a>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> نام برند</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3"
                                   placeholder="نام برند را اینجا بنویسید"
                                   name="name" required>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"> توضیحات برند</label>

                            <div class="col-sm-10">
                                <textarea name="description" class="form-control" required></textarea>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="inputEmail3" class="col-sm-2 control-label"> عکس برند</label>
                            <br><br>
                            <input type="file" name="file" class="form-control" required>
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
@section('script')
    <script type="text/javascript" src="/js/dropzone.min.js"></script>
{{--    <script>--}}
{{--        var drop = new Dropzone('#photo', {--}}
{{--            addRemoveLinks: true,--}}
{{--            maxFiles: 1,--}}
{{--            url: "{{route('brand.upload')}}",--}}
{{--            sending: function (file, xhr, formData) {--}}
{{--                formData.append("_token", "{{csrf_token()}}")--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
@endsection
@endsection
