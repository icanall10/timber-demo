@if(session('success'))
    <div class="alert alert-success" data-alert>
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-error" data-alert>
        {{ session('error') }}
    </div>
@endif