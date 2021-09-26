
    <div>
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Exito!</strong>Se actualizo una categoría.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
         @endif
    
      @if (session('error_file'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>ERROR!</strong>No se pudo actualizar la categoría.Existe un error en el fomato de arhivo cargado. Recuerde que debe ser "jpeg" o "png".
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endif
          <form method="POST" action="{{route('categories.update',$category)}}" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="">Nombre de la Categoría</label>
                <input type="text" class="form-control" id=""placeholder="Nombre de categoría en mayúsculas" required name="name" value="{{$category->name}}">
                @error('name')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
                
              </div>
              <div class="form-group">
                <label for="">Imagen</label>
                <input type="file" class="form-control-file" id="" name="image" accept="image/jpeg, image/png" value="{{$category->image}}">
              </div>   
              <x-buttonupdate/>
            </form>
      </div>