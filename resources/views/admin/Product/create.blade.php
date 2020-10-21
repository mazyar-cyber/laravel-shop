@extends('admin.layouts.master')
@section('context')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">ایجاد محصول</h3>
            @include('admin.partial.error')
            @if (\Illuminate\Support\Facades\Session::has('product-save'))
                <div class="alert alert-success">{{Session('product-save')}}</div>
            @endif
            <br><br>
            <a class="btn  pull-right" href="{{route('product.index')}}">
                <i class="fa fa-list"></i> لیست محصولات
            </a>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="{{route('product.store')}}" method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> نام محصول</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" نام محصول"
                                   name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> شناسه محصول</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" شناسه محصول"
                                   name="sku" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> نام مستعار محصول</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" نام مستعار محصول"
                                   name="slug" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> قیمت</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" قیمت محصول را وارد کنید"
                                   name="price" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> تخفیف</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" مقدار مبلغ تخفیف را اینجا وارد کنید"
                                   name="discount_price" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="parent" class="col-sm-2 control-label">وضعیت را انتخاب کنید</label>
                        <div class="col-sm-10">
                            <select name="status">
                                <option value="0">فعال</option>
                                <option value="1">غیرفعال</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand" class="col-sm-2 control-label">برند محصول؟</label>
                        <div class="col-sm-10">
                            <select name="brand">
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="parent" class="col-sm-2 control-label">دسته بندی محصول؟</label>
                        <div class="col-sm-10">
                            <select name="cat">
                                @foreach($cats as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> توضیحات</label>

                        <div class="col-sm-10">
                            <textarea name="description" class="form-control"></textarea>
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
