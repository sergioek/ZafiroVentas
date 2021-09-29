<div class="card text-white bg-light mb-3 mt-4 text-center" style="max-width:100%;">
    <div class="card-header text-center">Apertura, extracciones o cierre de caja.</div>
    <div class="card-body">

        <h1 class="fs-1 text-primary">ESTADO DE CAJA</h1>
        @if ($state=='CLOSE')
            <h2 class="fs-2 text-center text-danger">CERRADO</h2>  
        @else
             <h2 class="fs-2 text-center text-success">ABIERTO</h2> 
        @endif
        
        <h4 class="fs-2 text-center text-secondary">Disponible $:{{number_format($total,2)}}</h4>
        
        <div class="container mt-3">
        <form action="{{route('boxes.store')}}" method="POST">
            @method('POST')
            @csrf
            <div class="input-group mb-3 col-lg-9">
                <span class="input-group-text text-bold bg-primary">OPERACION:</span>
                <select name="status" id="" class="form-control">
                    @if ($state=='CLOSE')
                        <option value="OPEN">ABRIR CAJA</option>
                    @else
                        <option value="EXTRACT">EXTRAER EFECTIVO</option>
                        <option value="CLOSE">CERRAR CAJA</option>
                    @endif
                </select>
            </div>

            <div class="input-group mb-3 col-lg-9">
                <span class="input-group-text text-bold bg-warning">MONTO$:</span>
                <input type="number" class="form-control" name="amount" step="0.1" placeholder="Indique el monto. Si elije cerrar caja debe coincidir con el disponible.">
                @error('amount')
                    <br>
                        <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div class="input-group mb-3 col-lg-9">
                <span class="input-group-text text-bold bg-secondary">NOTAS</span>
                <textarea name="notes" id="" cols="96" rows="5" class="form-control" placeholder="Notas para explicar algo en particular de la operacíon realizada."></textarea>
              </div>


              <div class="input-group mb-3 col-lg-12">
                <button class="btn btn-primary offset-lg-8">Ejecutar</i></button>
              </div>
     
        </div>
      
        </form>
    
    </div>
</div>

