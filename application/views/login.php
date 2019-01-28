<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" sizes="350x300" href="<?= base_url("assets/img/logo2.png")?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PIKET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="<?= base_url("assets/css/main.css")?>"/>
    <link rel="stylesheet" type="text/css"  href="<?= base_url("assets/css/login.css")?>">
    <link rel="stylesheet" type="text/css"  href="<?= base_url("assets/css/footer.css")?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css"  href="<?= base_url("assets/css/butmasuk.css")?>">
    <script src="<?= base_url("assets/jquery/jquery.min.js")?>"></script>
</head>
<body>
    
<header id="showcase" class="slide-up-fade-in">
    <p class="slide-up-fade-in">Merupakan Web aplikasi yang dapat mempermudah untuk mengelola daftar hadir siswa</p>
    <div class="logoe slide-up-fade-in">
    </div>
    <div class="logoiket">
    <h1 class="slide-up-fade-in"><img class="logoqu" src="<?= base_url("assets/img/logo2.png")?>" > KONSEL</h1>
    </div>
    <div id="container">
        <button class="learn-more">
            <a href ="#section-a">
                <div class="circle">
                <span class="icon arrow"></span>
                </div>
                <p class="button-text">Masuk Sekarang</p>
            </a>
        </button>
    </div>
</header>
  <section id="section-a">
  <div class="konten">
        <div class="kepala">
            <!-- <div class="lock"></div> -->
            <h2 class="judul">Masuk</h2>
        </div>
        <div class="artikel">
            <form action="<?php echo base_url('index.php/Login/aksi_login'); ?>" method="post">
                <div class="grup" data-validate = "Valid email is required: ex@abc.xyz">
                    <label for="email">ID anda</label>
                    <input type="text" placeholder="Ketikan ID anda Anda" name ="no_induk">
                </div>
                <div class="grup" data-validate = "Password is required">
                    <label for="password">Password</label>
                    <input type="password" type="password" name="password" placeholder="Passwordnya">
                </div>
                <div class="grup">
                    <a href="#footer">
                        <label class="belum">Belum Terdaftar ?</label>
                    </a>
                    <input type="submit" value="Masuk">
                </div>
            </form>
        </div>
    </div>
  </section>
  <footer>
  <div id="footer"class="container-footer">
      <div class="footer-box">
            <label for="password">Hubungi Nomor dibawah ini untuk membuat akun</label>
      </div>
      <div class="footer-box">
          <ul>
        <li><label>Agus Indra Cahaya : 081391380393</label></li>
        
</ul>
      </div>
  </div>
</footer>
</body>
<script>
    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 700, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
  </script>
</html>