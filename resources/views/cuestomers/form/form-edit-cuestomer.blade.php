<div>
    <form method="POST" action="{{route('cuestomers.update',$cuestomer)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="">Nombres del cliente</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Nombres del cliente" required value="{{$cuestomer->name}}">
          @error('name')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" id=""placeholder="Apellidos del cliente" required name="lastname" value="{{$cuestomer->lastname}}">
          @error('lastname')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        
        <div class="form-group">
            <label for="">DNI</label>
            <input type="number" class="form-control" id=""placeholder="DNI del cliente sin puntos" required name="dni" value="{{$cuestomer->dni}}">
            @error('dni')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Telefono</label>
            <input type="tel" class="form-control" id=""placeholder="Telefono del cliente" required name="telephone" value="{{$cuestomer->telephone}}">
            @error('telephone')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Correo electronico</label>
            <input type="email" class="form-control" id=""placeholder="Correo del cliente" required name="email" value="{{$cuestomer->email}}">
            @error('email')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

        
          <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Actualizar</button>
        
      </form>
</div>