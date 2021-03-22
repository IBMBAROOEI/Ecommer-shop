<!DOCTYPE html>
<html lang="en">
@include('front.resorce')
<body>
@include('front.navbar')

<section id="cart_items">
	<div class="container">
		@include('mesage.erorr')
			<form action="{{route('address_store')}}"  method="post">
				@csrf
				<div class="row">
					<div class="col-md-12">
						<div>
							<div class="tile-body">
									<div class="row">
										<div class="form-group col-lg-3">
											<label class="control-label">نام محصول</label>
											<input type="text"   name="address1" placeholder="پلاک "  class="form-control">
										</div>
										<div class="form-group col-lg-3">
											<label class="control-label">سریال محصول /کد</label>
											<input type="text"   name="address2" placeholder="ادرس کامل"  class="form-control">
										</div>
										<div class="form-group col-lg-3">
											<label class="control-label">شماره موبایل </label>
											<input type="text"   name="phone" placeholder="شماره موبایل "  class="form-control">
										</div>
										<div class="form-group col-lg-1">
											<label class="control-label">شهر</label>
											<select name="cities_id"> انتخاب شهر
												<option> انتخاب کنید</option>
												@foreach($city as  $cit)
													<option value="{{ $cit->id}}">{{$cit->name}}</option>
												@endforeach
											</select>
										</div>

										<div class="form-group col-lg-1">
											<label class="control-label">شهرستان</label>
											<select name="province_id"> انتخاب شهرستان
												<option> انتخاب کنید</option>
												@foreach($pri as  $cit)
													<option value="{{ $cit->id}}">{{$cit->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-2">
											<button type="submit"  class="btn btn-outline-success">ذخیر ه ادرس
											</button>
										</div>
									</div>

							</div>
						</div>
					</div>
				</div>
			</form>
	</div>
</section> <!--/#cart_items-->

<table class="table table-hover table-bordered dataTable" id="sampleTable">

	<thead >
	<tr class="p-5">
		<th>ادرس</th>
		<th> <i class="fa fa-trash" aria-hidden="true"></i>حذف</th>
		<th> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</th>
	</tr>
	</thead>
	<tbody>
	@foreach($add as$ad)
		<tr>
			<td>{{$ad->address1 }}</td>
			<td><form action="{{ route('address_delete', $ad->id)}}" method="post">
					@csrf
					@method('DELETE')
					<button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i>حذف</button>
				</form></td>
			<td><a class="btn btn-primary" href="{{route('edit_add', $ad->id)}}"  role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ویرایش</a></td>
		</tr>
	@endforeach
	</tbody>
</table>
<div style="margin-left: 20px;"><a class="btn btn-default check_out" href="{{route('checkoute_get')}}">ادامه و ثبت سفارش</a></div>
@include('front.footer')
</body>
</html>