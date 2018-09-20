<?php
 error_reporting(0); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>main</title>
     <LINK href="style.css" rel="stylesheet" type="text/css">
   <LINK href="main.css" rel="stylesheet" type="text/css">
     <LINK href="status.css" rel="stylesheet" type="text/css">
      <LINK href="info.css" rel="stylesheet" type="text/css">
</head>
<script src="main.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
  <h1>WELCOME ABOARD 
  <?php
  include('conn.php');
  if(isset($_POST)){
  $uname=$_POST['username'];
  $password=$_POST['password'];
  $adhar = $_POST['adhar'];
  $sql="select * from users where username='".$uname."'AND password='".$password."' limit 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "<h1>{$uname}<h1>";
  } else {
    echo 'NewBee';
      }
    }
   mysqli_close($conn);
?> 
</h1>
<div id="wrapper">
  <nav role="navigation" id="access">
    <a class="skip-link icon-reorder" title="Accéder au menu" href="#menu">Menu</a>
    <ul id="menu">
      <li class="active" onclick="info()"><a class="icon-home" href="#accueil" id = "info">YOUR INFORMATION</a></li><!-- whitespace
                --><li><a class="icon-group" href="#quisommesnous" id = "schemes" onclick="schemes()">AVAILABLE SCHEMES</a></li><!-- whitespace
                --><li><a id = "status" onclick="status()">STATUS OF APPLIED</a></li><!-- whitespace
                -->
                <li><a id = "change" onclick="change()">CHANGE INFO</a></li>
                <li><a id = "aboutus" onclick="aboutus()">ABOUT US</a></li><!-- whitespace -->
          </ul>
      </nav>
</div>
<div id="real">
  


  <div id = "info-div">
  <br><br><br>
    <?php
   include('conn.php');
        $sql="select * from studentinfo where adhar = $adhar";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
          echo '
  <table class="infocontainer">
 
  <tbody>
    <tr>
      <td>Adhar</td>
      <td>'; echo "$row[adhar]"; echo '</td>
    </tr>
    <tr>
      <td>Date of birth</td>
      <td>'; echo "$row[dob]"; echo '</td>
    </tr>
    <tr>
      <td>Father Occupation</td>
      <td>'; echo "$row[foccupation]"; echo '</td>
    </tr>
    <tr>
      <td>Account number </td>
      <td>'; echo "$row[acno]"; echo '</td>
    </tr>
    <tr>
      <td>Income </td>
      <td>'; echo "$row[income]"; echo '</td>
    </tr>
    <tr>
      <td>caste</td>
      <td>'; echo "$row[caste]"; echo '</td>
    </tr>
    <tr>
      <td>mail id</td>
      <td>'; echo "$row[mailid]"; echo '</td>
    </tr>
  
    
  </tbody>
</table>';

?>
    <h1>GOOD TO GO</h1>
  </div>





  <div id = "status-div">
     <?php
  
      echo '<h1><span class="blue">&lt;</span>STATUS Table<span class="blue">&gt;</span></h1>
<table class="container">
  <thead>
    <tr>
      <th><h1>Applied schemes</h1></th>
      <th><h1>date applied</h1></th>
      <th><h1>scheme id </h1></th>
      <th><h1>status</h1></th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
     
    </tr>
  </tbody>
</table>';
    ?>
    <h1>under process</h1>
  </div>


  <div id = "schemes-div">
    <button class = "btn btn-primary custom"  onclick="createscheme()">create scheme</button>

    <div id = "createscheme">

    <form action="createscheme.php" method="post" accept-charset="utf-8">

        <div class="form-group">
      <input type="text" id="full-name" placeholder="description" name = "asdescription">
      <label for="adhar">description</label>    
    </div>
      <div class="form-group">
      <input type="text" id="name" placeholder="scheme_name" name = "asname">
      <label for="asname">asname</label>    
    </div>
    <div class="button-area">
      <button class="btn btn-primary custom" type="submit">SAVE SCHEME</button>
      <br>

    </div>
   </form>
    </div>  
  </div>





  <div id="change-div">
    <h1>TELL about yourself</h1>

    <form action="details.php" method="post" accept-charset="utf-8">

    <div class="form-group">
      <input type="text" id="full-name" placeholder="adhar" name = "adhar">
      <label for="adhar">adhar</label>    
    </div>
      <div class="form-group">
      <input type="text" id="email" placeholder="email" name = "email">
      <label for="email">email</label>    
    </div>
  <div class="form-group">
      <input type="text" id="foccupation" placeholder="Father's occupation" name = "foccupation">
      <label for="foccupation">foccupation</label>    
    </div>

    <div class="form-group">
      <input type="text" id="dob" placeholder="date of birth" name = "dob">
      <label for="dob">dob</label>    
    </div>

     <div class="form-group">
      <input type="text" id="acno" placeholder="Account number" name = "acno">
      <label for="acno">acno</label>    
    </div>
      <div class="form-group">
      <input type="text" id="income" placeholder="income" name = "income">
      <label for="income"></label>    
    </div>
  <div class="form-group">
      <input type="text" id="caste" placeholder="caste" name = "caste">
      <label for="caste">caste</label>    
    </div>

    <div class="button-area">
   
      <button class="btn btn-primary custom" type="submit">SAVE YOUR DATA</button>
      <br>

    </div>
   </form>
  </div>  







  <div id = "about-div">
    <h1>lol organisations</h1>
  </div>
</div>

</body>
</html>