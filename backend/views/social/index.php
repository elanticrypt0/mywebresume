<div class="container">
    <ul class="nav">
        <li><a class="nav nav-item" href="?ctrl=social&mtd=create">Nuevo</a></li>
    </ul>
    <h1>Social :: index</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>URL</th>
                <th>Detalle</th>
                <th>icon</th>
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
                <td><?= $item['name'] ?></td>
                <td><?= $item['url'] ?></td>
                <td><?= $item['detail'] ?></td>
                <td><?= $item['icon'] ?></td>
                <td><?= date("d/m/Y H:i:s",strtotime($item['updated_at'])) ?></td>
                <td>
                    <ul class="nav">
                        <li><a href="?ctrl=social&mtd=update&id=<?= $item['id'] ?>" class="btn btn-sm btn-success">Editar</a></li>
                        <li><a href="?ctrl=social&mtd=delete&id=<?= $item['id'] ?>" class="btn btn-sm btn-danger">Borrar</a></li>
                    </ul>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>