<div>
    <div class="offset-lg-10">
        <a href="{{route('products.create')}}">
            <button class="btn-sm btn-secondary">Nuevo producto</button>
        </a>
    </div>

    <div class="mt-3">
        <input type="text" name="" id="" wire:model="search" class="form-control" placeholder="Ingrese un texto para buscar un producto">
    </div>

    <div class="container-row mt-3">
        <strong>Filtro de productos:</strong>
    <div class="form-check form-check-inline">
           
           <input class="form-check-input" type="radio" checked wire:model="filter" value="exhausted">
            <label class="form-check-label" for="inlineCheckbox1">SIN STOCK</label>
            
            <input class="form-check-input ml-2" type="radio" wire:model="filter" value="for-exhausted">
            <label class="form-check-label" for="inlineCheckbox1">POR AGOTARSE:</label>
            <input type="number" class="form-control ml-2 col-2"  min="1" max="10000" value="1" wire:model="alert">
    </div>
</div>          
            
      

    <a href="#Options" data-toggle="collapse">
        <button class="btn-small btn-primary mt-3 mb-2 offset-lg-10"><i class="fas fa-external-link-alt">
            </i>Opciones
        </button>
    </a>

 

<div class="table table-hover table-responsive">
    <table >
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Categoría</th>
            <th scope="col">Código</th>
            <th scope="col">Talle</th>
            <th scope="col">Color</th>
            <th scope="col">Costo</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>

          </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)            
            <tr>
                <td>{{$product->name}}</td>
                <td><img src="{{$product->image}}" alt="70" width="70"></td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->brcode}}</td>
                <td>{{$product->waist->waist}}</td>
                <td><input type="color" name="" id="" value="{{$product->color}}" disabled></td>
                <td>{{"$".$product->cost}}</td>
                <td>{{"$".$product->price}}</td>
                <td>{{$product->stock}}<td>
            <form action="">
                @csrf
                <td>
                 
                    <input type="number" class="form-control" name="" id="" min="1" value="1" wire:model="amount" placeholder="N°">
                </td>
                <td>
                    <button class="btn btn-warning" wire:click="update({{$product->id}})">
                        <i class="fas fa-shopping-basket"></i> Reponer
                    </button>
                </td>
            </form>



            <div >
                <td id="Options" class="collapse">
                    <a href="{{route('products.edit',$product)}}"><button class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                </td>
            </div>

            <div>
                <td id="Options" class="collapse">
                    <form action="{{route('products.destroy',$product)}}" method="post">
                        @method('delete')
                        @csrf
                        <a href="">
                        <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </a>
                    </form>
                </td>

               
            </div>
                
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

