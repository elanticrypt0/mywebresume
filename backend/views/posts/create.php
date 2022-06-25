<div class="container">
    <h1>Posts :: create</h1>
    <form action="?ctrl=posts&mtd=store" method="POST">
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" value="" placeholder="Título.">
        </div>
        <div>
            <label for="content">texto</label>
            <textarea name="content" value="" placeholder="..."></textarea>
        </div>
        <div>
            <label for="lang">Idioma</label>
            <label for="lang"><b>ES</b></label>
            <input type="checkbox" name="lang" value="es">
            <label for="lang"><b>EN</b></label>
            <input type="checkbox" name="lang" value="en">
        </div>
        <div>
            <label for="position">Posición</label>
            <input type="text" name="position" value="0" placeholder="">
        </div>
        <div>
            <a href="#" class="btn btn-danger">Cancelar</a>
            <input type="submit" name="submit" value="Guardar" placeholder="" class="btn btn-primary">
        </div>
    </form>
</div>