@if (isset($errors) && count($errors) > 0)

<div class="alert alert-dismissable alert-danger fade show">
    <button class="close" data-dismiss="alert" aria-label="close">
        <span area-hidden="true">&times;</span>
    </button>
    @foreach($errors->all() as $erros)
    <li><strong>{!! $error !!}</strong></li>
    @endforeach
</div>

@endif