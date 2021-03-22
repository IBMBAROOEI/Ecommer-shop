
@foreach($categores  as $cat =>$cate)
    <option value="{{$cate->id}}">
        {{$cate->name_categorie}}
    </option>
    {{--<li>{{ $cate }}</li>--}}
@endforeach

{{--@if($subcategores)--}}
{{--@foreach($subcategores as $sub)--}}
    {{--<option value="{{$sub->id}}">--}}
        {{--{{$sub->name_subcategories}}--}}
    {{--</option>--}}

{{--@endforeach--}}
{{--@endif--}}

{{--@if($brands)--}}
{{--@foreach($brands as $bra)--}}
    {{--<option value="{{$bra->id}}">--}}
        {{--{{$bra->brand_name}}--}}
    {{--</option>--}}
{{--@endforeach--}}
    {{--@endif--}}
