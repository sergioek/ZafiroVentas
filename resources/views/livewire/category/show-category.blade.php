<div>

    <x-button-create href="{{route('categories.create')}}"/>
    <x-search-component placeholder="{{$placeholder='Ingrese un texto para buscar el nombre de una categoria'}}"/>  

    <table class="table  table-hover">
        <thead class="table-dark table-bordered">
            
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)            
            <tr>
                
                        <td>
                            <a href="{{route('products.show',$category->id)}}">{{$category->name}}</a>
                        </td>
                        <td>
                            <a href="{{route('products.show',$category->id)}}">
                                <img src="{{$category->image}}" alt="70" width="70">
                            </a>
                        </td> 
                

                <x-options-edit href="{{route('categories.edit',$category)}}"/>
                <x-options-destoy action="{{route('categories.destroy',$category)}}"/>
             
            </tr>
                
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
      </table>

        <div class="container offset-lg-9">
            {{$categories->links()}}
        </div>

 
</div>
