<!DOCTYPE html>
<html lang="en">

@include('front.resorce')


<body>
@include('front.navbar')
<section>
    @include('mesage.susses')
    @include('mesage.erorr')
    <div class="container">
        <div class="row">
            @include('front.sidebar')
            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <form method="post" action="{{url('add-to-cart',$products->id)}}">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ asset('uploads/thumbnails/' .$products->image) }}">
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        @foreach($products->Picture as $attrs)
                                            <a href=""><img width="50px" src="{{ asset('uploads/'.$attrs->image) }}"></a>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>

                            </div>
                        </div>
                        <div class="col-sm-7">

                            <div class="product-information">
                                <!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2> </h2>
                                <img src="images/product-details/rating.png" alt="" />
                                <span>
									<span class="translate" id="dynamic_price">{{$products->price}}</span>
                                <span id="dynamic_color">{{$products->color}}</span>
                                    @csrf
                                <label>تعداد:</label>
                                <input type="text" name="quntity"  value=""  />

                                        {{--<button>Add to cart </button>--}}
                                         <button type="submit"><i class="fa fa-shopping-cart"></i>خرید</button>
                                </span>
                                <p><b>نام محصول:</b> {{$products->name_product}}</p>
                                <p><b>کدمحصول:</b> {{$products->code_product}}</p>
                                <p><b>برند محصول:</b></p>{{$products->Brand->brand_name}}</h2>
                                <div  class="form-group">
                                    <label for="exampleFormControlSelect2">اندازه</label>
                                    <select  name="size" id="idSize"  class="form-control">
                                        @foreach($products->Attr__Product as $attrs)
                                            <option value="{{$products->id}}-{{$attrs->size}}">{{$attrs->size}}</option>
                                        @endforeach
                                    </select>
                                </div>

                    </form>
                    <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>

                </div>
                <!--/product-information-->
            </div>
        </div>
    </div>
    <!--/product-details-->

    <div class="category-tab shop-details-tab">
        <!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="#details" data-toggle="tab">جزییات محصول</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="details">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <p>{{$products->discription_product}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/category-tab-->

    <div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">محصولات جدید</h2>
        @foreach($pro as    $productlas)
            <div class="col-lg-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img width="500px"  src="{{ asset('uploads/'.$productlas->image) }}">
                            <h2 class=" translate">{{number_format($productlas->price)}}</h2>تومان
                            <p>{{$productlas->name_product}}</p>
                            <a href="{{route('show_front',$productlas->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <a  href="{{url('add/wishlist',$productlas->id)}}"><li class="send text-center" id="{{$productlas->id}}"><button class="check_out"><i class="fa fa-heart"  aria-hidden="true"></i></button></li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--/recommended_items-->

    </div>
    </div>
    </div>
</section>

@include('front.footer')
<!--/Footer-->


</body>


<script type="text/javascript">
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
    $(document).ready(function () {
        $('#idSize').change(function () {
            var idSize=$(this).val();
            $.ajax({
                type: 'get',
                url:'/get/product/attr',
                data:{idSize:idSize},
                success: function (resp) {
                    $("#dynamic_price").addClass( 'translate').html(resp);



                }
                ,error:function () {
                    alert(resp);
                }
            });

        });
    });

</script>

<script type="text/javascript">

    $(document).ready(function () {
        $('#idSize').change(function () {
            var idSize=$(this).val();
            $.ajax({
                type: 'get',
                url:'/get/product/color',
                data:{idSize:idSize},
                success: function (resp) {
                    $("#dynamic_color").html(resp);

                }
                ,error:function () {
                    alert(resp);
                }
            });

        });
    });
</script>
</html>