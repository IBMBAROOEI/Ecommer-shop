
@include('backend.sidebar')
@include('backend.resorce_css')
<main class="app-content">

<div class="app-title">
    <div>
        <h1><i class="fa fa-th-list"></i>محبوب ترین ها</h1>
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
                        <th>نام محصول</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $pro as $f)
                        <tr>
                            <td>{{$f->id }}</td>
                            <td><a class="btn btn-primary" href="{{url('del/wishlist', $f->id)}}"  role="button">پاک کردن از لیست علاقمندی ها</a></td>
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

