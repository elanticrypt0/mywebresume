<div class="container">
    <h1>Skills :: Update</h1>
    <form action="?ctrl=skills&mtd=store&id=<?= $data['id'];?>" method="POST">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="<?= $data['name'];?>" placeholder="Nombre.">
        </div>
        <div>
            <label for="detail">Detalle</label>
            <input type="text" name="detail" value="<?= $data['detail'];?>" placeholder="Detalle.">
        </div>
        <div>
            <label for="level">Nivel</label>
            <input type="text" name="level" value="<?= $data['level'];?>" placeholder="Nivel.">
        </div>
        <div>
            <label for="type">Tipo</label>
            <input type="text" name="type" value="<?= $data['type'];?>" placeholder="Tipo">
        </div>
        <div>
            <a href="#" class="btn btn-danger">Cancelar</a>
            <input type="submit" name="submit" value="Guardar" placeholder="" class="btn btn-primary">
        </div>
    </form>
</div>