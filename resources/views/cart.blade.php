<table border=1>
    <tr>
        {{-- <td>rowID</td> --}}
        <td>Mã sp</td>
        <td>Tên sp</td>
        <td>Giá</td>
        <td>SL</td>
        <td>Hình</td>
        <td>Xóa</td>
    </tr>
@foreach(Cart::content() as $k=>$v)
    <tr>
        {{-- <td>{{$v->rowId}}</td> --}}
        <td>{{$v->id}}</td>
        <td>{{$v->name}}</td>
        <td>{{$v->price}}</td>
        <td>{{$v->qty}}</td>
        <td><img src="{{url('book')}}/{{$v->options['hinh']}}" style="width:80px";></td>
        <td>
            <a href="{{url('cart/delete')}}/{{$v->rowId}}">Xóa</a>
        </td>
@endforeach
        <td><a href="{{url('cart/deleteAll')}}">Xóa hết</a></td>
    </tr>
</table>
<a href="product">Tiếp tục mua hàng</a>