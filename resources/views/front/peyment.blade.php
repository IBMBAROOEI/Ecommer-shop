

<!DOCTYPE html>
<html lang="en">
@include('front.resorce')


<body>
@include('front.navbar')

<section id="cart_items">
        <div class="container">
                @include('mesage.erorr')
                <div class="review-payment">
                        <h2>مبلغ قابل پرداخت</h2>
                </div>

                <div class="table-responsive cart_info">
                        <form method="post" action="{{route('peyment_store')}}" >
                                @csrf
                                @foreach($o as $r)
                                        <input type="hidden" name="order_id" value="{{$r->id}}">

                                @endforeach
                                <button>پرداخت</button>
                                {{$r->order_total}}
                        </form>
                </div>

        </div>
</section> <!--/#cart_items-->
@include('front.footer')
</body>
</html>
