<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container mt-3">
    <h3>Tambah Buku</h3>
    <form role="form" method="post" action="<?php echo base_url();?>Add/insert">
        <div class="form-group">
            <label >Judul</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label >Penulis</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>
         <div class="form-group">
            <label >Tahun</label>
            <input type="text" name="year" id="year" class="form-control">
        </div> 
        <div class="form-group">
            <label >Penerbit</label>
            <input type="text" name="publisher" id="publisher" class="form-control">
        </div>
        <div class="form-group">
            <label >Image</label>
            <input type="text" name="imagepath" id="imagepath" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
