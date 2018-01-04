<head>
	<title>Test</title>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script>
</head>
<div>
	<h1 id="coba">JUDUL</h1>
	<h1 id="coba"><a href="<?=base_url();?>Monitor/logout">tombol</a> logoutmu</h1>
	<canvas id="map" height="450" width="750" style="border-style:solid; border-width: 1px; margin-left: 320px;"></canvas>
</div>
<script type="text/javascript">

window.onload = function () {
	// body...


	function box() {
	
	
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
	var st=0;
	var pos1=[0,1,2];
	var pos2=[2,2,2];
	var b=[1,1,1];
	var c=[0,1,2];
	var z=[2,1];
	

	
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

	st=1;
	for (var u = 0; u <=1 ; u++) {
				
	}	
	

	for (var a = 0; a <=2; a++) {
		for (var i = 0; i<=6; i++) {	
		if (st==1) {
			if(a==b && i==c){
				ctx.fillStyle="#ff0000";	
			}
			else {
			ctx.fillStyle="#ffffff";	
			}				
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

	box();
	function pool(){
		$.post("<?php echo base_url('Getinfo/status');?>",function(data){
		// var myData =JSON.parse(this.data);
		console.log(data);
		setTimeout(pool,2000);
		});	
	}
	pool();
}
	
	/*pertama buat koneksi
	 - buat file php
	 - dua isi variable
	 - console log*/
	
</script>