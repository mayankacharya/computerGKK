

<html>
<head>
    
        <meta charset="utf-8" name="viewport" content="width=divice-width, intial-scale=1">
         <link rel="stylesheet" href="index.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<style  type="text/css">
   div.scrollmenu{
             background-color: #333;
             overflow: auto;
             white-space: nowrap;
}
   div.scrollmenu a{
          display: inline-block;
          color: white;
          text-align: center;
          padding: 14px;
          text-decoration: none;
}
   div.scrollmenu a:hover{
          background-color: #777;
}



 h1{

</style>
   





</head>


  
    
    <body  bgcolor="#EECFA1">
   <div class="scrollmenu">
     <a href="about.html">About</a>
     <a href="news.html">News</a>
     <a href="contact.html">Contact</a>
     <a href="home.html">Home</a>
     <a href="support.html">Support</a>
     <a href="Site.html">Site</a>
     <a href="tools.html">Tools</a>
     <a href="base.html">Base</a>
     
     <a href="more.html">More</a>
     <a href="logo.html">Logo</a>
     <a href="friends.html">Friends</a>
     
     <a href="work.html">Work</a>
     <a href="people.html">People</a>
     <a href="partener.html">Partener</a>
   </div>
       
        <center>
      <h2> !!! Technical Acharya !!!</h2>
      <br>
      



 
<?php
$servername = "localhost";
$username = "contact";
$password = "mayank153";
$dbname = "contactt";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    echo "USERNAME, PASSWORD, MESSAGE SUCCESSFULLY INSERTED";
    
   
    
}
else
{
   
    die("Connection failed because ".mysqli_connect_error());
}
?>

 <h1>Contact Form</h1><br>
<button><a href="contact.html">CONTACT</a></button>
<br>
<br>
<h1>HOME PAGE</h1><br>
<button><a href="index.html">HOME</a></button>
<div class="social-menu">
  <ul>
     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
       <li><a href="https://github.com/mayankacharya/computerGKK"><i class="fa fa-GitHub"></i></a></li>
  </ul>

</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

