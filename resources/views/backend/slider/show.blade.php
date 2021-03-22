
@include('backend.sidebar')
@include('backend.resorce_css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<main class="ajax">
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> جدول برند</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">برند</li>
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
              <th>عکس</th>
              <th>تاریخ ایجاد</th>
              <th>تاریخ بروز رسانی</th>
              <th> <i class="fa fa-trash" aria-hidden="true"></i>حذف</th>
              <th> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            @foreach($slider as $sli)
            <tr>

              <td>  <td><img width="50px" src="{{ asset('uploads/'.$sli->image) }}"></td></td>
              <td>{{$sli->updated_at}}</td>
              <td>{{$sli->created_at}}</td>
              <td><form action="{{ route('delete_slider', $sli->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i>حذف</button>
                </form></td>
              <td><a class="btn btn-primary" href="{{route('edit_slider',$sli->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</a></td>
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

  </main>
</main>