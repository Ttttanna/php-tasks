<?php 
$sql = "SELECT * from pages";
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);
//var_dump($pages);
?>
<div id="page-wrapper">
<h1>List page</h1>
<a href="/admin/?action=add_page" class="btn btn-warning text-white mt-4">Добавить статью</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Название</th>
      <th scope="col">Действие</th>
    </tr>
  </thead>
  <tbody>
		<?php foreach ($pages as $page): ?>
    <tr>
      
      <td><?=$page['title']?></td>
      <td>
				<a href="/admin/?action=edit_page&id=<?=$page['id']?>">Редактировать</a>
				<a href="/admin/?action=delete_page&id=<?=$page['id']?>">Удалить</a>
			</td>
    </tr>
		<?php endforeach; ?>
  </tbody>
</table>
</div>

