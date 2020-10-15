<?php include 'partials/header.php' ?>


<div class="container">



	<h2>Update</h2>

	<?php if($this->session->flashdata('msg')) {
		echo "<h3>".$this->session->flashdata('msg')."</h3>";
	}


	?>
	<hr>
	<?php echo validation_errors(); ?>

	<?php echo form_open("Admin/Change/{$post->id}", ['class'=>'form-horizontal']); ?>
  		<div class="form-group"> 
   			<label for="exampleInputEmail1">First Name</label>
        <?php echo form_input(['name' =>'fname', 'placeholder'=>'First Name', 'class'=>'form_control', 'value'=>set_value('fname', $post->fname )]); ?>
  		</div>

  		<div class="form-group">
   			<label for="exampleInputEmail1">Last Name</label>
        <?php echo form_input(['name' =>'lname', 'placeholder'=>'Last Name', 'class'=>'form_control', 'value'=>set_value('lname', $post->lname )]); ?>
  		</div>


  		<div class="form-group">
   			<label for="exampleInputEmail1">Email</label>
    		<?php echo form_input(['name' =>'email', 'placeholder'=>'Email', 'class'=>'form_control', 'value'=>set_value('email', $post->email )]); ?>
  		</div>

 	 <div class="form-group">
    	
      <button type="submit" class="btn btn-default">Submit</button>
      <?php echo anchor('Admin/Index', 'Back', ['class'=>'btn btn-primary']) ?>
 	 </div>


   
   
 
 	 <?php echo form_close(); ?>

</div>


<?php include 'partials/footer.php' ?>