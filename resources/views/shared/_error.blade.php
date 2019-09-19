@if (count($errors) > 0)
<div class="alert alert-danger">
    <div class="mt-2"><b>有错误发生：</b></div>
    <ul class="mt-2 mb-2">
        @foreach ($errors->all() as $error)
        <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif




@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if (session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach