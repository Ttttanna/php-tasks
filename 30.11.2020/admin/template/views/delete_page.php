<?php
$id = $_GET['id'];
$stmt = mysqli_prepare($connection, 'DELETE FROM pages WHERE id = ?');
mysqli_stmt_bind_param($stmt, "d", $id);
mysqli_stmt_execute($stmt);

?>

<div class="page-breadcrumb">

    <div class="row">


       

            <div class="form-group">
                <h1>Вы удалили пост</h1>
            </div>

            <a href="/admin/?action=list_page">Назад к списку статей</a>
      
    </div>
</div>