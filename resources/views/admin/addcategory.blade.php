<div class="card shadow center" style="width: 20rem;">
  <div class="card-header text-center">
    <h4>Add Your New Catagory</h4>
  </div>
  <div class="card-body">
    <form method="POST" action="/admincategory">
      @csrf
    	<div class="form-group">
    		<label>Upload Image</label>
    		<input type="file" class="form-control-file" name="image">
  		</div>
    	<div class="form-group">
    		<label>Catagory Name</label>
    		<input type="text" class="form-control" name="cat_name" aria-describedby="catagory" placeholder="Enter catagory">
  		</div>
  		<div class="form-group text-center">
  			<button type="submit" name="save" class="btn btn-secondary">Save</button>
  		</div>
    </form>
  </div>
</div>