<?=$header ?>
    <h1>Editar libro</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <form action="<?=base_url('actaulizar'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <input type="text" name= "nombre" class="form-control" value="<?=$libro['nombre']; ?>" autofocus>
                    </div>
        
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagen del libro</label>
                        <br>
                        <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$libro['imagen']?>" width ="100" alt="">
                        <input class="form-control" type="file" id="imagen" name="imagenLibro">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" name="guardar_tarea" class="btn btn-success">Editar libro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?=$footer ?>
