@if (session()->has('success'))

<div class="alert alert-dismissable alert-success fade show">
    <button class="close" data-dismiss="alert" aria-label="close">
        <span area-hidden="true">&times;</span>
    </button>
    <strong>{!! session()->get('success') !!}</strong>
</div>

@endif