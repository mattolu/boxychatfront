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

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Resources</h4>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">

          <table class="table table-bordered table-colored table-dark table-hover table-striped">
            <thead>
              <tr>
                <th class="wd-10p">ID</th>
                <th class="wd-35p">Resource</th>
                <th class="wd-35p">Owner</th>
                <th class="wd-20p">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>$320,800</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>$170,750</td>
              </tr>
            </tbody>
          </table>

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->

<?php include ("footer.php"); ?>
