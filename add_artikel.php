<div class="card">
  	<div class="card-body">
    	<h5 class="card-title">Add new article </h5>
    	<form action="src/_add_article.php" method="POST">
		  	<div class="form-group">
		    	<label>Title</label>
		    	<input type="text" name="title" required="title" class="form-control" >
		    	<small class="form-text text-muted">* Article title should be unique</small>
		  	</div>

		    <div class="form-group">
			    <label>Content</label>
			    <textarea id="summernote" name="content" required="content" class="form-control" rows="3"></textarea>
			</div>
		  	<button type="submit" class="btn btn-primary">Save article</button>
		  	<button type="reset" class="btn btn-danger">Cencel</button>
		</form>
  	</div>
</div>