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
<body>

<div class="about-section">
  <h1>The Bowl</h1>
  <p style="font-family:verdana">"Good food is the foundation of geniune happiness!"</p>
  <p>We are here to make you happy by bringing all the exquisite food to your doorstep.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
    <div class="column">
      <div class="card">
      
      <div class="container">
        <h2>Team Members: </h2>
        <p>Aishwarya Beemanapalli</p>
        <p>Vinay Nalluri </p>
        <p>Niswitha Kurapati</p>
        <p>Sri Snigdha Kotharu</p>
		<p>Ramya Kantu</p>
		
      </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/good_food.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Alpha</h2>
        <p class="title">The bowl</p>
        <p>We believe in providing the authentic and delightful experience of delicious food. </p>
        <p></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
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

</body>
</html>
