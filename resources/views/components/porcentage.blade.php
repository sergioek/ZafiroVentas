<div>
<div class="container">
    <div class="row align-items-start">

    <div class="col"><strong>Interes %</strong><input type="number" name="" id="" class="form-control" placeholder="Aplique un porcentaje" min="0" value="0" wire:model="interest"></div>
    <div class="col"><strong>Descuento %</strong><input type="number" name="" id="" class="form-control" placeholder="Aplique un porcentaje" min="0" value="0" wire:model="discount"></div>
    </div>
</div>

<div class="text-right">
    <button class="btn btn-outline-success col-lg-2 mt-3" wire:click="Percentage()">Aplicar porcentajes</button>
</div>
</div>