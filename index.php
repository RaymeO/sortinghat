<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sorting Hat</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row" align="center">
		<div class="row" style="background-image: url('images/form-v9.jpg')" align="center">
			
				<img src="images/wellcome.jpg" class="img-fluid">		</br></br>	
				<div class="row">	
					<div class="col-8">
					<input type="text" style="width: 40%; height:70px; font-size:20pt;" name="fullname" id="fullname" placeholder="Your Name" required>				
					</div>
				</div>		
				</br>
				<img src="images/start.png" id="start" class="img-fluid" onclick="choose()"> </br></br>
				<div class="row">
					<div class="col-4">
					<h1 style="color:red;"> นักเรียนทั้งหมด </h1>
					</div>
					<div class="col-4" id="allst">
						<h1 id="cStudent" style="color:red;">0</h1>
					</div>
					<div class="col-4">
						<h1 style="color:red;"> คน </h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<img src="images/Gryffindor.png" class="img-fluid">
						<h1 id="cGryffindor" style="color:red;">0</h1>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<img src="images/Hufflepuff.png" class="img-fluid">
						<h1 id="cHufflepuff" style="color:red;">0</h1>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<img src="images/Ravenclaw.png" class="img-fluid">
						<h1 id="cRavenclaw" style="color:red;">0</h1>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<img src="images/Slytherin.png" class="img-fluid">
						<h1 id="cSlytherin" style="color:red;">0</h1>
					</div>
				</div>
				
			
			</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
			</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
		</div>
	</div>

<script>
	function choose() {
		var house = "Gryffindor";
		var cGryffindor = parseInt(document.getElementById("cGryffindor").innerHTML);
		var cHufflepuff = parseInt(document.getElementById("cHufflepuff").innerHTML);
		var cRavenclaw = parseInt(document.getElementById("cRavenclaw").innerHTML);
		var cSlytherin = parseInt(document.getElementById("cSlytherin").innerHTML);
		var cStudent = parseInt(document.getElementById("cStudent").innerHTML);
		var total = cGryffindor+cHufflepuff+cRavenclaw+cSlytherin;
		var name = document.getElementById("fullname").value;
		
		if(name ==""){
			if(total<50)
			alert("โปรดระบุชื่อของท่านด้วย");
			else alert("ครบ 50 แล้ว\n Gryffindor : "+ cGryffindor +" คน\n Hufflepuff : "+cHufflepuff+" คน\n Ravenclaw : "+cRavenclaw+" คน\n Slytherin : "+cSlytherin+" คน");
		}else{
			var lowName = name.toLowerCase();
			var FirstChar = lowName.charAt(0);
			var alertText = "";
			switch (FirstChar) {
				case 'a': case 'b': case 'c': case 'd': case 'e': case 'f': case 'g': 
					case 'ก': case 'ข': case 'ค': case 'ฆ': case 'ง': case 'จ': case 'ฉ': case 'เ': 
						if(cGryffindor < 13) { house = "Gryffindor"; }
						else if(cHufflepuff < 13) { house = "Hufflepuff"; }
						else if(cRavenclaw < 13) { house = "Ravenclaw"; }
						else if(cSlytherin < 13) { house = "Slytherin"; }
						break;
				case 'h': case 'i': case 'j': case 'k': case 'l': case 'm': case 'n': 
					case 'ช': case 'ซ': case 'ฌ': case 'ญ': case 'ฏ': case 'ฎ': case 'ฐ': case 'ฑ': case 'ฒ': 
						case 'ณ': case 'ด': case 'ต': case 'ถ': 
						if(cHufflepuff < 13) { house = "Hufflepuff"; }													
						else if(cRavenclaw < 13) { house = "Ravenclaw"; }
						else if(cSlytherin < 13) { house = "Slytherin"; }
						else if(cGryffindor < 13) { house = "Gryffindor"; }
						break;
				case 'o': case 'p': case 'q': case 'r': case 's': case 't': case 'u': 
					case 'ท': case 'ธ': case 'น': case 'บ': case 'ป': case 'ผ': case 'ฝ': case 'พ': case 'ฟ': 
						case 'ภ': case 'ม': case 'ย': case 'ร': case 'ล': case 'ว': 
						if(cRavenclaw < 13) { house = "Ravenclaw"; }
						else if(cSlytherin < 13) { house = "Slytherin"; }
						else if(cGryffindor < 13) { house = "Gryffindor"; }
						else if(cHufflepuff < 13) { house = "Hufflepuff"; }
						break;
				default:
						if(cSlytherin < 13) { house = "Slytherin"; }
						else if(cGryffindor < 13) { house = "Gryffindor"; }
						else if(cHufflepuff < 13) { house = "Hufflepuff"; }
						else if(cRavenclaw < 13) { house = "Ravenclaw"; }
						
				}
		
			switch (house) {
				case 'Gryffindor':
					alertText = "ยินดีด้วย "+ name +" ความกล้าหาญของคุณทำให้คุณได้อยู่บ้าน Gryffindor";
					cGryffindor++;
					document.getElementById("cGryffindor").innerHTML = cGryffindor;
					break;
				case 'Hufflepuff':
					alertText = "ยินดีด้วย "+ name +" ความมุ่งมั่นและอดทนของคุณทำให้คุณได้อยู่บ้าน Hufflepuff";
					cHufflepuff++;
					document.getElementById("cHufflepuff").innerHTML = cHufflepuff;
					break;
				case 'Ravenclaw':
					alertText = "ยินดีด้วย "+ name +" ความฉลาดของคุณทำให้คุณได้อยู่บ้าน Ravenclaw";
					cRavenclaw++;
					document.getElementById("cRavenclaw").innerHTML = cRavenclaw;
					break;
				case 'Slytherin':
					alertText = "ยินดีด้วย "+ name +" เลือดบริสุทธิ์ของคุณทำให้คุณได้อยู่บ้าน Slytherin";
					cSlytherin++;
					document.getElementById("cSlytherin").innerHTML = cSlytherin;
					break;
			}
			alert(alertText);
			cStudent++;
			document.getElementById("cStudent").innerHTML = cStudent;
			document.getElementById("fullname").value = "";
			if(total+1 >= 50){
				document.getElementById("fullname").disabled = true;
				document.getElementById("start").disabled = true;
				alert("ครบ 50 แล้ว\n Gryffindor : "+ cGryffindor +" คน\n Hufflepuff : "+cHufflepuff+" คน\n Ravenclaw : "+cRavenclaw+" คน\n Slytherin : "+cSlytherin+" คน");
			}
		}
		
	}
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>