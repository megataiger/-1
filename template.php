<?php include 'model.php';?>
<html>
<head>
<title> Test page </title>
<style>
header
{
margin: auto;
width: 40%;
border: 1px solid black;
text-align: center;
}

div
{
margin-left: 30%;
margin-right: 30%;
}

nav
{
width: 40%;
border: 1px solid black;
float: left;
}
article
{
height: 50%;
width: 59%;
border: 1px solid black;
float: left;
}

{
text-align:right;
}

.Body
{

}

</style>
</head>
<body>

<header>
<h1><a href="index1.php"> CMS </a></h1>
</header>

<div>
<nav> 
  <?php  print $menu; ?>
</nav>
<article>
 <?php  print $body; ?>
</article>
</div>

</body>
</html>
