<div>
    @if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Exito!</strong>Se edito una denominación.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
     @endif

  @if (session('error_file'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>ERROR!</strong>No se pudo editar la denominacion.Existe un error en el fomato de arhivo cargado. Recuerde que debe ser "jpeg" o "png".
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif
      <form method="POST" action="{{route('denominations.update',$denomination)}}" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="">Nombre de la denominación</label>
            <input type="text" class="form-control" id=""placeholder="Nombre de la denominación" required  value="{{$denomination->type}}" name="type">
            @error('type')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Valor de la denominación</label>
            <input type="number" class="form-control" id=""placeholder="Valor de la denominación" required  value="{{$denomination->value}}"name="value">
            @error('value')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Imagen</label>
            <input type="file" class="form-control-file" id="" accept="image/jpeg, image/png" value="{{$denomination->image}}" name="image" >

            @error('image')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
          </div>   
          
          <button type="submit" class="btn btn-success"><i class="far fa-save"> Actualizar</i></button>
          
        </form>
  </div>