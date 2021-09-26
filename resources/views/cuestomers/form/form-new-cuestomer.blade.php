<div>
    <form method="POST" action="{{route('cuestomers.store')}}" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="">Nombres del cliente</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Nombres del cliente" required value="{{old('name')}}">
          @error('name')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" id=""placeholder="Apellidos del cliente" required name="lastname" value="{{old('lastname')}}">
          @error('lastname')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        
        <div class="form-group">
            <label for="">DNI</label>
            <input type="number" class="form-control" id=""placeholder="DNI del cliente sin puntos" required name="dni" value="{{old('dni')}}">
            @error('dni')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Telefono</label>
            <input type="tel" class="form-control" id=""placeholder="Telefono del cliente" required name="telephone" value="{{old('telephone')}}">
            @error('telephone')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Correo electronico</label>
            <input type="email" class="form-control" id=""placeholder="Correo del cliente" required name="email" value="{{old('email')}}">
            @error('email')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

        
          <x-buttonsave/>
        
      </form>
</div>