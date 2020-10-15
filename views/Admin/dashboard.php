<?php include 'includes/header.php';    ?>


<div class="container">

<table class="table table-striped">
  <tr> 
  	<th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr> 
  <tr> 
    <?php if(count($posts)): ?>
      <?php foreach($posts as $post): ?>
  	<td><?php echo $post->id; ?></td> 
  	<td><?php echo $post->fname; ?></td>
  	<td><?php echo $post->lname; ?></td>
    <td><?php echo $post->email; ?></td>
    <td><?php echo anchor("Admin/Update/{$post->id}",'Edit', ['class'=>'btn btn-primary']); ?>  <?php echo anchor("Admin/Delete/{$post->id}",'Delete', ['class'=>'btn btn-primary']); ?></td>
   </tr>
   <?php endforeach; ?> 
  <?php else: ?>
     <td>No Records Found!</td>
  <?php endif; ?>
   
</table>

</div>



<?php include 'includes/footer.php'; ?>