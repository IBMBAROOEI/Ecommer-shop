
@include('backend.sidebar')
@include('backend.resorce_css')
<main class="app-content">
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
              <th>  قیمت محصول</th>
             <th>نام محصول  </th>
              {{--<th>وضعیت</th>--}}
              <th> <i class="fa fa-trash" aria-hidden="true"></i>حذف</th>
              <th> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</th>
              <th>نمایش محصول</th>
              <th>برای وارد کردن جزییات محصول کلیک کنید</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sizes as $siz =>$size)
            <tr>
              <th> {{ $sizes->count()+ $siz}}</th>
              <td>{{$size->size}}</td>
              <td>{{$size->Product->name_product}}</td>
              <td><form action="{{ route('delete', $size->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i>حذف</button>
                </form></td>
              <td><a class="btn btn-primary" href="{{route('edit_product', $size->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</a></td>
              <td><a class="btn btn-primary" href="{{route('size.show', $size->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>وارد کردن قیمت </a></td>
              <td><a class="btn btn-primary" href="{{route('show_atribute', $size->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>وارد کردن تعداد محصول </a></td>
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
  {{--{{  $categores->links()}}--}}
</main>

