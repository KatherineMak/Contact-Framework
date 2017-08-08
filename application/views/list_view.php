<?php
	$contacts = $data;
?>
<div class="container">
	<div class="row">
		  <div class="box">
			<table class="table table-bordered"> 
				<input class="sqs-add-to-cart-button sqs-suppress-edit-mode" type="submit" class="btn btn-default" name="Add" value="Add" onClick='location.href="/contact/add"'>
				<thead> 
				  <tr> 
					<th>#</th> 
					<th>First Name</th> 
					<th>Email</th> 
					<th>Phone</th> 
				  </tr> 
				</thead> 
				<tbody> 
				<?php foreach ($contacts as $key => $contact) : ?>
				  <tr> 
					<th scope="row"><?= $key+1; ?></th> 
					<td><?= $contact['name'] ?></td> 
					<td><?= $contact['email'] ?></td> 
					<td><?= $contact['phone'] ?></td> 
					<td><p class="text-center" ><a class="btn btn-default" href = '/contact/delete?id=<?= $contact['id'];?>' method="get">Delete</a></p> </td> 
					<td><p class="text-center" > <a class="btn btn-default" href = '/contact/edit?id=<?= $contact;?>' method="get">Edit</a> </p> </td> 
				  </tr> 
				<?php endforeach; ?>  
				</tbody> 
			</table>
		  </div>
	</div>
</div>