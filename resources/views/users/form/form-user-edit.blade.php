<div>
    <form method="POST" action="{{route('users.update',$user)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="">Estado:</label>
            <select name="status" id="" class="form-control">
                <option value="ACTIVE">ACTIVO</option>
                <option value="LOCKED">BLOQUEADO</option>
            </select>

          @error('status')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>




        <div class="form-group">
            <label for="">Rol:</label>
              <select name="roles" id="" class="form-control">
                  @foreach ($roles as $role)
                      <option value="{{$role->id}}">{{$role->name}}</option>
                  @endforeach
                  
              </select>
  
            @error('rol')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

        <x-buttonupdate/>
        
      </form>
</div>