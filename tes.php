<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pemerintah</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <meta name="author" content="Alvaro Trigo Lopez">
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/brands.css" rel="stylesheet">
    <link href="css/solid.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

  </head>
  <body>
<form method="POST" action="terima.php">
  <div id="cek">
  <div class="cek">
    <div class="container-fluid">
      <div class="row">
        <div class="daftar col-12">
          <h1>Silahkan Masukkan Nama Anda</h1>
          <p>Pastikan anda telah terdaftar pada Acara Pembinaan PPAT Tahun 2020 Kantor Pertanahan Kabupaten Gresik</p>
          <input type="text" name="cari" id="cari" class="form-control" placeholder="Masukkan Nama anda" required/>  
          <div id="containernama"></div>
          <div class="btnMargin"> 
          <button class="cekBtn btn btn-success"  type="submit"> <i class="btnIcon fas fa-sign-in-alt"></i> Masuk </button>
          <a class="cekBtn btn btn-danger"  href="index.html"> <i class="btnIcon fas fa-home"></i> Back </a>
          </div> 
    </div>
  </div>
</div>
</div>
</form>


<script>
  $(document).ready(function(){  
      $('#cari').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#containernama').fadeIn();  
                          $('#containernama').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#cari').val($(this).text());  
           $('#containernama').fadeOut();  
      });  
 });  
</script>
 <script defer src="js/brands.js"></script>
    <script defer src="js/solid.js"></script>
    <script defer src="js/fontawesome.js"></script>
  <script src="jquery.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>

