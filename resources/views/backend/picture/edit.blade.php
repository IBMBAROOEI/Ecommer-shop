
@include('backend.sidebar')
@include('backend.resorce_css')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> جدول عکس</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Tables</li>
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
              <form  method="post" action="{{route('update_multi', $Picture->id)}}"  enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label">اپلود فایل </label>
                      <input type="file" name="image"  value="{{$Picture->image}}" class="form-control" >
                    </div>
                  </div>
                  @include('mesage.erorr')

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