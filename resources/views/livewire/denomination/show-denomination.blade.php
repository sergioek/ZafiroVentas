<div>

    <div class="offset-lg-10">
        <a href="{{route('denominations.create')}}">
            <button class="btn-sm btn-secondary">Nueva denominación</button>
        </a>
    </div>
    
    <div class="mt-3">
        <input type="text" name="" id="" wire:model="search"  class="form-control" placeholder="Ingrese un texto para buscar una denominacion">

        <a href="#Options" data-toggle="collapse">
            <button class="btn-small btn-primary mt-3 mb-2 offset-lg-10"><i class="fas fa-external-link-alt">
                </i>Opciones
            </button>
        </a>

    </div>

    
    @if(session('destroy'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Exito!</strong>Se elimino una denominación.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <table class="table table-hover">
        <thead>
            
          <tr>
            
            <th scope="col">Tipo</th>
            <th scope="col">Valor</th>
            <th scope="col">Imagen</th>

          </tr>
        </thead>
        <tbody>
            @forelse ($denominations as $denomination)            
            <tr>
                
                <div >
                        <td>{{$denomination->type}}</td>
                        <td>{{"$".$denomination->value}}</td>
                        <td><img src="{{$denomination->image}}" alt="70" width="70"></td> 
                </div>


                    <td class="collapse" id="Options">
                        <a href="{{route('denominations.edit',$denomination)}}" ><button class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                    </td>
               
                <td class="collapse" id="Options">
                    <form action="{{route('denominations.destroy',$denomination)}}" method="post">
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
            {{$denominations->links()}}
        </div>
</div>
