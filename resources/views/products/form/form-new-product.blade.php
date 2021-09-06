
    <div>
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Exito!</strong>Se ingreso un nuevo producto.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
         @endif
    
      @if (session('error_file'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>ERROR!</strong>No se pudo cargar el producto.Existe un error en el fomato de arhivo cargado. Recuerde que debe ser "jpeg" o "png".
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endif

          <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
              @method('POST')
              @csrf
              <div class="form-group">
                <label for="">Nombre del producto</label>
                <input type="text" class="form-control" id=""placeholder="Nombre del producto" required name="name" value="{{old('name')}}">
                @error('name')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror

                <label for="">Categoría del producto</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($category as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>  
                    @endforeach
                    
                </select>
                @error('category_id')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror

                <label for="">Código</label>
                <input type="text" class="form-control" id=""placeholder="Código del producto" required name="brcode" value="{{old('brcode')}}">
                @error('brcode')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror

                <label for="">Talle</label>
                <select name="waist_id" id="" class="form-control">
                  @foreach ($waists as $waist)
                      <option value="{{$waist->id}}">{{$waist->waist}}</option>
                  @endforeach

                </select>
                @error('waist_id')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror

                <label for="">Color del producto</label>
                <input type="color" name="color" id="" class="form-control">
                @error('color')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror

                
                <label for="">Costo del producto</label>
                <input type="number" class="form-control" id="cost" placeholder="Costo del producto" required name="cost" value="{{old('cost')}}" step="0.01" min="1">
                @error('cost')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
            
              <label for="">Precio  de venta del producto</label>
              <input type="number" class="form-control" id="price" placeholder="Precio del producto" required name="price" value="{{old('price')}}" step="0.01" min="1">
              @error('price')
                <br>
                    <small class="text-danger">*{{$message}}</small>
                <br>
              @enderror
            

            <label for="">Stock del producto</label>
            <input type="number" class="form-control" id=""placeholder="Stock del producto" required name="stock" value="{{old('stock')}}" min="0">
            @error('stock')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          


          <label for="">Alerta de Stock</label>
          <input type="number" class="form-control" placeholder="Valor minimo que debe haber en stock" required name="alerts" value="{{old('alerts')}}" min="0">
          @error('alerts')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror

              

        <div class="form-group">
            <label for="exampleInputPassword1">Imagen del producto</label>
            <input type="file" class="form-control-file" id="" name="image" accept="image/jpeg, image/png">
        </div>   

              <button type="submit" class="btn btn-info"><i class="far fa-save"> Guardar</i></button>
            </form>
      </div>