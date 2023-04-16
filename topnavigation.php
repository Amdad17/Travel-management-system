<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 5px;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a,.dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover,.dropdown:hover .dropbtn {
  background-color: red;
}
li.dropdown{
	display: inline-block;
}

.dropdown-content {
  display: none;
  position:absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align:left;
}

.dropdown-content a:hover {background-color: yellow;}

.dropdown:hover .dropdown-content {
  display: block;
}



</style>
</head>
<body>
<ul>

  <li><a class="active" href="#home">Home</a></li>
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Tour Packages</a>
  <div class="dropdown-content">
  <a href="inbound.php">Inbound Packages</a>
  <a href="outbound.php">Outbound Packages</a>
  </div>
   </li>
  <li><a href="feedback.php" target="_blank">Feedback</a></li>
  <li><a href="contact.php" target="_blank">Contact us</a></li>
  
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Login</a>
  <div class="dropdown-content">
  <a href="admin.php">Login as Admin</a>
  <a href="userlogin.php">Login as User</a>
  
  </li>

</ul>



</body>
</html>