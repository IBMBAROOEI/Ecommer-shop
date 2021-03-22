@include('backend.sidebar')

@include('backend.resorce_css')
    <main class="app-content">
      <div class="app-title">
        <div>

          @include('mesage.susses')
          <h1><i class="fa fa-edit"></i>برند</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">برند</li>
          @include('mesage.erorr')
        </ul>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title">برند</h3>
            <div class="tile-body">
              <form name="form-1" method="post" action="{{route('brand.store')}}">
                @csrf
                <div class="form-group">
                  <label class="control-label">نام</label>
                  <input class="form-control " name="brand_name"   type="text" placeholder="برند">
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>ارسال</button>&nbsp;&nbsp;
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

<script src="{{ asset('backend/chart.js') }}" ></script>
  </body>
</html>