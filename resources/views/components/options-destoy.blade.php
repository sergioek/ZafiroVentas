<div>
    <td class="collapse" id="Options" title="Eliminar">
        <form action="{{$action}}" method="post">
            @method('delete')
            @csrf
            <a href="">
            <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </a>
        </form>
    </td>
</div>