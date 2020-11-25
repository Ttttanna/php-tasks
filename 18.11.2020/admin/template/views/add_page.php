<div class="page-breadcrumb">
               
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-right upgrade-btn">
                            <button
                               class="admin" class="btn btn-danger d-none d-md-inline-block text-white">Добавить статью
                            </button>
														<div class="aform invisible">
														  <form action="/admin/?action=save_page" method="post" enctype="multipart/form-data">
	                               <label> Title
		                              <input type="text" name="title" />
                                 </label>
		                             <br>
		                             <label>Image
		                              <input type="text" name="img" />
                                 </label>
		                              <br>
		                             <label>Content
		                               <textarea name="content" id="" cols="30" rows="10"></textarea>
                                 </label>
		                               <br>
		                              <label>Author
		                                <input type="text" name="author" />
                                  </label>
		                              <br>
		                               <label>Category
		                                <input type="text" name="category" />
                                  </label>
	                              	<br>
		                               <input type="file" name="loaded" />
                                   <button type="submit">Save</button>
                                   </form>
														
														
														</div>
                        </div>
                    </div>
            </div>