<?php
// $id = $_GET['id'];
// echo $tar;
// echo "Tarea: " . $tarea->getOne();


?>

<form action="<?= base_url ?>Task/actualizar" method="post">
    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">

    <label for="task">Ingrese su tarea</label>
    <input type="text" name="task">

    <button type="submit">Actualizar Tarea</button>
</form>