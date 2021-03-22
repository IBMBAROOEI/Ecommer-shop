
<div class="col-sm-3">
    <div class="left-sidebar">
        <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian">

            @foreach($categores as $category)
                <!--category-productsr-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    <a id="{{$category->id}}" href="{{route('categorie.show',$category->id)}}"> <span  class="pull-right"></span>{{$category->name_categorie}}</a>

                                </a>
                            </h4>
                        </div>
                    </div>
                @endforeach

            </div>
            <!--/category-products-->

            <div class="brands_products">
                <!--brands_products-->
                <h2>Brands</h2>
                <div class="brands-name">
                    <ul class="nav nav-pills nav-stacked">
                        @foreach($brands as $brand)
                            <li >
                                <a id="{{$brand->id}}" href="{{route('brand.show',$brand->id)}}"> <span  class="pull-right"></span>{{$brand->brand_name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


