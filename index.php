<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Akhir Pweb</title>
	<style>
	*{
		box-sizing: border-box;
	}

	body{
		font-family: arial;
		padding: 10px;
		background: #f1f1f1;
	}


	.header{
		padding: 30px;
		text-align: center;
		background: lightpink;
	}

	.header1{
		font-size: 50px;
	}

	.topnav{
		overflow: hidden;
		background-color: #333;
	}

	.topnav a{
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.topnav a:hover{
		background-color: #ddd;
		color: black;
	}

	.leftcolumn{
		float: left;
		width: 75%;
	}

	.rightcolumn{
		float: left;
		width: 25%;
		background-color: #f1f1f1;
		padding-left: 20px;
	}
	.fakeimg{
		background-color: #aaa;
		width: 100%;
		padding: 20px;
	}

	.card{
		background-color: white;
		padding: 20px;
		margin-top: 20px;
	}

	.row:after{
		content: "";
		display: table;
		clear: both;
	}

	.footer{
		padding: 20px;
		text-align: center;
		background-color: #ddd;
		margin-top: 25px;
	}
	@media screen and (max-width: 800px){
		.leftcolumn, .rightcolumn{
			width: 100%;
			padding: 0;
		}
	}

	@media screen and (max-width: 400px){
		.topnav a{
			float: none;
			width: 100%;
		}
	}
</style>
</head>
<body>

<!-- membuat header pada row 1 -->
<div class="header">
	<h1>Haloo  WElCOME!!!</h1>
	<p><font face="times new roman">=====================================</font></p>
</div>

<!-- membuat menu navigasi pada row 2 -->
<div class="topnav">
		<a href="kalt.html">Kalkulator</a>
		<a href="simpan.php">Isi Form</a>
		<a href="tgl.php">Kalender</a>
</div>

<!-- membuat konten pada row 3 terbagi menjadi 2 kolom -->
<div class="row">
	<!-- Kolom sebelah kiri berisi teks artikel -->
	<div class="leftcolumn">
		<!-- Artikel ke 1 -->
		<div class="card">
			<?php 
				include("simpan.php");
			?>
		</div>
		<!-- Artikel ke 2 -->
		<div class="card">
				<h3>Haiii Dekkk!!!</h3>
			<h3>Kenalin Yak</h3>
			<div class="fakeimg" style="height: 100px;">
				<table>
					<tr>
						<td>Nama</td>
						<td> : </td>
						<td>Rizky Rashif Putra K</td>
					</tr>
					<tr>
						<td>NIM</td>
						<td> : </td>
						<td>2100018184</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td> : </td>
						<td>D</td>
					</tr>
				</table>
			</div>	
		</div>
	</div>

	<!-- kolom sebelah kanan berisi tentang ringkasan -->
	<div class="rightcolumn">
		<div class="card">
			<?php 
				include("tgl.php");
			?>
		<br><br>	
		</div>

		<div class="card">
			<?php 
					include("kalt.html");
				?>	
		</div>
	</div>
</div>

<!-- membuat footer pada row 3 -->
<div class="footer">
	<h3><?php include("ftr.html");?></h3>
</div>
</body>
</html>