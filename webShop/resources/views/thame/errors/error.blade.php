@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert-danger" role="alert">
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
@endif


@if (Session('alert_error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{Session('alert_error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (Session('alert_success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{Session('alert_success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif