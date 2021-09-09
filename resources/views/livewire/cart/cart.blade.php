<div>
<x-alerts/>
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
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="fas fa-shopping-cart"><strong>  Carrito Vacio!</strong></i> Agregue productos al carrito
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </a>
              @endforelse
          </tbody>
    </table>
</div>

</div>
