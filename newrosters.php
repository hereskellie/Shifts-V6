<!--

* newrosters.php

* New Roster Submission interface 

*

* Version information e.g. Version 6

*

* Date e.g. 19/04/2016

* @author Kellie Hughes, X12388761

*

*/

-->

<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">

    <title>Shifts</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Link to CSS -->
    <link href="softwareproject.css" rel="stylesheet">

    <script src="ie-emulation-modes-warning.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.2.1/firebase.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>

  <div id='cssmenu'>
<ul>
   <li class='active'><a href='roster0702.php'><span>Rosters</span></a></li>
   <li><a href='request.php'><span>Request</span></a></li>
   <li><a href='chat2.php'><span>Chat</span></a></li>
   <li><a href='manager.php'><span>Manager</span></a></li>
   <li><a href='register.php'><span>New User</span></a></li>
   <li><a href='newrosters.php'><span>New Roster</span></a></li>
   <li class='last'><a href='requests.php'><span>Employee Requests</span></a></li>
   <li class='pull-right' id='logout'><a href='index.php'><span>Log Out</span></a></li>
</ul>
</div>
  </head>

  <body background="dark.jpg">

    <div class="container">

      
        <center><img src="company.png" width="750" height="100"></center>
        <h2 class="form-signin-heading"><font color="white"><center>Roster for Week Ending 24/01/2016</center></font></h2>
<center><div class="tg-wrap"><table class="roster">
  <tr>
    <th class="tg-jlrw">Name</th>
    <th class="tg-yw4l">18/01</th>
    <th class="tg-yw4l">19/01</th>
    <th class="tg-yw4l">20/01</th>
    <th class="tg-yw4l">21/01</th>
    <th class="tg-yw4l">22/01</th>
    <th class="tg-yw4l">23/01</th>
    <th class="tg-yw4l">24/01</th>
    <th class="tg-yw4l">Hours</th>
  </tr>
  <tr>
    <td class="tg-baqh">Kellie Hughes</td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control" id='shiftInput'></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control" id='shiftInput'></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l">30/16</td>
  </tr>
  <tr>
    <td class="tg-baqh">Aidan Durnin</td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l">32/30</td>
  </tr>
  <tr>
    <td class="tg-baqh">Colin Regan</td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l">40/40</td>
  </tr>
  <tr>
    <td class="tg-baqh">Sean Connolly</td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l">30/24</td>
  </tr>
  <tr>
    <td class="tg-baqh">Roisin Bolger</td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l"><input type="text" placeholder="enter shift" class="form-control"></td>
    <td class="tg-yw4l">30/16</td>
  </tr>
</table>
<form action="rostersubmit.php">
<input type="submit" class="rosterclicks" value="Submit Roster">
</form>
</div></center>

  </body>
</html>