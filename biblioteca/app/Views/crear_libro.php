<?=$header ?>

    <h1>Crear libro</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <form action="<?=base_url('guardar'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <input type="text" name= "nombre" class="form-control" placeholder="Nombre del libro" autofocus>
                    </div>
        
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagen del libro</label>
                        <input class="form-control" type="file" id="imagen" name="imagenLibro">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" name="guardar_tarea" class="btn btn-success">Guardar libro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?=$footer ?>
