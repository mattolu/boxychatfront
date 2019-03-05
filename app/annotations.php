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
        <h4 class="tx-gray-800 mg-b-5">Annotations</h4>
      </div>

      <div class="br-pagebody">
        <div class = "w-85 p-3" id = 'table'>

        </div><!-- br-section-wrapper:removed now-->
      </div><!-- br-pagebody -->
      <link href="https://unpkg.com/tabulator-tables@4.2.2/dist/css/tabulator.min.css" rel="stylesheet">
      <script type="text/javascript" src="https://unpkg.com/tabulator-tables@4.2.2/dist/js/tabulator.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
      <script src="../lib/jquery/jquery.js"></script>
      
      <script>
          fetch('http://localhost:8000/annotation', {
                    method: 'GET',
                    credentials: 'include',
                    headers: { 
                        "Content-Type": "application/json; charset=utf-8",
                        "Authorization": 'Bearer ' + Cookies.get('token'),
                    },
                    
                })
                .then((res) => res.json())
                .then((data) => {
                  if (data.result.status==200){
                    
                    var annotation = data.result.annotations;
                    var table = new Tabulator("#table", {
                    height:"50%", // set height of table (in CSS or here), this enables the Virtual DOM and improves render speed dramatically (can be any valid css height value)
                  
                    data:annotation, //assign data to table
                    layout:"fitColumns", //fit columns to width of table (optional)
                    autoResize:false, // prevent auto resizing of table
                    pagination:"local",
                    paginationSize:10,
                    paginationSizeSelector:[5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                    columns:[ //Define Table Columns
                      {title:"URL", field:"url", align:"center"},
                      {title:"Status", field:"status", align:"center"},
                      {title:"File name", field:"filename", align:"center"},
                      {title:"Created_at", field:"created_at",  align:"center"},
                    ],
                  
                  });
         

            }else{
              alert(data.result.message);
            }
            })

          .catch((err)=>alert(err));

          

</script>
<?php include ("footer.php"); ?>
