@extends('admin.layouts.master')
@section('context')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">اضافه نمودن کاربر</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ایمیل</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">رمز عبور</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز عبور">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">ارسال فایل</label>
                    <input type="file" id="exampleInputFile">

                    <p class="help-block">متن راهنما</p>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> مرا به خاطر بسپار
                    </label>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">ارسال</button>
            </div>
        </form>
    </div>
@endsection
