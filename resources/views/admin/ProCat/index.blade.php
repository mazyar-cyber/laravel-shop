@extends('admin.layouts.master')
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#option").click(function () {
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
                    <h2 class="box-title">لیست دسته بندی محصولات</h2>
                    @if (\Illuminate\Support\Facades\Session::has('subcat'))
                        <div class="alert alert-error">{{Session('subcat')}}</div>
                    @endif
                    <br><br>
                    <a class="btn btn-app pull-left" href="{{route('procat.create')}}">
                        <i class="fa fa-plus"></i> جدید
                    </a>
                    {{--                    {!! Form::open(['route' => 'proCat.deleteAll', 'method' => 'DELETE']) !!}--}}
                    {{--                    <button class="btn btn-app pull-left" name="btn">--}}
                    {{--                        <i class="fa  fa-eraser"></i>حذف همه--}}
                    {{--                    </button>--}}
                    {{--                    {!! Form::close() !!}--}}

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
                    {{--                    <form action="/admin/proCatSelectedDelete" method="post">--}}
                    {!! Form::open(['url' => '/admin/proCatSelectedDelete', 'method' => 'POST']) !!}

                    <select name="checkBoxArray" class="select2-dropdown">
                        <option value="delete">حذف</option>
                    </select>
                    <input type="submit" value="اعمال" name="submit" class="btn btn-danger">
                    <br>
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th><input type="checkbox" name="checkBoxArray" id="option"></th>
                            <th>عنوان</th>
                            <th>دسته والد</th>
                            <th>تاریخ</th>
                            <th> ویرایش</th>
                        </tr>

                        @foreach($procats as $cat)
                            <tr>
                                <td><input class="checkBox" type="checkbox" name="checkBoxArray[]"
                                           value="{{$cat->id}}"></td>

                                <td><a href="procat/{{$cat->id}}/edit">{{$cat->name}}</a></td>

                                @if ($cat->parent_id)
                                    @if ($cat->category)
                                        <td>{{$cat->category->name}}</td>
                                    @else
                                        <td>سرگروه آن از بین رفته</td>
                                    @endif
                                @else
                                    <td><span style="background-color:yellow;">دسته اصلی</span></td>
                                @endif


                                <td>
                                    {{\Morilog\Jalali\Jalalian::forge($cat->created_at)->format('%B %d، %Y') }}
                                </td>

                                <td>
                                    <a href="procat/{{$cat->id}}/edit" class="btn btn-instagram">ویرایش</a>
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
