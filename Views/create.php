<h1>Add Post</h1>
<h3>Title</h3>
<form method="post" action="<?php echo site_url('welcome/save')?>">
 <input type='text' name='title' placeholder='Title'>

<h3>Description</h3>
 <input type='textarea' name='description' placeholder='Description'>
 <?php echo form_submit(['name'=>'submit', 'value'=>'submit']);?> 
</form>
