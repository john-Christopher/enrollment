<!DOCTYPE html>
<html>
<head>
	<title>Online Registration</title>
</head>
<style type="text/css">
	body{
	font-family: Arial, serif;
	background-color: rgba(100, 100,100,0.3);
}
.side-nav{
	height: 100%;
	width: 0;
	position: fixed;
	top: 0;
	left: 0;
	background-color: #111;
	overflow-x: hidden;
	padding-top: 60px;
	transition: 0.5s;
}
.side-nav a{
	padding: 10px 10px 10px 30px;
	text-decoration: none;
	font-size: 17px;
	color: #ccc;
	display: block;
	transition: 0.3s; 
}
.side-nav .file:hover{
	background-color: rgb(0,0,0);
}

.side-nav .btn-close{
	position: absolute;
	top: 0 !important;
	right: 22px;
	font-size: 36px;
	margin-left: 50px;
}
iframe{
	transition: margin-left 0.5s;
	overflow: auto;
	width: 100%;
	height: 610px;
	border: none;
}
#drop-down{
	display: none;
	text-decoration: none;
}
#drop-down li{
	text-decoration: none;
	list-style: none;
}
#drop-down li:hover{
	background-color: rgb(0,0,0);
}
#events{
	display: none;
}
#events li{
	text-decoration: none;
	list-style: none;
}
#events li:hover{
	background-color: rgb(0,0,0);
}
</style>
<body>
	<nav class="navbar">
		<span class="open-side">
			<a href="#" onclick="openSide()">
				<svg width="30" height="30">
					<path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
					<path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
					<path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
				</svg>
			</a>
		</span>
	</nav>
	<div class="side-nav" id="side-menu">
		<a href="#" class="btn-close" onclick="closeSide(),closeDrop(),eventClose()">&times;</a>
		<a href="home.php" class="file" target="main-frame" onclick="closeSide(),closeDrop()">Home</a>
<!-- 		<a href="profile.php" class="file" target="main-frame" onclick="closeSide(),closeDrop()">Profile</a> -->
		<a href="#" class="file" onclick="eventDrop()" ondblclick="eventClose()">Events/Announcements</a>
		<ul id="events">
			<li>
				<!-- <a href="#" target="main-frame" onclick="eventClose(), closeSide()">January</a>
			</li> -->
			<li>
				<a href="feb.php" target="main-frame" onclick="eventClose(), closeSide()">February</a>
			</li>
			<!-- <li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">March</a>
			</li>
			<li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">April</a>
			</li>
			<li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">May</a>
			</li>
			<li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">June</a>
			</li>
			<li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">July</a>
			</li>
			<li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">August</a>
			</li>
			<li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">September</a>
			</li>
			<li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">October</a>
			</li>
			<li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">November</a>
			</li>
			<li>
				<a href="#" target="main-frame" onclick="eventClose(), closeSide()">December</a>
			</li> -->
		</ul>
		<a href="#" class="file" onclick="drop()" ondblclick="closeDrop()">Registration</a>
		<ul id="drop-down">
			<li>
				<a href="jhsForm.php" target="main-frame" onclick="closeSide(),closeDrop()">Junior High School (Regular)</a>
			</li>
			<li>
				<a href="shsForm.php" target="main-frame" onclick="closeSide(),closeDrop()">Senior High School (Regular)</a>
			</li>
			<li>
				<a href="balikAral.php" target="main-frame" onclick="closeSide(),closeDrop()">Balik-Aral</a>
			</li>
		</ul> 
		<a href="login.php" class="file" onclick="">Logout</a>
	</div>
	<div id="main" align="center">
		<iframe src="home.php" id="main-frame" title="main-frame" name="main-frame"></iframe>
	</div>

	<script>
		function openSide(){
			document.getElementById('side-menu').style.width= '250px';
			document.getElementById('main').style.marginleft= '250px';
		}
		function closeSide(){
			document.getElementById('side-menu').style.width='0';
			document.getElementById('main').style.marginleft='0';
		}
		function drop(){
			document.getElementById('drop-down').style.display='block';
		}
		function closeDrop(){
			document.getElementById('drop-down').style.display='none';
		}
		function eventDrop(){
			document.getElementById('events').style.display='block';
		}
		function eventClose(){
			document.getElementById('events').style.display='none';
		}
	</script>
</body>
</html>