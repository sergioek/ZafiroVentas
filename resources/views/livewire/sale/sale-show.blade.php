<div>
    <x-button-create href="{{route('carts.index')}}"/>
    <x-search-component placeholder="{{$placeholder='Ingrese un texto para buscar una venta por fecha'}}"/>

    <div class="row mt-3 mb-3">
        <div class="col-1">
            <span class="text-bold">FILTRO:</span>
        </div>
        <div class="col-2">
            <input class="form-check-input" type="radio" wire:model="status" value="ALL" checked>
           <label class="form-check-label" for="inlineCheckbox1">TODO</label>
       </div>

        <div class="col-2">
             <input class="form-check-input" type="radio" wire:model="status" value="PAID">
            <label class="form-check-label" for="inlineCheckbox1">PAGADO</label>
        </div>

        <div class="col-2">
            <input class="form-check-input" type="radio" wire:model="status" value="PENDING">
           <label class="form-check-label" for="inlineCheckbox1">PENDIENTE</label>
       </div>

       <div class="col-2">
            <input class="form-check-input" type="radio" wire:model="status" value="CANCELLED">
            <label class="form-check-label" for="inlineCheckbox1">CANCELADO</label>
        </div>

    </div>
    

        <table class="table table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">Venta Nº</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cliente</th>
                <th scope="col">Estado</th>
                <th scope="col">Actualizado</th>
                <th scope="col">Pagado</th>
                <th scope="col">Adeuda</th>
                <th scope="col">Vendedor</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @forelse ($sales as $sale)            
               
                <tr>
                  
                            <td> 
                                <a href="{{route('detailsale.show',$sale->id)}}">
                                {{$sale->id}}
                                </a> 
                            </td>
                            <td>
                                {{$sale->date}}
                            </td> 
                            <td>
                                {{$sale->cuestomer->name . " ". $sale->cuestomer->lastname}}
                            </td> 
                            <td>
                                @if ($sale->status=='PAID')
                                    {{'PAGADO'}}
                                @endif

                                @if ($sale->status=='PENDING')
                                    {{'PENDIENTE'}}
                                @endif

                                @if ($sale->status=='CANCELED')
                                    {{'CANCELADO'}}
                                @endif
                                
                            </td> 
                            <td>
                                {{$sale->updated_at}}
                            </td> 

                            <td>
                                {{"$".$sale->cash}}
                            </td> 

                            <td>
                                {{"$".$sale->debt}}
                            </td> 

                            <td>
                                {{$sale->user->name}}
                            </td> 
                      
                    <td class="collapse" id="Options" title="Ver detalle">
                        <a href="{{route('detailsale.show',$sale->id)}}" ><button class="btn btn-success"><i class="far fa-file-alt"></i></button></a>
                    </td>
                    @if ($sale->debt>0)
                        <x-options-edit href="{{route('sales.edit',$sale->id)}}"/>
                    @endif
                   
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
