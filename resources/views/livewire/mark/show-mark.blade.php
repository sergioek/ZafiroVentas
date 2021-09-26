<div>
    <x-button-create href="{{route('marks.create')}}"/>
    <x-search-component placeholder="{{$placeholder='Ingrese un texto para buscar una marca'}}"/>  

<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-dark">
            
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Teléfono</th>
            <th scope="col"></th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
            @forelse ($marks as $mark)            
            <tr>
                
                <div >
                        <td>{{$mark->name}}</td>
                        <td>{{$mark->provider}}</td>
                        <td>{{$mark->telephone}}</td>  
                </div>

                <x-options-edit href="{{route('marks.edit',$mark)}}"/>
                <x-options-destoy action="{{route('marks.destroy',$mark)}}"/>
            </tr>
                
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
      </table>
  </div>
        <div class="container offset-lg-9">
            {{$marks->links()}}
        </div>
</div>
