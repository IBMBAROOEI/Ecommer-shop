
@foreach($brands as $bra)
    <option value="{{$bra->id}}">
    {{$bra->brand_name}}
    </option>
@endforeach
