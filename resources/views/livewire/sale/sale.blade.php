<div>
    <a href="{{route('carts.index')}}">
      <button class="btn btn-info offset-lg-10 mb-3">Volver atras</button>
    </a>
    <div class="card">
      <form action="{{route('sales.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="card">
                <div class="card-header text-center">
                 
                  Detalles de la compra
                </div>
                <div class="card-body">
                    <h1 class="fs-1 text-primary text-center">TOTAL A PAGAR</h1>
                    <h2 class="fs-2 text-center">{{"$".number_format($total,2)}}</h2>
                    <input type="hidden" name="items" value="{{$items}}">
                </div>
              
    </div>

  <div class="bg-light">
          <h4 class="fs-4 text-center text-bold fst-italic text-success mt-3">SELECCIONE CLIENTE </h4>

          <div class="mb-3 row">
            <label for="staticEmail" class="col-2 col-form-label ml-3">DNI del cliente:</label>
            <div class="col-7">
              <input type="text" class="form-control" id="" placeholder="Ingrese el DNI del Cliente" wire:model="search">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="staticEmail" class="col-2 col-form-label ml-3">Cliente:</label>
            <div class="col-7 input-group">
                <select class="form-select form-control" aria-label="Default select example">
                  @forelse ($cuestomers as $cuestomer)
                      <option selected>{{$cuestomer->name." ".$cuestomer->lastname}}</option>
                      <input type="hidden" name="cuestomer_id" value="{{$cuestomer->id}}">
                  @empty
                  <option value="" class="text-danger">NO SE ENCONTRO UN CLIENTE</option>
                  @endforelse
                </select>
              
                <a href="{{route('cuestomers.create')}}" target="blank">
                  <button class="btn btn-primary ml-2">Agregar nuevo</button>
                </a>
            </div>
            @error('cuestomer_id')
            <br>
              <small class="text-danger">*{{'El campo cliente es obligatorio'}}</small>
            <br>
           @enderror
          </div>
  </div>

<div class="bg-light mt-5">
    <h4 class="fs-4 text-center text-bold fst-italic text-danger mt-3 ">METODO DE PAGO </h4>
   <div class="form-group text-center mt-4">
    @if ($paid>=$total)
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="PAID" checked>
        <label class="form-check-label mr-2" for="inlineRadio1">Contado Efectivo</label>
        <i class="fas fa-money-check-alt"></i>
        </div> 
    @endif
  
    @if ($total>$paid)
        <div class="form-check form-check-inline ml-4">
        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="PENDING" checked>
        <label class="form-check-label" for="inlineRadio2">A credito</label>
        <i class="fas fa-hand-holding-usd"></i>
        </div> 
    @endif
   
    
    <div class="form-check form-check-inline ml-4">
        <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="PAID" >
        <label class="form-check-label mr-2" for="inlineRadio3">MercadoPago</label>
        <img src="https://img.icons8.com/color/20/000000/mercado-pago.png"/>
    </div>


   </div>

</div>

<div class="container mt-3">
 
<div class="input-group mb-3 col-lg-9">
  <span class="input-group-text text-bold bg-success">PAGADO $:</span>
  <input type="number" class="form-control" min="0" step="0.1" wire:model="paid" name="cash">
  @error('cash')
  <br>
    <small class="text-danger">*{{'El campo pagado es obligatorio'}}</small>
  <br>
 @enderror
</div>

@if ($paid>=$total)
 <div class="input-group mb-3 col-lg-9">
  <span class="input-group-text text-bold bg-danger">CAMBIO $:</span>
  <input type="number" class="form-control" step="0.1"  value="{{floatval($paid)-$total}}" disabled >
</div>   
@endif
<input type="hidden" name="debt" value="{{$total-floatval($paid)}}">

@if ($paid<$total)
<div class="input-group mb-3 col-lg-9">
  <span class="input-group-text text-bold bg-info">ADEUDA $:</span>
  <input type="text" class="form-control" step="0.1" value="{{$total-floatval($paid)}}" disabled name="debt">
</div>    
@endif


<div class="input-group mb-3 col-lg-9">
  <span class="input-group-text text-bold bg-secondary">NOTAS</span>
  <textarea name="notes" id="" cols="96" rows="5"></textarea>
</div>

<div class="input-group mb-3 col-lg-9">
  <button class="btn btn-primary offset-lg-9"><i class="fas fa-dollar-sign"> Finalizar Compra</i></button>
</div>

  </form>
</div>
</div>