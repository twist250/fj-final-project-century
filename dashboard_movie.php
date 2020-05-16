
<html>
<head>
<title>
century cinemas Dashboard
</title>
<link rel="stylesheet" type="text/css" href="css/.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="datatables/jquery.dataTables.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="datatables/mytable.js"></script>
<style>
h1{
  margin-left:380px;
}
.nav{
  margin-left: 380px;
  margin-top: 80px;
}
.nav_container1{
margin-left: 150px;
}
</style>
</head>
<body>
<center>  <div class="logo">
  <a href="dashboard.php">  <img src="img/logo.png" /></a>
</div></center>
<h1>Dashboard</h1>
<div class="nav_container1">
<ul>
<li><a href="dashboard.php">Home</a></li>
<li><a href="notifications.php">Notification</a></li>
<li><a href="post.php">Post</a></li>
<li><a href="statistics.php">Statistics</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
</div>
<div class="nav">
  <br><br>
  <table class="table table-hover" id="mytable">
    <thead>
      <th>
        No.
      </th>
      <th>
        Img
      </th>
      <th>
        Name
      </th>
      <th>
      Story
      </th>
      <th>
        Screen
      </th>
      <th>
      Genre
      </th>
      <th>
      Status
      </th>
      <th>
      Schedule
      </th>
      <th>
      Price
      </th>
    </thead>
    <tbody>
      <?php
      include 'dbconfig.php';
      $query=mysql_query("SELECT * FROM movie");
      while($fetch=mysql_fetch_object($query))
      {
        ?>
        <tr>
          <td><?=$fetch->mid?></td>
          <td><?=$fetch->img?></td>
          <td><?=$fetch->name?></td>
          <td><?=$fetch->story?></td>
          <td><?=$fetch->screen?></td>
          <td><?=$fetch->genre?></td>
          <td><?=$fetch->status?></td>
          <td><?=$fetch->scheduleid?></td>
          <td><?=$fetch->priceid?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
<!--  <form method="POST">
<select name="group">
  <option disabled selected>Search by</option>
  <option value="fname">First name</option>
  <option value="lname">Last name</option>
  <option value="gender">Gender</option>
  <option value="address">Address</option>
</select>
<div class="form_input1"><input type="search" placeholder="Search here" name="seek"/><div>
<div class="form_input2"><input type="submit" value="GO" name="submit" /></div>
</form>-->
</div>
</body>
</html>
