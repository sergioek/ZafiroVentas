<div>
    
    <x-button-create href="{{route('boxes.create')}}"/>
    <x-search-component placeholder="{{$placeholder='Ingrese un texto para buscar un movimiento por su fecha.'}}"/>  
 
<div class="table-responsive ">
    <table class="table  table-hover">
        <thead class="table-dark ">
            
          <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Fecha</th>
            <th scope="col">Operacion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Notas</th>
            <th scope="col"></th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
            @forelse ($boxes as $box)            
            <tr>
                    <td class="text-bold text-dark">{{$box->user->name}}</td>
                    <td class="text-bold text-danger">{{$box->date}}</td>
                    <td class="text-primary text-bold">
                        @if ($box->status=='OPEN')
                                 {{'ABIERTA'}} 
                        @endif
                        @if ($box->status=='EXTRACT')
                                {{'RETIRO'}} 
                        @endif
                        @if ($box->status=='CLOSE')
                                 {{'CERRADO'}} 
                        @endif
                      
                    </td>
                    <td class="text-bold text-dark">{{'$'.number_format($box->amount,2)}}</td>
                    <td>{{$box->notes}}</td>
                    <td></td>
                    <td></td>
            </tr>
                
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
      </table>
</div>
        <div class="container offset-lg-9">
            {{$boxes->links()}}
        </div>


</div>
