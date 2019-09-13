<?php echo form_open('mahasiswa/edit');?>
<?php echo form_hidden('id',$datamahasiswa[0]->id);?>

<head>
  <title>Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<h2> Edit Mahasiswa </h2>
<table class="table table-bordered table-striped table-hover">

    <tr><td>ID</td><td><?php echo form_input('',$datamahasiswa[0]->id,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$datamahasiswa[0]->nama);?></td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat',$datamahasiswa[0]->alamat);?></td></tr>
    <tr><td>JURUSAN</td><td><?php echo form_input('jurusan',$datamahasiswa[0]->jurusan);?></td></tr>

</table>

<?php echo form_submit('submit','Simpan',['class' => 'btn btn-primary']);?>
        <?php echo anchor('mahasiswa','Kembali',['class' => 'btn btn-warning']);?></td></tr>

</div>
</body>
<?php
echo form_close();
?>