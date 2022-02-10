<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="tipo_documento" class="text-capitalize">tipo documento</label>
            <select class="form-control td" name="tipo_documento" id="tipo_documento" autofocus>
                <option value="">Seleccione un tipo de documento...</option>
                <option value="Cedula de cidadania">Cedula de cidadania</option>
                <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                <option value="Pasaporte">Pasaporte</option>
                <option value="Dni">Dni</option>
            </select>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
          <label for="documento" id="doc" class="text-capitalize">documento</label>
          <input type="number" class="form-control" name="documento" id="documento" aria-describedby="helpId" placeholder="Ingrese numero de documento">
        </div>
    </div>
</div>

<div class="row nombresApellidos">
    <div class="col">
        <div class="form-group">
          <label for="nombres" class="text-capitalize">nombres</label>
          <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres" aria-describedby="helpId">
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="primer_apellido" class="text-capitalize">primer apellido</label>
            <input type="text" name="primer_apellido" id="primer_apellido" class="form-control" placeholder="Primer apellido" aria-describedby="helpId">
          </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="segundo_apellido" class="text-capitalize">segundo apellido</label>
            <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control" placeholder="Segundo apellido" aria-describedby="helpId">
          </div>
    </div>
</div>

<div class="row ">
    <div class="col">
        <div class="form-group">
          <label for="telefono" class="text-capitalize">telefono</label>
          <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono fijo o celular" aria-describedby="helpId">
        </div>
    </div>

    <div class="col">
        <label for="username" class="text-capitalize">usuario</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Usuario" id="username" name="username">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="password" class="text-capitalize">contraseña</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
        </div>
    </div>
    <div class="col">
        <label for="email" class="text-capitalize">correo</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary"><i class="fas fa-at"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="ejemplo@correo.com" id="email" name="email">
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <label for="foto" class="text-capitalize">foto</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02" name="foto">
                <label class="custom-file-label" for="inputGroupFile02" name="imagen" aria-describedby="inputGroupFileAddon02" data-browse="seleccionar" >foto</label>
            </div>
        </div>
    </div>
    <div class="col">
        <label for="foto" class="text-capitalize">fiscalia</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fiscalia" name="fiscalia">
                <label class="custom-file-label" for="fiscalia" name="fiscalia" aria-describedby="inputGroupFileAddon02" data-browse="cargar" >antecedentes</label>
            </div>
        </div>
    </div>

    <div class="col">
        <label for="foto" class="text-capitalize">procuraduria</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="procuraduria" name="procuraduria">
                <label class="custom-file-label" for="procuraduria" name="procuraduria" aria-describedby="inputGroupFileAddon02" data-browse="cargar" >antecedentes</label>
            </div>
        </div>
    </div>

    <div class="col">
        <label for="policia" class="text-capitalize">policia</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="policia" name="policia">
                <label class="custom-file-label" for="policia" name="policia" aria-describedby="inputGroupFileAddon02" data-browse="cargar" >antecedentes</label>
            </div>
        </div>
    </div>
</div>
<div id="fotoUsuarios" class="mt-2"></div>

@section('js')
<script>
    document.getElementById("inputGroupFile02").onchange = function(e) {
        // Creamos el objeto de la clase FileReader
        let reader = new FileReader();

        // Leemos el archivo subido y se lo pasamos a nuestro fileReader
        reader.readAsDataURL(e.target.files[0]);

        // Le decimos que cuando este listo ejecute el código interno
        reader.onload = function() {
            let preview = document.getElementById('fotoUsuarios')
                , image = document.createElement('img');

            image.src = reader.result;

            preview.innerHTML = '';
            preview.append(image);
        };
    }

</script>

@endsection



