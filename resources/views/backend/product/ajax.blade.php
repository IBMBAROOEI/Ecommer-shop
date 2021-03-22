
@include('backend.sidebar')
@include('backend.resorce_css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> جدول دسته بندی</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Tables</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          @include('mesage.susses')
          <table class="table table-hover table-bordered dataTable" id="sampleTable">
            <thead>
            <tr>
              <th>تعداد</th>
              <th>نام محصول</th>
              <th>  قیمت محصول</th>
              <th>نام دسته بندی</th>
              <th>وضعیت</th>
              <th> <i class="fa fa-trash" aria-hidden="true"></i>حذف</th>
              <th> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</th>
              <th>نمایش محصول</th>
              <th>برای وارد کردن جزییات محصول کلیک کنید</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $produc =>$product)
              @switch($product->status)
                @case(1)
                @php
                  $url=route('status',$product->id);
                  $status ='<a href="'.$url.'"class="badge badge-success">فعال</a>'
                @endphp
                @break
                @case(0)
                @php
                  $url=route('status',$product->id);
                  $status='<a href="'.$url.'"class="badge badge-warning">غیر فعال</a>'
                @endphp
                @break
                @default
              @endswitch
            <tr>
              <th> {{ $products->count()+ $produc}}</th>
              <td>{{$product->name_product}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->Categorie->name_categorie}}</td>
              <td>{!!  $status!!}</td>
              <td><form action="{{ route('delete', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i>حذف</button>
                </form></td>
              <td><a class="btn btn-primary" href="{{route('edit_product', $product->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</a></td>
              <td><a class="btn btn-primary" href="{{route('show_product', $product->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>دیدن جزییات </a></td>
              <td><a class="btn btn-primary" href="{{route('show_atribute', $product->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>وارد کردن جزییبات محصول </a></td>
            </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div>
  </div>
  {{$products->links()}}

</main>

