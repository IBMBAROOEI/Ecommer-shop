<!DOCTYPE html>
<html lang="en">
@include('front.resorce')

<body>
@include('front.navbar')
<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach( $slider as  $key=> $slide)
                            <li data-target="#slider-carousel" data-slide-to="{{$key}}" class="active"></li>
                        @endforeach

                    </ol>
                    @foreach( $slider as $slide)
                        @if ($loop->first)
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-12">

                              <img  src="{{ asset('uploads/'.$slide->image) }}">
                                <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
                            </div>
                        </div>
                        @else
                        <div class="item">
                            <div class="col-sm-12">
                                <img  src="{{ asset('uploads/'.$slide->image) }}">
                                <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
                            </div>
                        </div>

                        @endif
                        @endforeach
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/slider-->

<section>

    <div class="container">
        <div class="row">
            @include('mesage.susses')
            @include('front.sidebar')
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <div id="appendproduct">
                    <h2 class="title text-center">نمایش محصولات جدید</h2>
                        @foreach($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img width="300px"  height="300px" src="{{ asset('uploads/'.$slide->image) }}">
                                            <h2 class=" translate">{{$product->price}}</h2>تومان
                                            <p>{{$product->name_product}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2 class=" translate">{{number_format($product->price, 3)}}</h2>تومان
                                                <p>خرید اسان </p>
                                                <a href="{{route('show_front',$product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                            {{--<input name="product_id" id="product_id" type="hidden" value="{{$product->id}}" />--}}
                                            <ul class="nav nav-pills nav-justified">
                                                <a  href="{{url('add/wishlist',$product->id)}}"><li class="send text-center" id="{{$product->id}}"><button class="check_out"><i class="fa fa-heart"  aria-hidden="true"></i></button></li></a>
                                            </ul>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{$products->links()}}
                <div class="recommended_items">
                    <!--recommended_items-->
                    <h2 class="title text-center">جدید ترین ها</h2>
                    @foreach($productlast as    $productlas)
                                <div class="col-lg-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img width="500px"  src="{{ asset('uploads/'.$productlas->image) }}">
                                                <h2 class=" translate">{{number_format($productlas->price)}}</h2>تومان
                                                <p>{{$product->name_product}}</p>
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
                        </div>
                    </div>
                </div>
                <!--/recommended_items-->
            </div>
        </div>
    </div>
    {{   $productlast->links()}}
</section>
@include('front.footer')
<!--/Footer-->


</body>

</html>