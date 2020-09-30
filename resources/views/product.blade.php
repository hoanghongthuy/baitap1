@foreach ($data as $r)
<div>
    {{$r->tensach}} ===
    <a href="{{url('cart/add')}}/{{$r->masach}}" >Mua</a>
</div>
@endforeach