
<div>
    <div class="offset-lg-10">
        <a href="{{route('categories.create')}}">
            <button class="btn-sm btn-secondary">Nueva Categoría</button>
        </a>
    </div>
    
    <div class="mt-3">
        <input type="text" name="" id="" wire:model="search"  class="form-control" placeholder="Ingrese un texto para buscar una categoria">

        <a href="#Options" data-toggle="collapse">
            <button class="btn-small btn-primary mt-3 mb-2 offset-lg-10"><i class="fas fa-external-link-alt">
                </i>Opciones
            </button>
        </a>

    </div>

    @if (session('alert'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Alerta!</strong>No se puede eliminar la categoria porque esta asociada a un producto.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('success'))
        
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Exito!</strong>Se elimino una categoria.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    

    @endif

    <table class="table table-hover">
        <thead>
            
          <tr>
            
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)            
            <tr>
                
                <div >
                        <td>
                            <a href="{{route('products.show',$category->id)}}">{{$category->name}}</a>
                        </td>
                        <td>
                            <a href="{{route('products.show',$category->id)}}">
                                <img src="{{$category->image}}" alt="70" width="70">
                            </a>
                        </td> 
                </div>


                    <td class="collapse" id="Options">
                        <a href="{{route('categories.edit',$category)}}" ><button class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                    </td>
               
                <td class="collapse" id="Options">
                    <form action="{{route('categories.destroy',$category)}}" method="post">
                        @method('delete')
                        @csrf
                        <a href="">
                        <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </a>
                    </form>
                </td>
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
