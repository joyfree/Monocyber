<!DOCTYPE html>
<!--
Template Name: Lalapeden
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
  <title>Monocyber</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="<?=base_url();?>assets/CSS/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="<?=base_url();?>assets/CSS/custom.css" rel="stylesheet" type="text/css" media="all">
</head>
<div>
	<h1 id="coba">JUDUL</h1>
	<h1 id="x"><a href="<?=base_url();?>Monitor/logout">tombol</a> logoutmu</h1>
	<canvas id="map" height="450" width="750" style="border-style:solid; border-width: 1px; margin-left: 320px;"></canvas>
	<p id="t"></p>
</div>	
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
          <li><a  href="<?=base_url();?>monitor/logout">Logout</a>
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

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
<canvas id="map" height="450" width="750" style="border-style:solid; border-width: 1px; margin-top: 50px; margin-left: 120px"></canvas>
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

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">MonoCyber<a href="#">Domain Name</a></p>
    <p class="fl_right">Maker Kalliskivi Team</p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?=base_url();?>assets/JS/jquery.min.js"></script>
<script src="<?=base_url();?>assets/JS/jquery.backtotop.js"></script>
<script src="<?=base_url();?>assets/JS/jquery.mobilemenu.js"></script>
<script src="<?=base_url();?>assets/JS/jquery.flexslider-min.js"></script>
</body>
>>>>>>> 8fca0f2c12604b7fb77b21d28e06acff8a84c33f
<script type="text/javascript">

window.onload = function () {
  // body...
  poolStat();
  

  }
  
      /*server pooling ambil data dari database setiap sekian detik*/
  function box(data1,data2){
  var b=data1;
  var z=data2;
  var c = document.getElementById("map");
  var ctx = c.getContext("2d");
  var x = 50;
  var y = 90;
  var w = 20;
  var h = 45;
  var xl = 60;
  var xa = 110;
  var xb1 = 111;
  var xb2 = 60;
  var xd = 205;
  var xd1 = 204;
  var xd2 = 255;
  var yd = 260;
  var yd2 = 260;

  
  ctx.moveTo(30,50);
  ctx.lineTo(720,50);
  ctx.lineWidth = 2;
  ctx.moveTo(30,375);
  ctx.lineTo(720,375);
  ctx.stroke();
  


  /*------ garis vertikal --------*/
  for (var i = 0; i <= 6; i++) {
    ctx.moveTo(xl,50);
    ctx.lineTo(xl,375);
    ctx.stroke();
    xl=xl+97; 
  }


  /*------ garis belok atas -----*/
  for (var i = 0; i <= 3; i++) {
    ctx.moveTo(xa,30);
    ctx.lineTo(xa,170);
    ctx.moveTo(xb1,170);
    ctx.lineTo(xb2,170);  
    ctx.stroke();
    xa=xa+97;
    xb1=xb1+97;
    xb2=xb2+97;
  }

  /*------- garis belok bawah-------*/
  for (var i =0; i <= 5; i++) {
    ctx.moveTo(xd,400);
    ctx.lineTo(xd,yd);
    ctx.moveTo(xd1,yd2);
    ctx.lineTo(xd2,yd2);
    ctx.stroke();
    xd1=xd1+97;
    xd2=xd2+97;
    xd=xd+97;
    if (i==3) {
      xd1=545;
      xd2=594;
      yd2=160;
      yd=160; 
    }
    else if (i==4) {
      xd1=691;
      xd2=643;
      yd2=260;
      yd=260; 
    }
    
  }
  
    /*------ kotak -------*/

  
  for (var a=0; a<=2; a++) {
    for (var i = 0; i<=6; i++) {
    if(b[0]==a && z[0]==i){ 
      ctx.fillStyle="#ff0000";    
    }
    else if(b[1]==a && z[1]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[2]==a && z[2]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[3]==a && z[3]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[4]==a && z[4]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[5]==a && z[5]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[6]==a && z[6]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[7]==a && z[7]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[8]==a && z[8]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[9]==a && z[9]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[10]==a && z[10]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[11]==a && z[11]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[12]==a && z[12]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[13]==a && z[13]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[14]==a && z[14]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[15]==a && z[15]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else if(b[16]==a && z[16]==i){  
      ctx.fillStyle="#ff0000";    
    }
    else {
        ctx.fillStyle="#ffffff";  
      }   
                  
    ctx.fillRect(x,y,w,h);
    ctx.strokeRect(x,y,w,h);
    x=x+97;
      if (a==0 && i==5) {

          h=0;
          w=0;
        }
      else if (a==0 && i==3) {
          h=0;
          w=0;
      }
      else if (a==2 && i==0) {
        h=0;
        w=0;

      }
      else if (a==1 && i==6) {
        h=0;
        w=0;

      }
      else{
        w = 20;
        h = 45;
      }
    }
    
    x=50;
    y=y+100;
  }

  
  
}
  
  function reset(){
    var c = document.getElementById("map");
    var ctx = c.getContext("2d");
    ctx.clearRect(0,0,ctx.lenght,ctx.width);
  }
  function refresh(){
    setTimeout(function(){
      location.reload();
    },4000);
    
  }
  function drawset(data1,data2){
    box(data1,data2);
    reset();
/*    setTimeout(drawset,2000);*/
  }

  function poolStat(){
    function cek(){
      $.post("<?php echo base_url('Getinfo/status');?>",function(data){
      var myData1=JSON.parse(data);
      var status = myData1.a;
      var pos1 = myData1.b;
      var pos2 = myData1.c;
      /*function getStat(value,index){
        var an = [value.status].join();
        return an;
      }*/
      function getPos1(value,index){
        var an = [value.pos1].join();
        return an;
      }
      function getPos2(value,index){
        var an = [value.pos2].join();
        return an;
      }
      /*var pool1 = status.map(getStat);
      pool1 = pool1.map(Number);*/
      var pool2 = pos1.map(getPos1);
      pool2 = pool2.map(Number);
      var pool3 = pos2.map(getPos2);
      pool3 = pool3.map(Number);
      box(pool2,pool3);
      refresh();
      console.log(b);
      console.log(z);
      setTimeout(cek,2000); 
      }); 
    }
    cek();
  }

</script>
</html>