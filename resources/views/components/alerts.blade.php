<div>
    @if (session('alert'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Alerta!</strong>{{session('alert')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('success'))
    
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Exito!</strong>{{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>


@endif
</div>