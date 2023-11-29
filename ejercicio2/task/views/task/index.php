<h1>Tus Tareas</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Tarea</th>
        <th>Eliminar</th>
        <th>Modificar</th>
    </tr>
    <?php while ($task = $tasks->fetch_object()) : ?>
        <tr>
            <td><?= $task->id; ?></td>
            <td><?= $task->task; ?></td>
            <td><a href="<?= base_url ?>Task/eliminar&id=<?= $task->id; ?>">Eliminar</a></td>
            <td><a href="<?= base_url ?>Task/modificar&id=<?= $task->id; ?>">Modificar</a></td>
        </tr>
    <?php endwhile; ?>
</table>