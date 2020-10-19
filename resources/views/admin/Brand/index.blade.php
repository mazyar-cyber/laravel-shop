@extends('admin.layouts.master')
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#option3").click(function () {
                if (this.checked) {
                    $(".checkBox").each(function () {
                        this.checked = true
                    })
                } else {
                    $(".checkBox").each(function () {
                        this.checked = false
                    })
                }
            })
        })
    </script>
@endsection
@section('context')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h2 class="box-title">لیست برندهای محصولات</h2>
                    {{--                    @if (\Illuminate\Support\Facades\Session::has('subcat'))--}}
                    {{--                        <div class="alert alert-error">{{Session('subcat')}}</div>--}}
                    {{--                    @endif--}}
                    <br><br>
                    <a class="btn btn-app pull-left" href="{{route('brand.create')}}">
                        <i class="fa fa-plus"></i> جدید
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
                {{--                {!! Form::open(['route' => 'proCat.deleteSelected', 'method' => 'DELETE']) !!}--}}

                <div class="box-body table-responsive no-padding">
                    {{--                    <form action="/admin/propertieselectedDelete" method="post">--}}
                    {!! Form::open(['route' => 'brand.selectedDel', 'method' => 'POST']) !!}

                    <select name="checkBoxArray" class="select2-dropdown">
                        <option value="delete">حذف</option>
                    </select>
                    <input type="submit" value="اعمال" name="submit" class="btn btn-danger">
                    <br>
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th><input type="checkbox" name="checkBoxArray" id="option3"></th>
                            <th>عنوان</th>
                            <th>توضیحات</th>
                            <th>تاریخ</th>
                            <th> ویرایش</th>
                        </tr>

                        @foreach($brands as $brand)
                            <tr>
                                <td><input class="checkBox" type="checkbox" name="checkBoxArray[]"
                                           value="{{$brand->id}}"></td>

                                <td>{{$brand->name}}</td>

                                <td>{{\Illuminate\Support\Str::limit($brand->description, 121, '...')}}</td>

                                <td>
                                    {{\Morilog\Jalali\Jalalian::forge($brand->created_at)->format('%B %d، %Y') }}
                                </td>

                                <td>
                                    <a href="brand/{{$brand->id}}/edit"
                                       class="btn btn-instagram">ویرایش</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! Form::close() !!}
                </div>

                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
