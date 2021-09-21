<div>
    <div class="card text-white bg-light mb-3 mt-4 text-center" style="max-width:100%;">
        <div class="card-header text-center">Detalles de la compra</div>
        <div class="card-body">
          <h1 class="fs-1 text-primary">TOTAL A PAGAR</h1>
          <h2 class="fs-2 text-center">{{"$".number_format($total,2)}}</h2>
          <button class="btn btn-outline-danger col-lg-4 mt-3" wire:click="Cancel()">Cancelar</button>
          <br>
          <a href="{{route('sales.cart')}}">
            <button class="btn btn-primary col-lg-4 mt-3">Comprar Carrito</button>
          </a>
        </div>
    </div>
    
    

</div>