<?php
include 'middleware/auth.php';
include 'app/view-contacts.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>SpringTime</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <style>
        #footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
        .box-content{
            height: 50px;
        }
    </style>
</head>
<body>
<!-- Header -->
<?php include 'partials/header.php'?>
<!-- End Header -->
<!-- Container -->
<div id="container">
  <div class="shell">
    <!-- Small Nav -->
    <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> My Contacts </div>
    <!-- End Small Nav -->

    <br />
      <?php include 'partials/response.php' ?>
    <!-- Main -->
    <div id="main">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">

        <!-- Box -->
        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">My Contacts</h2>
            <div class="right">
              <label>search articles</label>
              <input type="text" class="field small-field" />
              <input type="submit" class="button" value="search" />
            </div>
          </div>
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <thead>
              <tr>
                  <th width="13">SN</th>
                  <th>Full Name</th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th width="110" class="ac"> Action</th>
              </tr>
              </thead>
              <tbody>

              <?php
              $i = 1;
              foreach ($contacts as $contact){
                  ?>
                  <tr>
                      <td><?=$i?></td>
                      <td><h3><a href="view.php?id=<?=$contact['id']?>"><?=$contact['name']?></a></h3></td>
                      <td><?=$contact['phone_number']?></td>
                      <td><?=$contact['email']?></td>
                      <td>
                          <a href="edit.php?id=<?=$contact['id']?>" class="ico edit">Edit</a>
                          <a href="app/delete-contact.php?id=<?=$contact['id']?>" class="ico del">Delete</a>
                      </td>
                  </tr>
                  <?php
                  $i++;
              }
              if (!count($contacts)>0){
                ?>
                  <tr>
                      <td colspan="5"><center class="ico ex">No data available in table</center></td>
                  </tr>
              <?php
              }
              ?>
              </tbody>
            </table>
            <!-- Pagging -->
            <div class="pagging">
              <div class="left">Showing 1-12 of 44</div>
              <div class="right"> <a href="#">Previous</a> <a href="#">1</a>  <a href="#">Next</a> <a href="#">View all</a> </div>
            </div>
            <!-- End Pagging -->
          </div>
          <!-- Table -->
        </div>
        <!-- End Box -->
      </div>
      <!-- End Content -->
      </div>
      <!-- Sidebar -->
      <div id="sidebar">
          <!-- Box -->
          <div class="box">
              <!-- Box Head -->
              <div class="box-head">
                  <h2>Management</h2>
              </div>
              <!-- End Box Head-->
              <div class="box-content">
                  <a href="create.php" class="add-button"><span>Add new Contact</span></a>
              </div>
          </div>
          <!-- End Box -->
      </div>
      <!-- End Sidebar -->
      <!-- End Sidebar -->
      <div class="cl">&nbsp;</div>
    </div>
    <!-- Main -->
  </div>
</div>
<!-- End Container -->
<!-- Footer -->
<?php include 'partials/footer.php'?>
<!-- End Footer -->
</body>
</html>
