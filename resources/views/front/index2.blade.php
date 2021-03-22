<!DOCTYPE html>
<html lang="en">
@include('front.resorce')


<body>
@include('front.navbar')
<section>

    <div class="container">
        <div class="row">
            @include('mesage.susses')
            @include('front.sidebar')
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                        <h2 class="title text-center">نمایش محصولات جدید</h2>
                        @foreach($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product2.jpg" alt="" />
                                            <h2 class=" translate">{{$product->price}}</h2>تومان
                                            <p>{{$product->name_product}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2 class=" translate">{{$product->price}}</h2>تومان
                                                <p>خرید اسان </p>
                                                <a href="{{route('show_front',$product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <a  href="{{url('add/wishlist',$product->id)}}"><li class="send text-center" id="{{$product->id}}"><button class="check_out"><i class="fa fa-heart"  aria-hidden="true"></i></button></li></a>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                </div>
                {{$products->links()}}
            </div>
        </div>
    </div>
</section>
@include('front.footer')
<!--/Footer-->

<script>
    var arabicNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $('.translate').text(function(i, v) {
        var chars = v.split('');
        for (var i = 0; i < chars.length; i++) {
            if (/\d/.test(chars[i])) {
                chars[i] = arabicNumbers[chars[i]];
            }
        }
        return chars.join('');
    })

    $(document).ready(function() {
        $("#send").click(function () {
            var search = $('#search').val();
            $.ajax({
                dataType: 'html',
                type: 'get',
                url: "{{ route('search_all') }}",
                data: {search: $('#search').val()},
                success: function (response) {
                    window.location.reload();
                }
            });
        });
    });
</script>

</body>

</html>