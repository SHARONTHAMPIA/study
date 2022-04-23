<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>





* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}







/* Style the header */
header {

  font-family: BrownStd, sans-serif;
  background-color: white;
  padding: 30px;
  text-align: center;
  font-size: 7px;
  width: 100%;
  align-items: stretch;
  }

.shop,.our,.expertise{
  text-decoration: none;
  float: left;
  display: inline-block;
  width: 10%;
  padding: 0;
  margin: 0;
    color:   #A0A0A0 ;
}



.contact{
  text-decoration: none;
  /*float: ri;*/
  display: inline-block;
  width: 10%;
  padding: 0;
  margin: 0;
    color:   #A0A0A0 ;
}



.h1_image{
  /*background-color: yellow; */
  /*height: 200px;
  width: 200px;*/


  float: left;
  display: inline-block;
  width: 10%;
  padding: 5;
  margin: 0;


justify-content: center;
  /*display: block;*/
  margin-left: auto;
  margin-right: auto;
}

.hend{
  /*background-color: yellow; */
  /*height: 200px;
  width: 200px;*/


  float: right;
  display: inline-block;
  width: 10%;
  padding: 5;
  margin: 0;
}


.lastdiv{
  
  float: right;
  display: inline-block;
  width: 10%;
  padding: 5;
  margin: 0;
}
























</style>
</head>
<body>

<div class="class='img-fluid w-100'">

<header>
<h2>

<div class="firstdiv">
<a class="shop" href="">SHOP</a>
<a class="our" href="">OUR STORY </a> 
<a class="expertise" href="">EXPERTISE</a>
</div>

<img style="" class="h1_image" src="images/h1.jpg">

<div class="">
<a class="contact" href="">CONTACT</a>
<img class="hend" src="images/hend.jpg">
</div>

</h2>
</header>

</div>




<div class="container">
  <div class="row">
    <img class='img-fluid w-100' src="images/b_image.jpg" alt="" />
  </div>
</div>


<div class="para" style="text-align:center">
  <p>Our premium products got the finest quality cotton that create an exquisite lightweight<br>
textile that’s both soft and crisp – guaranteed to give you a wonderful night’s sleep</p>
  </div>
































<section>
  <nav>
    <ul>
      <li><a href="#">London</a></li>
      <li><a href="#">Paris</a></li>
      <li><a href="#">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>London</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>

