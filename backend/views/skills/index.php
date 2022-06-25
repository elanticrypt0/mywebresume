<div class="container">
    <ul class="nav">
        <li><a class="nav nav-item" href="?ctrl=skills&mtd=create">Nuevo</a></li>
    </ul>
    <h1>Skills :: index</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Nivel</th>
                <th>Tipo</th>
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
                <td><?= $item['detail'] ?></td>
                <td><?= $item['level'] ?></td>
                <td><?= $item['type'] ?></td>
                <td><?= date("d/m/Y H:i:s",strtotime($item['updated_at'])) ?></td>
                <td>
                    <ul class="nav">
                        <li><a href="?ctrl=skills&mtd=update&id=<?= $item['id'] ?>" class="btn btn-sm btn-success">Editar</a></li>
                        <li><a href="?ctrl=skills&mtd=delete&id=<?= $item['id'] ?>" class="btn btn-sm btn-danger">Borrar</a></li>
                    </ul>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>