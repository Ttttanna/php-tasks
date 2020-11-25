<div class="page-breadcrumb">
               
							 <div class="col-md-6 col-4 align-self-center">
									 <div class="text-right upgrade-btn">
											 <h5>
												Редактировать статью
											 </h5>
											 <div class="aform">
												 <form action="" method="post" enctype="multipart/form-data">
														<label> New Title
														 <input type="text" name="title" />
														</label>
														<br>
														<label> New Image
														 <input type="text" name="img" />
														</label>
														 <br>
														<label>New Content
															<textarea name="content" id="" cols="30" rows="10"></textarea>
														</label>
															<br>
														 <label>New Author
															 <input type="text" name="author" />
														 </label>
														 <br>
															<label>New Category
															 <input type="text" name="category" />
														 </label>
														 <br>
															<input type="file" name="loaded" />
															<button type="submit">Save editing</button>
															</form>
											 
											 
											 </div>
									 </div>
							 </div>
			 </div>
<?php 
//var_dump($_GET['id']);
$currentId = $_GET['id'];
//var_dump($_POST);
//var_dump($_FILES);
$str = '';
if(!empty($_POST)) {
	foreach ($_POST as $item => $value) {
		
		if($value != '') {
			$str = $str.$item.'='.'"'.$value.'", ';
		}
	}
	
	//var_dump($str);
	if($_FILES['loaded']['size'] > 0) {
		$imgUrl = '/upload/'.$_FILES['loaded']['name'];
		move_uploaded_file($_FILES['loaded']['tmp_name'], BASE_PATH.'/../upload/'.$_FILES['loaded']['name']);
		$str = $str.'loaded='.'"'.$imgUrl.'"';
	  //var_dump($str);
	} else {
		$str=substr($str, 0, -2);
		//var_dump($str);
	}	
}

$query ="UPDATE pages SET '{$str}'  WHERE id='{$currentId}'";


mysqli_query($connection, $query);
var_dump($connection);