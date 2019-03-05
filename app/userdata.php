<?php
if(!isset($_COOKIE['token'])){
  header("location:login.php");
}

include ("header.php");


?>
<body>

<?php include ("navigation.php"); ?>

<?php include ("head_panel.php"); ?>

<?php include ("right_panel.php"); ?>
<?php

$members = json_decode($_GET['member'], true);


?>

   <!-- ########## START: MAIN PANEL ########## -->
   <div class="br-mainpanel">
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Users</h4>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">

          <table class="table table-bordered table-colored table-dark table-hover table-striped">
            <thead>
              <tr>
                <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Username</th>
                <th class="wd-35p">Email</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($members as $item){ ?>
              <tr>
                <th scope="row"><?php echo $item['id']?></th>
                <td><?php echo $item['firstname'].' '.$item['lastname'] ?></td>
                <td><?php echo $item['username'] ?></td>
                <td><?php echo $item['email'] ?></td>
              </tr>
            <?php } ?>
             
            </tbody>
          </table>

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
  

<?php include ("footer.php"); ?>