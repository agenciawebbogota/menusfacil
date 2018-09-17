<form action="{{url('cargafin')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="file" name="imagen">
    <button type="submit">
        Cargar
    </button>
</form>