@include('backend.sidebar')
@include('backend.resorce_css')
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}

    <main class="app-content">

        <div class="app-title"></div>
            <div>
                <h1><i class="fa fa-th-list"></i> جدول دسته بندی</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">جدول</li>
            </ul>

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
                                <th>تاریخ ایجاد</th>
                                <th>تاریخ بروز رسانی</th>
                                <th> <i class="fa fa-trash" aria-hidden="true"></i>حذف</th>
                                <th> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categores  as $cat =>$cate)
                                <tr>
                                    <th> {{ $categores->firstItem() + $cat}}</th>
                                    <td>{{$cate->name_categorie}}</td>
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

        {{$categores->links()}}
    <script type="text/javascript">

        $(function() {
            $('body').on('click', '.pagination a', function(e) {
                e.preventDefault();

                var url = $(this).attr('href');
                getArticles(url);
                window.history.pushState("", "", url);
            });

            function getArticles(url) {
                $.ajax({
                    url : url
                }).done(function (data) {
                    $('.app-content').html(data);
                }).fail(function () {
                    alert('Articles could not be loaded.');
                });
            }
        });

    </script>
    </main>