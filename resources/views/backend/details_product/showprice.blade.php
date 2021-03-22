

@include('backend.sidebar')
<style>
  .tokenizationSelect2{
    width: 300px;
  }
</style>
<main class="app-content">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="{{ asset('backend/tagsinput.js') }}" ></script>
  <link href="{{ asset('backend/tagsinput.css') }}" rel="stylesheet">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i>محصول جدید</h1>
    </div>


    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">فرم محصولات</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      {{--@include('mesage.erorr')--}}
      <div>
        {{--@include('mesage.susses')--}}
        <div class="tile-body">
          <form  method="post" action="{{route('storeprice')}}">
            @csrf
            <input type="hidden"  name="attr__sizes_id" value="{{  $sizes->id}}">
            <div class="row">
              <div class="form-group col-lg-6">
                سایز  <select name="price[]"   class="tokenizationSelect2" multiple="true">
                  <option value="Lamborghini">Lamborghini</option>
                  <option value="Bugatti">Bugatti</option>
                  <option value="Ferrari">Ferrari</option>
                  <option value="BMW">BMW</option>
                  <option value="Mercedes-Benz">Mercedes-Benz</option>
                </select>
              </div>
            </div>
            {{--<div class="row">--}}
            {{--<div class="form-group col-lg-6">--}}
            {{--رنگ <select name="color[]"  class="tokenizationSelect2" multiple="true">--}}
            {{--<option value="Lamborghini">Lamborghini</option>--}}
            {{--<option value="Bugatti">Bugatti</option>--}}
            {{--<option value="Ferrari">Ferrari</option>--}}
            {{--<option value="BMW">BMW</option>--}}
            {{--<option value="Mercedes-Benz">Mercedes-Benz</option>--}}
            {{--</select>--}}
            {{--</div>--}}

            <div class="col-lg-6">
              <button type="submit"  class="btn btn-outline-success">ثبت محصول</button>
            </div>
            {{--</div>--}}


          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            {{--@include('mesage.erorr')--}}
            <div>
              {{--@include('mesage.susses')--}}
              <div class="tile-body">
                <form  method="post" action="{{route('stock')}}">
                  @csrf
                  <input type="hidden"  name="attr__sizes_id" value="{{  $sizes->id}}">
                  <div class="row">
                    <div class="form-group col-lg-6">
                      سایز  <select name="stock[]"   class="tokenizationSelect2" multiple="true">
                        <option value="Lamborghini">Lamborghini</option>
                        <option value="Bugatti">Bugatti</option>
                        <option value="Ferrari">Ferrari</option>
                        <option value="BMW">BMW</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                      </select>
                    </div>
                  </div>
                  {{--<div class="row">--}}
                  {{--<div class="form-group col-lg-6">--}}
                  {{--رنگ <select name="color[]"  class="tokenizationSelect2" multiple="true">--}}
                  {{--<option value="Lamborghini">Lamborghini</option>--}}
                  {{--<option value="Bugatti">Bugatti</option>--}}
                  {{--<option value="Ferrari">Ferrari</option>--}}
                  {{--<option value="BMW">BMW</option>--}}
                  {{--<option value="Mercedes-Benz">Mercedes-Benz</option>--}}
                  {{--</select>--}}
                  {{--</div>--}}

                  <div class="col-lg-6">
                    <button type="submit"  class="btn btn-outline-success">ثبت محصول</button>
                  </div>
                  {{--</div>--}}


                </form>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
  $(document).ready(function(){
    $(".tokenizationSelect2").select2({
      placeholder: "Your favourite car", //placeholder
      tags: true,
      tokenSeparators: ['/',',',';'," "]
    });
  })
</script>
