@section('content_body')
<div class="card">
    <div class="card-header">Periksa</div>
         <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
              @endif
              {{ __('You are logged in!') }}
	    </div>
    </div>
</div>

@endsection

