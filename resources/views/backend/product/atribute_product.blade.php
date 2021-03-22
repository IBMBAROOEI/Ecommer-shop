
{{  $products->id}}

@include('backend.sidebar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>محصول جدید</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">فرم محصولات</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('mesage.erorr')
            <div>
                @include('mesage.susses')
                <div class="tile-body">
                    <form method="post" action="{{route('store_attr')}}">
                        @csrf
                        <input type="hidden"   required="" name="product_id" value="{{  $products->id}}">
                        <div class="row ">
                            <div class="col-lg-2">
                        <div class="form-group">
                            <label class="control-label">سایز</label>
                            <input name="size"   class="form-control"  required="" placeholder="اندازه را وارد کنید ">
                        </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="control-label">رنگ</label>
                                    <input name="color"  class="form-control"  required=""  placeholder="رنگ را وارد کنید ">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="control-label">تعداد بر اساس اندازه</label>
                                    <input name="stock" class="form-control"   required="" placeholder="تعدادرا وارد کنید ">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="control-label">کد محصول</label>
                                    <input name="sku" class="form-control"  required=""  placeholder="کد را وارد کنید ">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="control-label">قیمت براساس اندازه</label>
                                    <input name="price" class="form-control"  placeholder="قیمت را وارد کنید ">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit"  class="btn btn-outline-success">ثبت محصول</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover table-bordered dataTable" id="sampleTable">
        <thead>
        <tr>
            <th>قیمت محصول</th>
            <th>رنگ محصول</th>
            <th>اندازه محصول</th>
            <th>تعداد محصول</th>
            <th>کد محصول</th>
            <th> <i class="fa fa-trash" aria-hidden="true"></i>حذف</th>
            <th> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products->Attr__Product as $product)
            <tr>
                <td>{{$product->price}}</td>
                <td>{{$product->color}}</td>
                <td>{{$product->size}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->sku}}</td>
                <td><form action="{{ route('delete', $product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i>حذف</button>
                    </form></td>
                <td><a class="btn btn-primary" href="{{route('edit_atribute', $product->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
</main>
