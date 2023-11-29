<?php

echo "Su tarea es: ". $tar->task;

?>

<form action="<?= base_url ?>Task/actualizar" method="post">
    <input type="hidden" name="id" value="<?= $tar->id ?>">

    <label for="task">Ingrese su tarea</label>
    <input type="text" name="task">

    <button type="submit">Actualizar Tarea</button>
</form>