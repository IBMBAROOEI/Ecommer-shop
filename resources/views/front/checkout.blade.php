<!DOCTYPE html>
<html lang="en">
@include('front.resorce')

<body>
@include('front.navbar')

<section id="cart_items">
    <div class="container">
        @include('mesage.erorr')
        <div class="review-payment">
            <h2>ثبت سفارش </h2>
        </div>

        @if( empty(session('cart')))
            <a  href="{{url('/order/peyment')}}"><button class="check_out"> صفحه ی پرداخت</button></a>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">نام محصول</td>
                        <td class="color">رنگ</td>
                        <td class="price">قیمت</td>
                        <td class="quantity">تعداد</td>
                        <td class="total">مبلغ قابل پرداخت</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $total = 0 ?>
                    @if(session('cart'))
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quntity'] ?>
                            <tr>
                                <td class="name_product">
                                    <h4><a href="">{{ $details['name_product'] }}</a></h4>
                                </td>
                                <td class="color">
                                    <h4><a href="">{{ $details['color'] }}</a></h4>
                                </td>
                                <td class="cart_price">
                                    <h4><a href="">{{ $details['price'] }}</a></h4>
                                </td>

                                <td class="quntity">
                                    <h4><a href="">{{ $details['quntity'] }}</a></h4>
                                </td>
                                <td class="cart_total">
                                    <h4><a href="">$ {{ $total }}</a></h4>
                                </td>

                            </tr>

                    </tbody>
                    @endforeach
                    @endif
                </table>
                <form method="post" action="{{route('order')}}" >
                    @csrf
                    <input type="hidden" name="users_id" value="Auth::id())->get()"><br />
                    @else

                        <button class="check_out">پرداخت</button>

                    @endif
                </form>
            </div>
            <div class="total_area">
                <ul>
                    <li>قیمت  <span>تومان {{$total}}</span></li>
                </ul>

            </div>
    </div>
</section>
@include('front.footer')
</body>
</html>