<div>
    <form method="POST" action="{{route('sales.update',$sale)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="">Entrega $:</label>
          <input type="number" name="cash"  max="{{$sale->debt}}" id="" step="0.1" class="form-control">
          @error('cash')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <x-buttonupdate/>
        
      </form>
</div>