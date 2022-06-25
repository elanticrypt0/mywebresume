<div class="container">
    <h1>Social :: Update</h1>
    <form action="?ctrl=social&mtd=store&id=<?= $data['id'];?>" method="POST">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="<?= $data['name'];?>" placeholder="Nombre">
        </div>
        <div>
            <label for="url">URL</label>
            <input type="text" name="url" value="<?= $data['url'];?>" placeholder="URL">
        </div>
        <div>
            <label for="detail">Detalle</label>
            <input type="text" name="detail" value="<?= $data['detail'];?>" placeholder="Detalle">
        </div>
        <div>
            <label for="icon">Icono</label>
            <input type="text" name="icon" value="<?= $data['icon'];?>" placeholder="Tipo">
        </div>
        <div>
            <a href="#" class="btn btn-danger">Cancelar</a>
            <input type="submit" name="submit" value="Guardar" placeholder="" class="btn btn-primary">
        </div>
    </form>
</div>