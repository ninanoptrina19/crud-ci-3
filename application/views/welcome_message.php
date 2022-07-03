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

<div class="container">
	<h1 class="text-center mt-5">Data Buku</h1>
	<a href="<?= base_url(); ?>Add" class="btn btn-primary m-4">Tambah Data</a>
	<table class="table table-striped table-bordered table-hover mt-2">
		<thead class="bg-dark text-white">
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Author</th>
			<th>Year</th>
			<th>Publisher</th>
			<th>Image</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php
			foreach ($buku as $row) :
			?>
			<tr>
				<td>
					<?= $row->id; ?>
				</td>
				<td>
					<?= $row->title; ?>
				</td>
				<td>
					<?= $row->author; ?>
				</td>
				<td>
					<?= $row->year; ?>
				</td>
				<td>
					<?= $row->publisher; ?>
				</td>
				<td>
					<img src="<?= $row->imagepath; ?>" alt="" width="50px">
				</td>
				<td>
					<a href="<?= base_url('Edit/utama/') . $row->id; ?>" class="btn btn-sm btn-warning">Edit</a>
					<a href="<?= base_url('Delete/hapus/') . $row->id; ?>" class="btn btn-sm btn-danger">Hapus</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>

	</table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
