<div>
    <div class="card">
        <div class="card">
                <div class="card-header text-center">Detalles de la compra</div>
                <div class="card-body">
                    <h1 class="fs-1 text-primary text-center">TOTAL A PAGAR</h1>
                    <h2 class="fs-2 text-center">{{"$".number_format($total,2)}}</h2>
                </div>
              
    </div>

  <div class="bg-light">
          <h4 class="fs-4 text-center text-bold fst-italic text-success mt-3">SELECCIONE CLIENTE </h4>

          <div class="mb-3 row">
            <label for="staticEmail" class="col-2 col-form-label ml-3">DNI del cliente:</label>
            <div class="col-7">
              <input type="text" class="form-control" id="" placeholder="Ingrese el DNI del Cliente">
            </div>
          </div>


          <div class="mb-3 row">
            <label for="staticEmail" class="col-2 col-form-label ml-3">Cliente:</label>
            <div class="col-7 input-group">
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Cliente...</option>
                </select>
                <button class="btn btn-primary ml-2">Cargar</button>
            </div>
          </div>
  </div>

<div class="bg-light mt-5">
    <h4 class="fs-4 text-center text-bold fst-italic text-danger mt-3 ">METODO DE PAGO </h4>
   <div class="form-group text-center mt-4">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label mr-2" for="inlineRadio1">Contado Efectivo</label>
        <i class="fas fa-money-check-alt"></i>
    </div>
    <div class="form-check form-check-inline ml-4">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">A credito</label>
    </div>
    <i class="far fa-credit-card"></i>
    <div class="form-check form-check-inline ml-4">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
        <label class="form-check-label mr-2" for="inlineRadio3">MercadoPago</label>
        <img src="https://img.icons8.com/color/20/000000/mercado-pago.png"/>

    </div>
   </div>

</div>

</div>