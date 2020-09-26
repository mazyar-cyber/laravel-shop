@foreach($c as $cat)
    <option value="{{$cat->id}}">{{str_repeat('-',$level)}}{{$cat->name}}</option>
    @if (count($cat->childrenRecursive)>0)
        @include('admin.partial.childrenRecursive',['c'=>$cat->childrenRecursive,'level'=>$level+2])
    @endif
@endforeach
