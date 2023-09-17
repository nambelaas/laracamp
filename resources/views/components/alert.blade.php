@if ($message = Session::get('error'))
    <div class="d-flex justify-content-between alert alert-danger alert-dismissable fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="d-flex justify-content-between alert alert-success alert-dismissable fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif