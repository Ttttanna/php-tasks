<?php
if(isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'edit_page') {
	$id = $_GET['id'];
	//$sql= "SELECT * from pages where id =".$_GET['id'];
	//$res = mysqli_query($connection, $sql);
	//$page = mysqli_fetch_assoc($res);
	$stmt = mysqli_prepare($connection, "SELECT * from pages where id=?");
	mysqli_stmt_bind_param($stmt, "d", $id);
	mysqli_stmt_execute($stmt);
	$res = mysqli_stmt_get_result($stmt);
	$page = mysqli_fetch_assoc($res);
}

$url = isset($page['id']) ? '/admin/?action=update_page&id=' .$page['id'] : '/admin/?action=save_page';

?>

<div class="page-breadcrumb">
               
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-right upgrade-btn">
                           
														<div class="aform">
														  <form action="<?= $url ?>" method="post" enctype="multipart/form-data">
	                               <label> Title
		                              <input type="text" name="title" value="<?=$page['title'] ?? ''?>"/>
                                 </label>
		                             <br>
		                             <label>Image
		                              <input type="file" name="img"/>
                                 </label>
		                              <br>
		                             <label>Content
		                               <textarea name="content" id="" cols="30" rows="10"><?=$page['content'] ?? ''?></textarea>
                                 </label>
		                               <br>
		                              <label>Author
		                                <input type="text" name="author"  value="<?=$page['author'] ?? ''?>"/>
                                  </label>
		                              <br>
		                               <label>Category
		                                <input type="text" name="category"  value="<?=$page['category'] ?? ''?>"/>
                                  </label>
	                              	<br>
		                               
                                   <button type="submit">Save</button>
                                   </form>
														
														
														</div>
                        </div>
                    </div>
            </div>