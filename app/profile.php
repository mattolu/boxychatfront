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
    <div class="br-mainpanel br-profile-page">

      <div class="card shadow-base bd-0 rounded-0 widget-4">
        <div class="card-header ht-75">
          <div class="hidden-xs-down">
          </div>
          <div class="tx-24 hidden-xs-down">
          </div>
        </div><!-- card-header -->
        <div class="card-body">
          <div class="card-profile-img">
            <img src="http://via.placeholder.com/280x280" alt="">
          </div><!-- card-profile-img -->
          <h4 class="tx-normal tx-roboto tx-white">Katherine M. Pechon</h4>
          <p class="mg-b-25">Wine Connoisseur</p>

          <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">Singer, Lawyer, Achiever, Wearer of unrelated hats, Data Visualizer, Mayonaise Tester. I don't know what alt-tab does. Storyteller.</p>

          <p class="mg-b-0 tx-24">
            <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-facebook-official"></i></a>
            <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-twitter"></i></a>
            <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-pinterest"></i></a>
            <a href="" class="tx-white-8"><i class="fa fa-instagram"></i></a>
          </p>
        </div><!-- card-body -->
      </div><!-- card -->

      <div class="tab-content br-profile-body">
        <div class="tab-pane fade active show" id="posts">
          <div class="row">
            <div class="col-lg-8">
              <div class="media-list bg-white rounded shadow-base">
                <div class="media pd-20 pd-xs-30">
                  <img src="http://via.placeholder.com/280x280" alt="" class="wd-40 rounded-circle">
                  <div class="media-body mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-inverse tx-14">Louise Kate</h6>
                        <span class="tx-12 tx-gray-500">@louisekate</span>
                      </div>
                      <span class="tx-12">2 minutes ago</span>
                    </div><!-- d-flex -->
                    <p class="mg-b-20">The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>
                    <div class="media-footer">
                      <div>
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href="" class="mg-l-10"><i class="fa fa-comment"></i></a>
                        <a href="" class="mg-l-10"><i class="fa fa-retweet"></i></a>
                        <a href="" class="mg-l-10"><i class="fa fa-ellipsis-h"></i></a>
                      </div>
                    </div><!-- d-flex -->
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media pd-20 pd-xs-30">
                  <img src="http://via.placeholder.com/280x280" alt="" class="wd-40 rounded-circle">
                  <div class="media-body mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-inverse tx-14">Annie Lee</h6>
                        <span class="tx-12 tx-gray-500">@annielee</span>
                      </div>
                      <span class="tx-12">2 hours ago</span>
                    </div><!-- d-flex -->
                    <p class="mg-b-20">To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                    <div class="media-footer">
                      <div>
                        <a href=""><i class="fa fa-heart tx-danger"></i></a>
                        <a href="" class="mg-l-10"><i class="fa fa-comment"></i></a>
                        <a href="" class="mg-l-10"><i class="fa fa-retweet"></i></a>
                        <a href="" class="mg-l-10"><i class="fa fa-ellipsis-h"></i></a>
                      </div>
                    </div><!-- d-flex -->
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- card -->

            </div><!-- col-lg-8 -->
            <div class="col-lg-4 mg-t-30 mg-lg-t-0">
              <div class="card pd-20 pd-xs-30 shadow-base bd-0">
                <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Contact Information</h6>

                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Phone Number</label>
                <p class="tx-info mg-b-25">+1 234 567 8910</p>

                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Email Address</label>
                <p class="tx-inverse mg-b-25">katherine.pechon@themepixels.me</p>

                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Home Address</label>
                <p class="tx-inverse mg-b-25">1352 Science Center Drive Terreton, ID 83450 </p>

                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Office Address</label>
                <p class="tx-inverse mg-b-20">1352 Science Center Drive Terreton, ID 83450 </p>

              </div><!-- card -->

            </div><!-- col-lg-4 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">&copy; <?php echo date("Y"); ?>. CloudSea - Prototype for CloudSea MVP</div>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>

    <script src="../js/bracket.js"></script>
  </body>
</html>
