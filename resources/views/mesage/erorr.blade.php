
<div class="col-lg-4 text-center">
    @if ($errors->any())
    <div class="bs-component">
        @foreach ($errors->all() as $error)
        <div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">×</button><strong>{!! $error !!}</strong><a class="alert-link" href="#"></a>
        </div>
        @endforeach
    </div>
    @endif
</div>