<!DOCTYPE html>
<html>
    <head>
<title>Codeigniter 4 CRUD Application by Anshrah</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">


</head>
<body>
    <div class="container-fluid bg-purple">
        <div class="container pb-2 pt-2" style="background-color: pink;">
            <div class="text-white h4" >Codeigniter 4 CRUD Application by Anshrah</div>
</div></div>
<div class="bg-white shadow-sm">
<div class="container">
<div class="row">
<nav class="nav nav-underline">
<div class="nav-link">Books / View</div>
</nav>
</div>
</div>
</div>

<div class="container mt-4">
<div class="row">
<div class="col-md-12 text-right">
<a href="<?php echo base_url('books') ?>" class="btn btn-primary">BACK</a>
</div>
</div>
</div>
<div class="container mt-4">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header bg-purple text-white">
<div class="card-header-title">Edit Book</div>
</div>
<div class= "card-body">

<form name="createForm" id="createForm" method="post" action="<?php echo base_url('books/edit/'.$book['id'])?>">

<div class="form-group">
    <label>Name</label>
    <input type="text" placeholder="Name" name="name" id="name" class="form-control <?php echo (isset($validation) && $validation->hasError('name')) ? 'is-invalid' : ''; ?>" value="<?php echo set_value('name',$book['title']); ?>">

<?php
  
   if(isset($validation) && $validation->hasError('name')){
    echo '<p class="invalid-feedback">'.$validation->getError('name').'</p>';
   }

?>

</div>



<div class="form-group">
    <label>Author</label>
    <input type="text" placeholder="Author" name="author" id="author" class="form-control <?php echo (isset($validation) && $validation->hasError('author')) ? 'is-invalid' : ''; ?>" value="<?php echo set_value('author',$book['author']); ?>">

    <?php
  
  if(isset($validation) && $validation->hasError('author')){
   echo '<p class="invalid-feedback">'.$validation->getError('author').'</p>';
  }

?>
</div>

<div class="form-group">
    <label>ISBN No</label>
    <input type="text" placeholder="ISBN_No" name="isbn_no" id="isbn_no" class="form-control" value="<?php echo set_value('isbn_no',$book['isbn_no']); ?>">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>