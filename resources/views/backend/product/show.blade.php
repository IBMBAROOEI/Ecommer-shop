
@include('backend.sidebar')
@include('backend.resorce_css')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> جدول محصول</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          @include('mesage.erorr')
          <table class="table table-hover table-bordered dataTable" id="sampleTable">
            <thead>
            <tr>
              <th>عکس محصولات</th>
              <th> <i class="fa fa-trash" aria-hidden="true"></i>حذف</th>
              <th> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products->Picture as $product)
              <tr>
                <td><img width="50px" src="{{ asset('uploads/'.$product->image) }}"></td>

                <td><form action="{{ route('delete_pic', $product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i>حذف</button>
                  </form></td>
                <td><a class="btn btn-primary" href="{{route('edit_product_image', $product->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</a></td>

              </tr>
            @endforeach
            </tbody>
          </table>
            <tbody>

              <form  method="post" action="{{route('upload')}}"enctype="multipart/form-data">
                @csrf
              <div class="row m-5">
                <div class="input-group control-group" >
                  <label class="control-label">اپلود فایل</label>

                  <input type="file" name="image[]" required="" multiple  class="form-control">
                  <input type="hidden" name="product_id" value="{{$products->id}}" >
                </div>
              </div>
              <div class="col-lg-6">
                <button type="submit"  class="btn btn-outline-success">اپلود فایل</button>
              </div>
              </form>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div>
  </div>

</main>

