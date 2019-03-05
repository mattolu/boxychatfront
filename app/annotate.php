<?php
if(!isset($_COOKIE['token'])){
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>CloudSea: Cloud-Driven Semantic Annotation</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/codemirror/codemirror.css" rel="stylesheet">
    <link href="../lib/codemirror/theme/eclipse.css" rel="stylesheet">
    <link href="../lib/codemirror/theme/dracula.css" rel="stylesheet">
    <link href="../lib/codemirror/theme/base16-light.css" rel="stylesheet">
    <link href="../lib/codemirror/theme/lesser-dark.css" rel="stylesheet">
    <link href="../lib/codemirror/addon/scroll/simplescrollbars.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
  </head>

  <body>

<?php include ("navigation.php"); ?>

<?php include ("head_panel.php"); ?>

<?php include ("right_panel.php"); ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Annotate</h4>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">

          <div class="row mg-t-10">
            <div class="col-lg">
              <p class="mg-b-20 tx-gray-600">Enter URL(s) for annotation data generation (JSON format)</p>
              <form id = "postAnnotateData">
              <textarea rows="15" required id="urls" class="form-control" placeholder="Enter URL(s) here..." ></textarea><br>
              <input class="btn btn-info" type="submit" name="submit" >
              </form>

            </div><!-- col -->
          </div><!-- row -->

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->

       <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Annotation Processor</h4>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper" id ="table">

          <table class="table table-bordered table-colored table-dark table-hover table-striped">
          
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

      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">&copy; <?php echo date("Y"); ?>. CloudSea. All Rights Reserved.</div>
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
    <script src="../lib/codemirror/codemirror.js"></script>
    <script src="../lib/codemirror/mode/javascript/javascript.js"></script>
    <script src="../lib/codemirror/addon/scroll/simplescrollbars.js"></script>
    

    <script src="../js/bracket.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script>

      document.getElementById('postAnnotateData').addEventListener('submit', postAnnotateData);

        function postAnnotateData(event){
          event.preventDefault();

          let urls = document.getElementById('urls').value;
         

          fetch('http://localhost:8000/annotate', {
              method: 'POST',
              credentials: 'include',
              headers: { 
                  "Content-Type": "application/json; charset=utf-8",
                  "Authorization": 'Bearer ' + Cookies.get('token'),
               },
              body:JSON.stringify({urls:urls})
          })
          .then((res) => res.json())
          .then((data) => {
            if (data.result.status==200){
          
              // var processed =data.result.data;
              alert (data.result.message);
              window.location = '../app/annotations.php';

              // var table = new Tabulator("#table", {
              //       height:"50%", // set height of table (in CSS or here), this enables the Virtual DOM and improves render speed dramatically (can be any valid css height value)
                  
              //       data:processed, //assign data to table
              //       layout:"fitColumns", //fit columns to width of table (optional)
              //       autoResize:false, // prevent auto resizing of table
              //       pagination:"local",
              //       paginationSize:10,
              //       paginationSizeSelector:[5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
              //       columns:[ //Define Table 
                
              //         {title:"URL", field:"url", align:"center"},
              //         {title:"Status", field:"status", align:"center"},
              //         {title:"File name", field:"filename", align:"center"},
              //         {title:"Date", field:"username", align:"center"},
                     
              //       ],
                  
              //     });
              
            }else{
              alert(data.result.message);
            }
            })

          .catch((err)=>alert(err))
    }
  
</script>


  </body>
</html>
