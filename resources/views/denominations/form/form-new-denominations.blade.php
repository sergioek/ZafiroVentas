  <div>
          <form method="POST" action="{{route('denominations.store')}}" enctype="multipart/form-data">
              @method('POST')
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