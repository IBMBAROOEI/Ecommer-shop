
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
              <th>نام دسته بندی</th>
              <th>وضعیت</th>
              <th>تاریخ ایجاد</th>
              <th>تاریخ بروز رسانی</th>
              <th> <i class="fa fa-trash" aria-hidden="true"></i>حذف</th>
              <th> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categores  as $cat =>$cate)
              @switch($cate->status)
                @case(1)
                @php
                  $url=route('status_categore',$cate->id);
                  $status ='<a href="'.$url.'"class="badge badge-success">فعال</a>'
                @endphp
                @break
                @case(0)
                @php
                  $url=route('status_categore',$cate->id);
                  $status='<a href="'.$url.'"class="badge badge-warning">غیر فعال</a>'
                @endphp
                @break
                @default
              @endswitch
            <tr>
              <th> {{ $categores->firstItem() + $cat}}</th>
              <td>{{$cate->name_categorie}}</td>
              <td>{!!  $status!!}</td>
              <td>{{$cate->updated_at}}</td>
              <td>{{$cate->created_at}}</td>
              <td><form action="{{ route('categorie.destroy', $cate->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i>حذف</button>
                </form></td>
              <td><a class="btn btn-primary" href="{{route('categorie.edit', $cate->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</a></td>
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

  {{--{{$categores->links()}}--}}

  {!! $categores->appends(Request::all())->links() !!}
</main>

