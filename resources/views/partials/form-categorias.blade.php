<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['class' => 'form-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Categoría', 'autofocus']) !!}
    <small class="text-danger">{{ $errors->first('inputname') }}</small>
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripción', ['class' => 'form-label']) !!}
    {!! Form::textarea('descripcion', null,  ['class' => 'form-control', 'placeholder' => 'Descripción', 'rows'=>'3','style'=>"resize: none"]) !!}
    <small class="text-danger">{{ $errors->first('inputname') }}</small>
</div>
<div id="ver" class="mb-3"></div>

<div class="form-group">
    {!! Form::label('foto', 'Foto', ['class' => 'form-label']) !!}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="imagen">
        <label class="custom-file-label" for="customFileLang" data-browse="seleccionar">Seleccionar Archivo</label>
    </div>
</div>


@section('js')
<script>
    document.getElementById("customFileLang").onchange = function(e) {
        // Creamos el objeto de la clase FileReader
        let reader = new FileReader();

        // Leemos el archivo subido y se lo pasamos a nuestro fileReader
        reader.readAsDataURL(e.target.files[0]);

        // Le decimos que cuando este listo ejecute el código interno
        reader.onload = function() {
            let preview = document.getElementById('ver')
                , image = document.createElement('img');

            image.src = reader.result;

            preview.innerHTML = '';
            preview.append(image);
        };
    }

</script>
@endsection
