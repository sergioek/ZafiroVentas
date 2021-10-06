    <div>
          <form method="POST" action="{{route('companies.update',$company)}}" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="">Nombre de la empresa</label>
                <input type="text" class="form-control" id=""placeholder="Nombre de la empresa" required name="name" value="{{$company->name}}">
                @error('name')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
              </div>


              <div class="form-group">
                <label for="">Direccíon de la empresa</label>
                <input type="text" class="form-control" id=""placeholder="Direccíon de la empresa" required name="address" value="{{$company->address}}">
                @error('address')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
              </div>


              <div class="form-group">
                <label for="">Teléfono de la empresa</label>
                <input type="text" class="form-control" id=""placeholder="Teléfono de la empresa" required name="phone" value="{{$company->phone}}">
                @error('phone')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
              </div>


              <div class="form-group">
                <label for="">CUIT de la empresa</label>
                <input type="text" class="form-control" id=""placeholder="CUIT de la empresa" required name="CUIT" value="{{$company->CUIT}}">
                @error('phone')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
              </div>

              <x-buttonupdate/>
            </form>
      </div>