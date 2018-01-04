
<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1" style="z-index: 100; position: fixed;">
    <header id="header" class="hoc clear" > 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">MonoCyber</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a  href="<?=base_url();?>monitor/login">Monitor</a>
          <li><a  href="<?=base_url();?>Admin">Admin</a>
         <!--  <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
          </ul> -->
        </li>
        <!-- <li><a class="drop" href="#">Gallery</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Order</a></li>
        <li><a href="#">Contact</a></li> -->
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" id="backgroundImg">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Moto</p>

      <blockquote style="font-size: 20px;">Listrik untuk Kehidupan yang Lebih Baik</blockquote>

      <p></p>
      <!-- <footer><a class="btn" href="#">Monitor</a></footer> -->
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Our Team</h6>
      <p></p>
    </div>
    <ul class="nospace  services">
     <?php
     $i=1;
     foreach ($karyawan as $data) {
      if($i > 3){
        $i =1;
      }
      if($i== 1){
        ?>
        <li class="one_third first" style="background-color: white; " >
          <article class="infobox"  >
            <h6 class="heading" style="font-size: 15px;">Nama: <?=$data->nama?></h6>
            <h6 style="font-size: 15px;">NIP :<?=$data->nip?></h6>
            <h6 style="font-size: 15px;">Jabatan :<?=$data->jabatan?> </h6>
            <h6 style="font-size: 15px;">T. Lahir :<?=$data->tanggal_lahir?></h6>

            <img style="width: 250px; height: 250px;" src="<?=base_url();?>assets/img/<?=$data->foto?>">
          </article>
        </li>
        <?php
      }else{
        ?>
        <li class="one_third" style="background-color: white; ">
          <article class="infobox">
            <h6 class="heading" style="font-size: 15px;">Nama: <?=$data->nama?></h6>
            <h6 style="font-size: 15px;">NIP :<?=$data->nip?></h6>
            <h6 style="font-size: 15px;">Jabatan :<?=$data->jabatan?> </h6>
            <h6 style="font-size: 15px;">T. Lahir :<?=$data->tanggal_lahir?></h6>

            <img style="width: 250px; height: 250px;" src="<?=base_url();?>assets/img/<?=$data->foto?>">
          </article>
        </li>
        <?php
      }
      $i = $i + 1;

    }

    ?>

  </ul>
  <!-- ################################################################################################ -->
  <!-- / main body -->
  <div class="clear"></div>
</main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="wrapper bgded overlay" id="backgroundImg1">
  <div class="hoc container clear"> 
    ################################################################################################
    
    <!-- ################################################################################################ -->
  <!-- </div>
</div> -->
<div class="wrapper bgded overlay" id="backgroundImg1">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_half first">
        <article class="group">
          <div class="one_half">
            <h3 class="heading font-x1">Misi</h3>
            <p><?=$visimisi->misi?></p>

          </div>
        </article>
      </li>
      <li class="one_half">
        <article class="group">
          <div class="one_half first"><a href="#"><img src="images/demo/320x240.png" alt=""></a></div>
          <div class="one_half">
            <h3 class="heading font-x1">Visi</h3>
            <p><?=$visimisi->visi?></p>

          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
