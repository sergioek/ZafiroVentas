<div>
    
    <x-button-create href="{{route('products.create')}}"/>
    <x-search-component/>  

    <div class="container-row">
        <strong>Filtro de productos:</strong>
        <div class="form-check form-check-inline">
           

            <input class="form-check-input" type="radio" wire:model="filter" value="all" checked>
            <label class="form-check-label" for="inlineCheckbox1">TODOS</label>
            
        </div>
            @forelse ($category as $category)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" wire:model="filter" value="{{$category->id}}">
                    <label class="form-check-label" for="inlineCheckbox1">{{$category->name}}</label>
            </div>
            @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse
    </div>

<div class="table table-hover table-responsive">
    <table >
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Código</th>
            <th scope="col">Talle</th>
            <th scope="col">Color</th>
            <th scope="col">Costo</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>

          </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)            
            <tr>
                <td>{{$product->name}}</td>
                <td><img src="{{$product->image}}" alt="70" width="70"></td>
                <td>{{$product->brcode}}</td>
                <td>{{$product->waist->waist}}</td>
                <td><input type="color" value="{{$product->color}}" name="" id="" disabled></td>
                <td>{{"$".$product->cost}}</td>
                <td>{{"$".$product->price}}</td>
                <td>
                    @if ($product->stock==0)
                    <input type="number" class="form-control" name="" id="" max="{{$product->stock}}" min="0" value="0" disabled> 
                    <td>
                        <button class="btn btn-danger" disabled>
                            <i class="fas fa-cart-arrow-down"></i>Sin Stock
                        </button>
                    </td>
                    @else
                       <input type="number" class="form-control" name="" id="" max="{{$product->stock}}" min="1" value="1">
                       <td>
                            <button class="btn btn-success">
                            <i class="fas fa-cart-arrow-down"></i>Agregar
                            </button>
                    </td> 
                    @endif
                </td>

                <x-options-edit href="{{route('products.edit',$product)}}"/>
                <x-options-destoy action="{{route('products.destroy',$product)}}"/>
                 
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

