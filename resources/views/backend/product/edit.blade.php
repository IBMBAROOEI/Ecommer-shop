
@include('backend.sidebar')
<main class="app-content">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="{{ asset('backend/tagsinput.js') }}" ></script>
  <link href="{{ asset('backend/tagsinput.css') }}" rel="stylesheet">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i>ویرایش محصول</h1>
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
            <form  method="post" action="{{route('update', $products->id)}}"  enctype="multipart/form-data">
              @csrf
              @method('PATCH')
            <div class="row">
              <div class="form-group col-lg-6">
                <label class="control-label">نام محصول</label>
                <input class="form-control" required name="name_product" value="{{$products->name_product}}" type="text" placeholder="نام محصول">
              </div>
              <div class="form-group col-lg-6">
                <label class="control-label">سریال محصول /کد</label>
                <input class="form-control" required type="text" name="code_product" value="{{$products->code_product}}" placeholder="کد محصول را وارد کنید">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">توضیحات در مورد محصول</label>
              <input class="form-control" required type="text" name="discription_product" value="{{$products->discription_product}}" placeholder="کد محصول را وارد کنید">

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
                <input class="form-control" value="{{$products->slug}}" required name="slug" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">تعداد</label>
                  <input class="form-control" value="{{$products->stuck}}" required name="stuck" type="number">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">قیمت</label>
                  <input class="form-control" value="{{$products->price}}" required name="price" type="number">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">رنگ</label>
                  <input type="text" name="color" value="{{$products->color}}" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">اپلود فایل </label>
                  <input type="file" name="image"  value="{{$products->image}}" class="form-control" >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">سایز </label>
                  <input type="text" name="size" value="{{$products->size}}" class="form-control">
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

        </div>
      </div>
    </div>
  </div>



</main>
<div id="jquery-script-menu">
  <div class="jquery-script-ads">
    <script type="text/javascript"><!--
      google_ad_client = "ca-pub-2783044520727903";
      /* jQuery_demo */
      google_ad_slot = "2780937993";
      google_ad_width = 728;
      google_ad_height = 90;
      //-->
    </script>
    <script type="text/javascript"
            src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script></div>
  <div class="jquery-script-clear"></div>
</div>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
  $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

      if (input.files) {
        var filesAmount = input.files.length;

        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();

          reader.onload = function(event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
          }

          reader.readAsDataURL(input.files[i]);
        }
      }

    };

    $('#images').on('change', function() {
      multiImgPreview(this, 'div.imgPreview');
    });
  });
</script>
</body>
</html>
