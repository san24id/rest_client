<head>
  <title>Absensi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
<h2> DATA ABSENSI LABORATORIUM IRC </h2><p class="pull-right"><?=$this->session->userdata('username')?></p>

<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>

<table class="table table-bordered table-striped table-hover">

<tbody id="myTable">

    <tr><th>NAMA</th><th>Tanggal</th></tr>
    <?php
    foreach ($datakunci as $kunci){
        echo "
              <tr>
              <td>$kunci->nama_p</td>
              <td>$kunci->tanggal</td>
              </tr>";
    }
    ?>
</tbody>
</table>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<button type="button" class="btn btn-primary" onclick="myFunction()">PRINT</button>

<script>
function myFunction() {
  window.print();
}
</script>

<!-- <a href="http://localhost/rest_client/index.php/mahasiswa/create"><button type="button" class="btn btn-default">+ Tambah Mahasiswa</button> -->
<a href="http://localhost/rest_client"><button type="button" class="btn btn-primary">Logout</button>

</div>

</body>
