@include('backend.sidebar')

@include('backend.resorce_css')
    <main class="app-content">
      <div class="app-title">
        <div>

          @include('mesage.susses')
          <h1><i class="fa fa-edit"></i>دسته بندی</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">دسته بندی</li>
          @include('mesage.erorr')
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">دسته بندی </h3>
            <div class="tile-body">
              <form name="form-1" method="post" action="{{route('categorie.store')}}">
                @csrf
                <div class="form-group">
                  <label class="control-label">نام</label>
                  <input class="form-control pe" name="name_categorie"   type="text" placeholder="دسته بندی">
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>ارسال</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" required="" name="name" placeholder="Enter full name">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Gender</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender">Male
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender">Female
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-3">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">I accept the terms and conditions
                      </label>
                    </div>
                  </div>
                </div>
                <div class="tile-footer">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                      <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>ارسال</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                  </div>
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