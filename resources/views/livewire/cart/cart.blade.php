<div>
<x-alerts/>
<x-button-create href="{{route('products.index')}}"/>
<br>
<div class="table table-hover table-responsive">
    <table class="col-lg-12">
        <thead class="table-dark">
            
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Codigo</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
              <th scope="col">Subtotal</th>
              <th scope="col">Agregar</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>

          <tbody>
              @forelse ($carts as $cart)
              <tr>
                    <td>
                        {{$cart->product->name}}
                    </td>

                    <td class="text-center">
                        {{$cart->product->brcode}}
                    </td>

                    <td class="text-center">
                        {{$cart->amount}}
                    </td>

                    <td class="text-center">
                        {{"$".number_format($cart->product->price,2)}}
                    </td>

                    <td class="text-center">
                        
                        {{"$".number_format($cart->product->price*$cart->amount,2)}}
                    </td>

                    <td>
                        <input type="number" name="" id="" class="form-control" placeholder="Cantidad" min="1" max="{{$cart->product->stock-$cart->amount}}" wire:model="amount">
                    </td>

                    <td>
                        <button class="btn btn-success" wire:click="UpdateAmount({{$cart}})"><i class="fas fa-check-circle"></i></button>
                    </td>
                   
                    <td>
                            <button class="btn btn-danger" wire:click="DeleteAmount({{$cart}})"><i class="far fa-trash-alt"></i></button>
                    </td>
              </tr>

        
              @empty
                <a href="{{route('products.index')}}">
                
                    <div class="card bg-info">
                        <h5 class="card-header text-light">Carrito de compras</h5>
                        <div class="card-body">
                          <h5 class="card-title text-light">Carrito Vacio!</h5>
                          <p class="card-text text-light">Por favor agregre un producto.</p>
                          <br>
                          <a href="{{route('products.index')}}" class="btn btn-warning">Agregar productos</a>
                        </div>
                      </div>
                </a>
                  
              @endforelse
          </tbody>
    </table>
</div>

<div class="container">
    <div class="row align-items-start">

    <div class="col"><strong>Interes %</strong><input type="number" name="" id="" class="form-control" placeholder="Aplique un porcentaje" min="0" value="0" wire:model="interest"></div>
    <div class="col"><strong>Descuento %</strong><input type="number" name="" id="" class="form-control" placeholder="Aplique un porcentaje" min="0" value="0" wire:model="discount"></div>
    </div>
</div>

<div class="text-right">
    <button class="btn btn-outline-success col-lg-2 mt-3" wire:click="Percentage({{$cart}})">Aplicar porcentajes</button>
</div>


<div class="card text-white bg-light mb-3 mt-4 text-center" style="max-width:100%;">
    <div class="card-header text-center">Detalles de la compra</div>
    <div class="card-body">
      <h1 class="fs-1 text-center">$0,00</h1>

      <button class="btn btn-outline-danger col-lg-4 mt-3">Cancelar</button>
      <br>
      <button class="btn btn-primary col-lg-4 mt-3">Comprar</button>
    </div>
</div>



</div>
