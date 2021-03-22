
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
                    @include('mesage.erorr')
                    <tbody>

                    <form  method="post" action="{{route('store_slider')}}"enctype="multipart/form-data">
                        @csrf
                        <div class="row m-5">
                            <div class="input-group control-group" >
                                <label class="control-label">اپلود فایل</label>

                                <input type="file" name="image[]" required="" multiple  class="form-control">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit"  class="btn btn-outline-success">اپلود فایل</button>
                        </div>
                    </form>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>

</main>

