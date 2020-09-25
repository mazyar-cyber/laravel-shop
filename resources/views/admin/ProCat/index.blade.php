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
                    <br><br>
                    <a class="btn btn-app pull-right" href="{{route('procat.create')}}">
                        <i class="fa fa-edit"></i> افزودن
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
                {!! Form::open(['route' => 'proCat.deleteSelected', 'method' => 'DELETE']) !!}
                <input type="submit" name="checkBoxArray" class="btn btn-danger" value="حذف همه">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th><input type="checkbox" name="checkBoxArray" id="option"></th>
                            <th>عنوان</th>
                            <th>زیرگروه</th>
                            <th>تاریخ</th>
                            <th>حذف همه</th>
                            <th></th>
                        </tr>
                        @foreach($procats as $cat)
                            <tr>
                                <td><input class="checkBox" type="checkbox" name="checkBoxArray[]"
                                           value="{{$cat->id}}"></td>
                                <td>{{$cat->name}}</td>
                                @if ($cat->parent_id)
                                    @if ($cat->category)
                                        <td>{{$cat->category->name}}</td>
                                    @else
                                        <td>سرگروه آن از بین رفته</td>
                                    @endif
                                @else
                                    <td>سرگروه است</td>
                                @endif
                                <td>
                                    {{\Morilog\Jalali\Jalalian::forge($cat->created_at)->format('%B %d، %Y') }}
                                </td>

                                {!! Form::model($cat, ['route' => ['procat.destroy', $cat->id], 'method' => 'DELETE']) !!}
                                <td>
                                    <button class="btn btn-danger"> حذف</button>
                                </td>
                                {!! Form::close() !!}

                                {!! Form::model($cat, ['route' => ['procat.edit', $cat->id], 'method' => 'GET']) !!}
                                <td>
                                    <button class="btn btn-warning  ">ویرایش</button>
                                </td>
                                {!! Form::close() !!}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {!! Form::close() !!}
            <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
