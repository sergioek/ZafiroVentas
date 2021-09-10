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
                        <input type="number" name="" id="" class="form-control" placeholder="Cantidad" min="1" max="{{$cart->product->stock}}">
                    </td>
                   
                    <td>
                            <button class="btn btn-danger"><i class="far fa-trash-alt" wire:click="DeleteAmount({{$cart}})"></i></button>
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

    <div class="col"><strong>Interes %</strong><input type="number" name="" id="" class="form-control" placeholder="Aplique un porcentaje" min="0"></div>
    <div class="col"><strong>Descuento %</strong><input type="number" name="" id="" class="form-control" placeholder="Aplique un porcentaje" min="0"></div>
    </div>
</div>

</div>
