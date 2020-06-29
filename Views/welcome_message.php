<body>
<h3>CodeIgniter CRUD App</h3>

<?php echo anchor('http://localhost:8001/welcome/create', 'Add Post');?>
<table class="table table-striped table-hover">
<thead>
 <tr>
  <th>Title</th>
  <th>Description</th>
  <th>Action</th>
 </tr>
</thead>

<tbody>
<?php if(count($posts)):?>
<?php foreach($posts as $post):?>

<tr>
  <td><?php echo $post->title;?></td>
  <td><?php echo $post->description;?></td>
<td>
<?php echo anchor("http://localhost:8001/welcome/view/{$post->id}", 'View');?>
<?php echo anchor("http://localhost:8001/welcome/update/{$post->id}", 'Update');?>
<?php echo anchor("http://localhost:8001/welcome/delete/{$post->id}", 'Delete');?>
</td>
</tr>
<?php endforeach;?>
<?php else: ?>
<tr>
<td>No Records Found!</td>
</tr>
<?php endif; ?>
</tbody>
</table>
</body>


