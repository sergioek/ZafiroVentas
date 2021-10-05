<div class="row">
    @can('boxes.create')
    <div class="col bg-success text-center mt-4 ml-3" style="border-radius: 10px;">
        <a href="{{route('boxes.create')}}">
            <div class="mt-2" title="Abrir la caja para comenzar la venta.">
                <i class="fas fa-cash-register fa-5x"></i>
                <h1 class="">Abrir Caja</h1>
            </div>
        </a>
    </div>
    @endcan

    @can('categories.create')
    <div class="col bg-warning text-center mt-4 ml-3" style="border-radius: 10px;">
        <a href="{{route('categories.create')}}">
            <div class="mt-2" title="Ver las categorías de productos.">
                <i class="fas fa-poll-h fa-5x"></i>
                <h3 class="">Agregar Categorías de Producto</h3>
            </div>
        </a>
    </div> 
    @endcan
</div>
   


<div class="row">
    @can('marks.create')
    <div class="col bg-primary text-center mt-4 ml-3" style="border-radius: 10px;">
        <a href="{{route('marks.create')}}">
            <div class="mt-2" title="Agregar marcas de productos que venderá.">
                <i class="fab fa-markdown fa-5x"></i>
                <h1 class="">Agregar Marcas</h1>
            </div>
        </a>
    </div>
    @endcan

    @can('products.create')
    <div class="col bg-secondary text-center mt-4 ml-3" style="border-radius: 10px;">
        <a href="{{route('products.create')}}">
            <div class="mt-2" title="Agregar Productos nuevos a su negocio.">
                <i class="fas fa-tag fa-5x"></i>
                <h1 class="">Crear Producto</h1>
            </div>
        </a>
    </div>
    @endcan
</div>




<div class="row">
    <div class="col bg-info text-center mt-4 ml-3" style="border-radius: 10px;">
        <a href="{{route('cuestomers.create')}}">
            <div class="mt-2" title="Agregar clientes de su negocio.">
                <i class="far fa-address-card fa-5x"></i>
                <h1 class="">Nuevo Cliente</h1>
            </div>
        </a>
    </div>


    <div class="col bg-danger text-center mt-4 ml-3" style="border-radius: 10px;">
        <a href="{{route('carts.index')}}">
            <div class="mt-2" title="Iniciar una venta.">
                <i class="fas fa-cart-arrow-down fa-5x"></i>
                <h1 class="">Nueva Venta</h1>
            </div>
        </a>
    </div>
</div>



<div class="row">
    <div class="col bg-dark text-center mt-4 ml-3" style="border-radius: 10px;">
        <a href="{{route('reports.index')}}">
            <div class="mt-2" title="Ver evolucíon de ventas.">
                <i class="fas fa-calendar-check fa-5x"></i>
                <h1 class="">Reportes de Ventas</h1>
            </div>
        </a>
    </div>

    @can('users.index')
    <div class="col bg-secondary text-center mt-4 ml-3" style="border-radius: 10px;">
        <a href="{{route('users.index')}}">
            <div class="mt-2" title="Ver usuarios del sistema.">
                <i class="fas fa-cart-arrow-down fa-5x"></i>
                <h1 class="">Ver Vendedores</h1>
            </div>
        </a>
    </div>
    @endcan
</div>