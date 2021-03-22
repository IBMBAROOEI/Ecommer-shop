
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
                        <th>نام</th>
                        <th> کد محصول</th>
                        <th>سایز</th>
                        <th>رنگ</th>
                        <th>قیمت</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$order->name_product }}</td>
                            <td>{{$order->code_product}}</td>
                            <td>{{$order->size }}</td>
                            <td>{{$order->color }}</td>
                            <td>{{$order->order_total }}</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div>
</div>
</main>

