<div>
    <x-alerts/>

    @can('products.create')
        <x-button-create href="{{route('products.create')}}"/> 
    @endcan
   
    <x-search-component placeholder="{{$placeholder='Ingrese el nombre del producto o su codigo'}}"/>  

    <div class="container-row">
        <strong>Filtro de productos:</strong>
        <div class="form-check form-check-inline">
           

            <input class="form-check-input" type="radio" wire:model.debounce.1000ms="filter" value="all" checked>
            <label class="form-check-label" for="inlineCheckbox1">TODOS</label>
            
        </div>
            @forelse ($category as $category)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" wire:model.debounce.1000ms="filter" value="{{$category->id}}">
                    <label class="form-check-label" for="inlineCheckbox1">{{$category->name}}</label>
                 </div>
            @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse
    </div>

<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Imagen</th>
            <th scope="col">Código</th>
            <th scope="col">Talle</th>
            <th scope="col">Color</th>
            <th scope="col">Costo</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)            
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->mark->name}}</td>
                <td><img src="{{$product->image}}" alt="70" width="70"></td>
                <td>{{$product->brcode}}</td>
                <td>{{$product->waist->waist}}</td>
                <td><input type="color" value="{{$product->color}}" name="" id="" disabled></td>
                <td>{{"$".number_format($product->cost,2)}}</td>
                <td>{{"$".number_format($product->price,2)}}</td>
                <td>
                    @if ($product->stock==0)
                    <input type="number" class="form-control" name="" id="" max="{{$product->stock}}" min="0" value="0" disabled> 
                    <td>
                        <button class="btn btn-danger" disabled>
                            <i class="fas fa-cart-arrow-down"></i>Sin Stock
                        </button>
                    </td>
                    @else
                       <input type="number" class="form-control" name="amount" id="" max="{{$product->stock}}" min="1" value="1" wire:model.debounce.1000ms="amount">
                       <td>
                            <button class="btn btn-success" wire:click="addCart({{$product->id}},{{$product->price}})">
                            <i class="fas fa-cart-arrow-down"></i>Agregar
                            </button>
                    </td> 
                    @endif
                </td>

                @can('products.edit')
                       <x-options-edit href="{{route('products.edit',$product)}}"/>
                @endcan
                
                @can('products.destroy')
                    <x-options-destoy action="{{route('products.destroy',$product)}}"/>
                @endcan
                
                 
            </tr>
                
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
  
            @endforelse 
        </tbody>
        
      </table>
</div>
      <div class="container offset-lg-9">            
          {{$products->links()}}

       </div>
     
</div>

