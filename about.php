<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body style="background:url('img/slide_3.jpg');background-repeat:no-repeat;background-size:cover;">

<div class="about-section" style="opacity:0.7">
<a href="index.php" style="display: inline-block;padding: 8px 16px;" class="previous"> Back </a>
  <h1>The Bowl</h1>
  <p style="font-family:verdana;">"Good food is the foundation of geniune happiness!"</p>
  <p>We are here to make you happy by bringing all the exquisite food to your doorstep.</p>
</div>


<div class="row">
    <div class="column">
      <div class="card">
      
      <div class="container" style="background-color:white;opacity:0.7">
        <h2>Team Members: </h2>
        <p>Aishwarya Beemanapalli</p>
        <p>Vinay Nalluri </p>
        <p>Niswitha Kurapati</p>
        <p>Sri Snigdha Kotharu</p>
		<p>Ramya Kantu</p>
		
      </div>
	</div>
  </div>

  <div class="column">
    <div class="card">
    <img src="img/good_food.jpg" alt="Jane" style="width:100%">
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container" style="background-color:white;opacity:0.7">
        <h2>Team Members: </h2>
        <p>Manasa Patange</p>
        <p>Rashmika Kattamuri</p>
        <p>Bhavyasri Tanneeru </p>
        <p>Venkata Lakshmi Sukanya Aleti</p>
		    <p>Sai Ashrith Gavini</p>
      </div>
    </div>
  </div>
</div>
<div class="footer container-fluid bg-dark text-light">
    <p class="text-center py-2 mb-0" style="background-color:white;opacity:0.6">Copyright © 2021 Designed by BruteForce. Developed by Alpha.</p>
</div>

</body>
</html>
