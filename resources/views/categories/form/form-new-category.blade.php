
    @if (session('error_file'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>ERROR!</strong>No se pudo cargar la categoría.Existe un error en el fomato de arhivo cargado. Recuerde que debe ser "jpeg" o "png".
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
    @endif
        <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
              <label for="">Nombre de la Categoría</label>
              <input type="text" class="form-control" id=""placeholder="Nombre de categoría en mayúsculas" required name="name" value="{{old('name')}}">
              @error('name')
                <br>
                    <small class="text-danger">*{{$message}}</small>
                <br>
              @enderror
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Imagen</label>
              <input type="file" class="form-control-file" id="" name="image" accept="image/jpeg, image/png">

              @error('image')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
            </div>   
            
            <x-buttonsave/>
            
          </form>
    </div>