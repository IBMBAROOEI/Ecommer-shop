
@include('backend.sidebar')
@include('backend.resorce_css')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> برند</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>

      <li class="breadcrumb-item active"><a href="{{route("brand.index")}}">جدول برند </a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-bordered dataTable" id="sampleTable">
            <div class="tile-body">
              @include('mesage.susses')
              <form  method="post" action="{{route('brand.update',$brands->id)}}">

                @method('PUT')
                @csrf
                <div class="form-group">
                  <label class="control-label">نام</label>
                  @include('mesage.erorr')
                  <input class="form-control " name="brand_name"  value="{{$brands->brand_name}}" type="text" placeholder="برند">
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>بروز رسانی</button>
                </div>
              </form>
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div>
  </div>
</main>
</body>
</html>