<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


</style>
</head>
<body>

<h2>PASSWORD Recovery Page</h2>

<form action="/action_page.php" method="post">
 

  <div class="container">
    <label for="uname"><b>E-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="uname" required>

   
        
    <button type="submit">Submit</button>
</form>

</body>
</html>
