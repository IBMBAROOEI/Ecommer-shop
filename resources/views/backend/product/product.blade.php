
@include('backend.sidebar')




<main class="app-content">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="{{ asset('backend/tagsinput.js') }}" ></script>
  <link href="{{ asset('backend/tagsinput.css') }}" rel="stylesheet">
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
          <form method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="form-group col-lg-6">
              <label class="control-label">نام محصول</label>
              <input class="form-control" required name="name_product" type="text" placeholder="نام محصول">
            </div>
            <div class="form-group col-lg-6">
              <label class="control-label">سریال محصول /کد</label>
              <input class="form-control" required type="text" name="code_product" placeholder="کد محصول را وارد کنید">
            </div>
            </div>
            <div class="form-group">

              <label class="control-label">توضیحات در مورد محصول</label>
              <textarea class="form-control" required name="discription_product" rows="4" placeholder="  توضیحات در مورد محصول وارد کنید"></textarea>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">
                <div class="form-group">
                  <label class="control-label">دسته بندی </label>
                  <select name="categorie_id"  required class="form-control" id="exampleFormControlSelect1">
                    <option selected>  چه دسته  بندی  انتخاب کنید </option>
                    <option value="">
                      @include('parsial')
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">
                <label class="control-label">برند</label>
                <select name="brand_id" required class="form-control" id="exampleFormControlSelect1">
                  <option selected> برند را  انتخاب کنید </option>
                  <option value="">
                    @include('brand')
                  </option>
                </select>
              </div>
              <div class="form-group col-lg-6">
                <label class="control-label">عنوان </label>
                <input class="form-control" required name="slug" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">تعداد</label>
                  <input class="form-control" required name="stuck" type="number">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">قیمت</label>
                  <input class="form-control" required name="price" type="number">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">رنگ</label>
                  <div class="row">
                    <input class="form-control" required name="رنگ" type="number">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">اپلود فایل </label>
                  <input type="file" name="image"  class="form-control" >
                </div>
              </div>
              <div class="col-lg-6">
                <button type="submit"  class="btn btn-outline-success">ثبت محصول</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <td><a class="btn btn-primary" href="{{route('index_product')}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>h</a></td>
</main>


      <script>
        $(document).ready(function(){
          $(".tokenizationSelect2").select2({
            placeholder: "Your favourite car", //placeholder
            tags: true,
            tokenSeparators: ['/',',',';'," "]
          });
        })
      </script>
</body>
</html>
