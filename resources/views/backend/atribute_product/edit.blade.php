
@include('backend.sidebar')
<main class="app-content">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="{{ asset('backend/tagsinput.js') }}" ></script>
  <link href="{{ asset('backend/tagsinput.css') }}" rel="stylesheet">
  <div class="app-title">
    <div>

    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">فرم ویژگی  محصولات</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      @include('mesage.erorr')
      <div>
        @include('mesage.susses')
        <div class="tile-body">
            <form  method="post" action="{{route('update_atribute', $attr->id)}}">
              @csrf
              @method('PATCH')
            <div class="row">
              <div class="form-group col-lg-2">
                <label class="control-label">سایز</label>
                <input class="form-control" required name="size" value="{{$attr->size}}" type="text" placeholder="اندازه">
              </div>
              <div class="form-group col-lg-2">
                <label class="control-label">رنگ</label>
                <input class="form-control" required name="color" value="{{$attr->color}}" type="text" placeholder="رنگ">
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="control-label">تعداد</label>
                  <input class="form-control" value="{{$attr->stock}}" required name="stock" type="text">
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="control-label">قیمت</label>
                  <input class="form-control" value="{{$attr->price}}" required name="price" type="number">
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="control-label">کد محصول</label>
                  <input class="form-control" value="{{$attr->sku}}" required name="sku" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
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
