<div>
    <x-button-create href="{{route('carts.index')}}"/>
    <x-search-component/>  

        <table class="table table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">Venta Nº</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cliente</th>
                <th scope="col">Estado</th>
                <th scope="col">Productos</th>
                <th scope="col">Pagado</th>
                <th scope="col">Adeuda</th>
                <th scope="col">Vendedor</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($sales as $sale)            
                <tr>
                  
                            <td>
                                {{$sale->id}}
                            </td>
                            <td>
                                {{$sale->updated_at}}
                            </td> 
                            <td>
                                {{$sale->cuestomer->name . " ". $sale->cuestomer->lastname}}
                            </td> 
                            <td>
                                {{$sale->status}}
                            </td> 
                            <td>
                                {{$sale->items}}
                            </td> 

                            <td>
                                {{$sale->cash}}
                            </td> 

                            <td>
                                {{$sale->debt}}
                            </td> 

                            <td>
                                {{$sale->user->name}}
                            </td> 
                
                    <x-options-edit href="{{route('sales.edit',$sale)}}"/>
                   
                </tr>
                    
                    @empty
                        <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                @endforelse 
            </tbody>
          </table> 
       

<div class="container offset-lg-9">
    {{$sales->links()}}
</div>
   
    

</div>
