<div class="container">
    <ul class="nav">
        <li><a class="nav nav-item" href="?ctrl=posts&mtd=create">Nuevo</a></li>
        <!-- <li><a class="nav nav-item" href="?ctrl=posts&mtd="></a></li> -->
    </ul>
    <h1>Posts :: index</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Idioma</th>
                <th>Posición</th>
                <th>Creado/actualizado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data as $item){
            ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['title'] ?></td>
                <td><?= $item['lang'] ?></td>
                <td><?= $item['position'] ?></td>
                <td><?= date("d/m/Y H:i:s",strtotime($item['updated_at'])) ?></td>
                <td>
                    <ul class="nav">
                        <li><a href="?ctrl=posts&mtd=update&id=<?= $item['id'] ?>" class="btn btn-sm btn-success">Editar</a></li>
                        <li><a href="?ctrl=posts&mtd=delete&id=<?= $item['id'] ?>" class="btn btn-sm btn-danger">Borrar</a></li>
                    </ul>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>