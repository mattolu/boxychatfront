<?php
if(!isset($_COOKIE['token'])){
  header("location:login.php");
}

?>

<?php include ("header.php"); ?>
<body>

<?php include ("navigation.php"); ?>

<?php include ("head_panel.php"); ?>

<?php include ("right_panel.php"); ?>

<?php

$processed = json_decode($_GET['processed'], true);



?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Annotation Processor</h4>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">

          <table class="table table-bordered table-colored table-dark table-hover table-striped">
            <thead>
              <tr>
                <th class="wd-10p">URL</th>
                  <th class="wd-20p">Status</th>
                  <th class="wd-35p">File name</th>
                  <th class="wd-35p">Date</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($processed as $item){ ?>
              <tr>
                <th scope="row"><?php echo $item['url']?></th>
                <td><?php echo $item['status']?></td>
                <td><?php echo $item['filename']?></td>
                <td><?php echo $item['date'] ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->

<?php include ("footer.php"); ?>