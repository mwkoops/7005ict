<?php
  ini_set('display_errors','on');
  error_reporting(E_ALL);
  include_once('./Classes/PostTester.php');
  use Data\PostTester;
  $Tester = new PostTester();
  $Posts = $Tester->getPosts();
  #var_dump($Posts);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>Task 3</title>
  </head>
  <body>
      <br>
<div id="header" class="container">
    <div class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" id="navbar">
         <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Social Network<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-right" href="#">Social Network</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-right" href="#">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-right" href="#">Friends</a>
      </li>
       <li class="nav-item">
        <a class="nav-link navbar-right" href="#">Login</a>
      </li>
    </ul>
   
    </div>
<br>
    <div class="row" id="content">
      <div class="col-xs-4" style="text-align: right">
        <form id="newMessage">
          <label>Name :</label><input type="text" name="name" width="20" /><br>
          <label>Message :</label><textarea rows="4" cols="20" name="message" placeholder="Enter new message..." /></textarea><br>
        </form>
      </div>
      <div class="col-md-8">          
          <h3>Mark Koops</h3>
          <?php
            foreach ($Posts as $Post)
            {
              echo '<div class="post">';
              echo '<table width="100%" border="0">';
              echo '<td><img src="' . $Post->getImageURL() . '" border="0" /></td><td>&nbsp;</td>';
              echo '<td>' . $Post->getTimeStamp() . '<BR><BR>';
              echo $Post->getMessage();
              echo '</td>';
              echo '</table>';
              echo '</div>';
            }
          ?>
          <!--
          <div class="post">
            <table width="100%" border="0">
              <td><img src="images/MWKLogo.png" border="0" /></td><td style="width='1%'">&nbsp;</td>
              <td>Date Time<BR><BR>
                Message
              </td>
            </table>
          </div>
          <div class="post">
              <table width="100%" border="0">
                  <td>IMAGE</td><td style="width='1%'">&nbsp;</td>
                  <td>Date Time<BR><BR>
                    Message
                  </td>
                </table>
          </div>
          <div class="post">
              <table width="100%" border="0">
                  <td>IMAGE</td><td style="width='1%'">&nbsp;</td>
                  <td>Date Time<BR><BR>
                    Message
                  </td>
                </table>
          </div>
          -->
      </div>
    </div>
</div>
<br>
      </body>
</html>