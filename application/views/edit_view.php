<? var_dump($contacts);?>
<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Edit
				<strong>FORM</strong>
			</h2>
			<hr>
			<p>Edit the fields.</p>
			<form role="form" method="post">
				<div class="row">
					<div class="form-group col-lg-4">
						<label id='lbl-name'>Name</label>
						<input type="text" class="form-control" id="name" value="<? $contacts['name']; ?>" >
					</div>
					<div class="form-group col-lg-4">
						<label>Email</label>
						<input type="email" class="form-control" id="email" value="<? $contacts['email']; ?>" >
					</div>
					<div class="form-group col-lg-4">
						<label>Phone</label>
						<input type="tel" class="form-control" id ="phone" value="<? $contacts['phone']; ?>" >
					</div>
					<div class="clearfix"></div>
				   
					<div class="form-group col-lg-12">
						<input type="submit" class="btn btn-default" name="Submit" value="Edit">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
