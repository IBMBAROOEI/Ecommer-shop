
    @if (session('success'))
    <div class="bs-component">
        <div class="alert alert-dismissible alert-success">
            <button class="close" type="button" data-dismiss="alert">×</button><strong></strong>  <a class="alert-link" href="#">{{ session('success') }}</a>.
        </div>
    </div>
    @endif
</div>
