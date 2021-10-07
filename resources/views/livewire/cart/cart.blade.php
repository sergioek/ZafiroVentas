<div>
<x-alerts/>

@can('products.index')
  <x-button-create href="{{route('products.index')}}"/>

@endcan
<br>  

<div class="table-responsive">
    <table class="table table-hover col-lg-12">
        <thead class="table-dark">
            
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Marca</th>
              <th scope="col">Codigo</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
              <th scope="col">Interes</th>
              <th scope="col">Descuento</th>
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

                    <td>
                        {{$cart->product->mark->name}}
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
                        {{number_format($cart->intereset,2)}}
                    </td>

                    <td class="text-center">
                        {{number_format($cart->discount,2)}}
                    </td>

                    <td>
                        <input type="number" name="" id="" class="form-control" placeholder="Cantidad" min="1" max="{{$cart->product->stock}}" wire:model.debounce.300ms="amount">
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

<x-porcentage/>  

<x-sail-details total={{$total}}/>


</div>
