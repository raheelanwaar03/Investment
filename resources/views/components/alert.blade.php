@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif


@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
