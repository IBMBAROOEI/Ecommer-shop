
<!DOCTYPE html>
<html lang="en">

@include('front.resorce')

@include('front.navbar')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu" >
                    <td class="image">عکس</td>
                    <td class="name"> کد محصول</td>
                    <td class="name"> نام محصول </td>
                    <td class="color">رنگ</td>
                    <td class="color">اندازه</td>
                    <td class="quantity">تعداد</td>
                    <td class="price"> محصول قیمت</td>
                    <td class="total"> جمع نهایی</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    {{--@if (Session::get('discount')  )--}}

                    {{--@php--}}
                    {{--Session::forget('discount');--}}
                    {{--@endphp--}}
                    {{--@endif--}}

                </tr>
                </thead>
                <tbody>
                <tr>

                    <?php $total = 0 ?>
                    @if(session('cart'))
                        @foreach(session('cart') as $id=> $details)

                            <?php $total += $details['price'] * $details['quntity'] ?>

                            <td class="image">
                                <img src="{{ asset('uploads/thumbnails/'. $details['image']) }}" alt="" width="30px">
                            </td>

                            <td class="code_product">
                                <h4><a href="">{{ $details['name_product'] }}</a></h4>
                            </td>
                                <td class="name_product">
                                    <h4><a href="">{{ $details['name_product'] }}</a></h4>
                                </td>
                            <td class="color">
                                <h4><a href="">{{ $details['color'] }}</a></h4>

                            </td>
                            <td class="size">
                                <h4><a href="">{{ $details['size'] }}</a></h4>
                            </td>
                            <td class="quntity">
                                <p class="translate">{{$details['quntity']}}</p>
                            </td>
                            <td class="cart_price translate">
                                <p class="translate">{{$details['price']}}</p>
                            </td>
                            <td class="actions" data-th="">
                                <button class="cart_quantity_delete remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                            </td>
                            <td data-th="Subtotal" class="text-center">تومان<span class="product-subtotal translate">{{ $details['price'] * $details['quntity'] }}</span></td>
                </tr>
                </tbody>
                @endforeach
                @endif
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->
@include('mesage.erorr')
@include('mesage.susses')
<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3></h3>
            <p></p>
        </div>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">

                <div class="total_area">
                    <ul>

                    </ul>

                    <div style="margin-left: 20px;"><a class="btn btn-default check_out" href="{{route('address.index')}}">ادامه</a></div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->


@include('front.footer')


</html>