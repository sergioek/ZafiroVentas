<div>
  

<x-search-component placeholder="{{$placeholder='Ingrese un texto para buscar el nombre de un usuario'}}"/> 

   <table class="table table-hover">
       <thead class="table-dark">
         <tr>
           <th scope="col">Nombres</th>
           <th scope="col">Telefono</th>
           <th scope="col">Email</th>
           <th scope="col">Estado</th>
           <th scope="col"></th>
           <th scope="col"></th>
         </tr>
       </thead>
       <tbody>
           @forelse ($users as $user)            
           <tr>
             
                       <td>
                           {{$user->name}}
                       </td>
                       <td>
                           {{$user->phone}}
                       </td> 
                       <td>
                           {{$user->email}}
                       </td> 

                       <td>
                            {{$user->status}}
                        </td> 

           
               @can('users.edit')
                   <x-options-edit href="{{route('users.edit',$user)}}"/>
               @endcan
         
               @can('users.destroy')
                    <x-options-destoy action="{{route('users.destroy',$user)}}"/>
               @endcan

              

           </tr>
               
               @empty
                   <p class=" text-danger">No se encontraron resultados en su busqueda</p>
           @endforelse 
       </tbody>
     </table> 
  

<div class="container offset-lg-9">
   {{$users->links()}}
</div>



</div>
