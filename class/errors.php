<?php  if (count($errors) > 0) : ?>
  <div class="error" style="width: 65%; 
  margin: 0px auto; 
  padding: 2px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 2px; 
  text-align: center;">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>