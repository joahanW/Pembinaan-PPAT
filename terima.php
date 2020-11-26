<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <meta name="author" content="Alvaro Trigo Lopez">
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/brands.css" rel="stylesheet">
    <link href="css/solid.css" rel="stylesheet">

</head>
<body>
<div class="terima">
    <div class="container">
    <div class="row">
    <div class="conTerima col-12">
    <?php
    // $conn = mysqli_connect("localhost","root","","pemerintah");
     $conn = mysqli_connect("localhost", "u9049545_adminfront", "pembinaanppat2020", "u9049545_frontend");

    if (isset($_POST['cari'])) {
     $cari = $_POST['cari'];

    if(empty($cari)){
    echo '<div class="johan"> Please Input Your Name </div>';
  }else{
   $query = "SELECT * FROM `peserta` WHERE `nama` LIKE '$cari'";
    $results = mysqli_query($conn, $query);
    $peserta = array();
    while( $row = mysqli_fetch_assoc($results) ) {
                $peserta[] = $row;
    }
    if(!empty($peserta)){ ?>
        <?php foreach ($peserta as $ps) { ?>
    
      <h4>Nomor Urut : <strong class="ups"> <?php echo $ps["no"]; ?></strong></h4>    
      <h4>Nama PPAT  : <strong class="ups"><?php echo $ps["nama"]; ?></strong></h4>
      <h4>Daerah Kerja   :  <strong class="ups"> Kabupaten Gresik </strong></h4>
      <p>Sebelum acara Pembinaan PPAT, pastikan anda telah mengikuti Quis sebanyak 30 soal dalam waktu 30 menit seputar Layanan Pertanahan di Kantor Pertanahan Kabupaten Gresik</p>
      <a class="terimaBtn btn btn-warning" style="color: white;" data-toggle="modal" data-target="#myModal2" > <i class="fas fa-qrcode"></i> QR code</a>
      <a class="terimaBtn1 btn btn-success" style="color: white;" href="https://onlinetest.pembinaanppatgresik.com/"> <i class="fas fa-play"></i> IKUT QUIS</a>
      <a class="terimaBtn btn btn-danger" style="color: white;" href="index.html"> <i class="fas fa-home"></i> Back</a>
      <a type="button" class="terimaBtn btn btn-primary" style="color: white;" data-toggle="modal" data-target="#myModal"><i class="fas fa-info-circle"></i> Info</a>
    <?php } ?>
    <?php } else { ?>
    <div class="johan"> Sorry, we can't find you. </div>
    <?php }} ?>
    <?php } ?>
    </div>
    </div>
    </div>
</div>
<div class="container">
  <!-- Trigger the modal with a button -->



  <!-- Modal -->
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">INFORMASI</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p> <strong>1.  </strong> Klik QR code dan tunjukkan ke panitia untuk absensi kehadiran peserta</p>
          <p> <strong>2.  </strong> Gunakan Nomor Urut sebagai username dan password pada Web Online Tes</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<div class="modal show" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">INFORMASI</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <img src="https://cdn.discordapp.com/attachments/493809334963142686/675194924500779032/barcode.jpeg" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/wow.min.js"></script>
    <script> new WOW().init(); </script>
    <script defer src="js/brands.js"></script>
    <script defer src="js/solid.js"></script>
    <script defer src="js/fontawesome.js"></script>

    <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>

</body>
</html>

