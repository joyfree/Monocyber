<head>
	<title>Test</title>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script>
</head>
<div>
	<h1 id="coba">JUDUL</h1>
	<canvas id="map" height="450" width="750" style="border-style:solid; border-width: 1px; margin-left: 320px;"></canvas>
	<p id="t"></p>
</div>
<script type="text/javascript">

window.onload = function () {
	// body...
	poolStat();

	var myData;
	
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

	
	
	function box() {
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

	var b=[2,1,2];
	var z=[3,5,6];
	var st=[true,false];
	var d = true;

	
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

	box();

	/*server pooling ambil data dari database setiap sekian detik*/
	function poolStat(){
		function cek(){
			$.post("<?php echo base_url('Getinfo/status');?>",function(data){
			var myData1=JSON.parse(data);
			var status = myData1.a;
			var pos1 = myData1.b;
			var pos2 = myData1.c;
			function getStat(value,index){
				var an = [value.status].join();
				return an;
			}
			function getPos1(value,index){
				var an = [value.pos1].join();
				return an;
			}
			function getPos2(value,index){
				var an = [value.pos2].join();
				return an;
			}
			var pool1 = status.map(getStat);
			pool1 = pool1.map(Number);
			var pool2 = pos1.map(getPos1);
			pool2 = pool2.map(Number);
			var pool3 = pos2.map(getPos2);
			pool3 = pool3.map(Number);
			
			setTimeout(cek,2000);	
			});	
		}
		cek();
	}	

}
	
</script>