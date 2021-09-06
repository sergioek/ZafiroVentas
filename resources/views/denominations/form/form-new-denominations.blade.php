
    <div>
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Exito!</strong>Se ingreso una nueva denominación.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
         @endif
    
      @if (session('error_file'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>ERROR!</strong>No se pudo cargar la denominacion.Existe un error en el fomato de arhivo cargado. Recuerde que debe ser "jpeg" o "png".
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endif
          <form method="POST" action="{{route('denominations.store')}}" enctype="multipart/form-data">
              @method('POST')
              @csrf
              <div class="form-group">
                <label for="">Nombre de la denominación</label>
                <input type="text" class="form-control" id=""placeholder="Nombre de la denominación" required name="type" value="{{old('type')}}">
                @error('type')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Valor de la denominación</label>
                <input type="number" class="form-control" id=""placeholder="Valor de la denominación" required name="value" value="{{old('value')}}">
                @error('value')
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
              
              <button type="submit" class="btn btn-info"><i class="far fa-save"> Guardar</i></button>
              
            </form>
      </div>