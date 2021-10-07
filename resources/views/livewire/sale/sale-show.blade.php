<div>

    @can('carts.index')
        <x-button-create href="{{route('carts.index')}}"/>
    @endcan
    
 
    <div class="row mt-3 mb-3">
        <div class="col-3">
            <span class="text-bold">Filtros por estado /vendedor:</span>
        </div>
        <div class="col-lg-9">
            <select name="" id="" class="form-control" wire:model.debounce.300ms="status">
                <option selected value="ALL">TODOS</option>
                <option  value="PAID">PAGADO</option>
                <option  value="PENDING">PENDIENTE</option>
                <option  value="CANCELLED">CANCELADO</option>
                @foreach ($users as $user)
                     <option value="{{$user->id}}" >{{$user->name}}</option>
                @endforeach
               
            </select>
            
        </div>
    </div>


    <div class="mt-3">
        <a href="#Options" data-toggle="collapse">
            <button class="btn-small btn-primary mt-3 mb-2 offset-lg-10"><i class="fas fa-external-link-alt" title="Ver las opciones">
                </i>Opciones
            </button>
        </a>
    </div>
    
<div class="table-responsive">
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

                                @if ($sale->status=='CANCELLED')
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
                        @if ($sale->status!='CANCELLED')
                           <x-options-edit href="{{route('sales.edit',$sale->id)}}"/>   
                        @endif
                    @endif

                    @if ($sale->status!='CANCELLED')
                        <div>
                        <td class="collapse" id="Options" title="Cancelar Venta">
                            <form action="{{route('sales.cancel',$sale)}}" method="post">
                                @method('POST')
                                @csrf
                                <a href="">
                                <button class="btn btn-danger"><i class="far fa-window-close"></i></button>
                                </a>
                            </form>
                        </td>
                    </div>
                    
                    @endif
                   
                </tr>
                     
                    @empty
                        <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                @endforelse 
            </tbody>
          </table> 
</div>

<div class="container offset-lg-9">
    {{$sales->links()}}
</div>
   
    

</div>
