<div>
      <form method="POST" action="{{route('denominations.update',$denomination)}}" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="">Nombre de la denominación</label>
            <select name="type" id="" class="form-control" required>
              <option value="MONEDA">MONEDA</option>
              <option value="BILLETE">BILLETE</option>
            </select>
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