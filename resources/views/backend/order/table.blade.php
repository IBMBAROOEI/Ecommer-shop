
@include('backend.sidebar')
@include('backend.resorce_css')
<main class="app-content">

<div class="app-title">
    <div>
        <h1><i class="fa fa-th-list"></i> جدول سفارشات</h1>
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
                        <th>مقدار</th>
                        <th> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>وضعیت</th>
                        <th>مقدار</th>
                        <th>مقدار</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $o)
                        <tr>
                            <td>{{$o->order_total}}</td>
                            <td>{{$o->status}}</td>
                            <td><a class="btn btn-primary" href="{{route('checkoute_get')}}"  role="button">پرداخت ها</a></td>
                            <td><a class="btn btn-primary" href="{{route('show_order', $o->id)}}"  role="button">جزییات سفارش</a></td>
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

