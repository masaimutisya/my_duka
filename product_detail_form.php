<div class="container">

	<form action="" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-xl-4">
			<div class="card">
				<img src="static/images/<? echo $image ?>" style="height: 100%" class="card-img">
			</div>
			</div>

			<div class="col-md-8 col-lg-8 col-xl-8">
			<div class="form-group">
				<label>TITLE</label>
				<input type="text" name="title" class="form-control" 
				value="<? echo $title ?>"></input>
			</div>
			<div class="form-group">
				<label>DESCRIPTION</label>
				<textarea class="form-control">
					<? echo $description ?>
				</textarea>
			</div>
			<input hidden type="text" name="old_image" value="<? echo $image?>">
			<input type="file" name="view_image">
			<button class="btn btn-info btn-lg">UPDATE</button>
			</div>

		</div>
		
	</form>

</div>