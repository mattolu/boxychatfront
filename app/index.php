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
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                  <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$329,291</p>
                  <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">54.45%</p>
                  <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-br-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p>
                  <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-8">
            <div class="card pd-0 bd-0 shadow-base">
              <div class="pd-x-30 pd-t-30 pd-b-15">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Network Performance</h6>
                    <p class="mg-b-0">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                  </div>
                  <div class="tx-13">
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-purple mg-r-10"></span> TCP Reset Packets</p>
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-pink mg-r-10"></span> TCP FIN Packets</p>
                  </div>
                </div><!-- d-flex -->
              </div>
              <div class="pd-x-15 pd-b-15">
                <div id="ch1" class="br-chartist br-chartist-2 ht-200 ht-sm-300"></div>
              </div>
            </div><!-- card -->


          </div><!-- col-9 -->
          <div class="col-4">


            <div class="card bd-0 shadow-base pd-30">
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Server Status</h6>
              <p class="mg-b-25">Summary of the status of your server.</p>

              <label class="tx-12 tx-gray-600 mg-b-10">CPU Usage (40.05 - 32 cpus)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Memory Usage (32.2%)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-teal wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Disk Usage (82.2%)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-danger wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Databases (63/100)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Domains (30/50)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-info wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Email Account (13/50)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-purple wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <div class="mg-t-20 tx-13">
                <a href="" class="tx-gray-600 hover-info">Generate Report</a>
                <a href="" class="tx-gray-600 hover-info bd-l mg-l-10 pd-l-10">Print Report</a>
              </div>
            </div><!-- card -->

          </div><!-- col-3 -->
        </div><!-- row -->

      </div><!-- br-pagebody -->

	  <?php include ("footer.php"); ?>