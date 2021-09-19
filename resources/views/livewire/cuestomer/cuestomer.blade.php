<div>   
    <x-button-create href="{{route('cuestomers.create')}}"/>
    <x-search-component/> 
   
        <table class="table table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">DNI</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($cuestomers as $cuestomer)            
                <tr>
                  
                            <td>
                                {{$cuestomer->name}}
                            </td>
                            <td>
                                {{$cuestomer->lastname}}
                            </td> 
                            <td>
                                {{$cuestomer->dni}}
                            </td> 
                            <td>
                                {{$cuestomer->telephone}}
                            </td> 
                            <td>
                                {{$cuestomer->email}}
                            </td> 
                
    
                    <x-options-edit href="{{route('cuestomers.edit',$cuestomer)}}"/>
                    <x-options-destoy action="{{route('cuestomers.destroy',$cuestomer)}}"/>
                </tr>
                    
                    @empty
                        <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                @endforelse 
            </tbody>
          </table> 
       

<div class="container offset-lg-9">
        {{$cuestomers->links()}}
</div>
   
    

</div>
