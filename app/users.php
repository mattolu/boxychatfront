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
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="br-mainpanel">
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Users</h4>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper w-85 p-3"  id = "table">
            

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->


          

<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<link href="https://unpkg.com/tabulator-tables@4.2.2/dist/css/tabulator.min.css" rel="stylesheet">
<script type="text/javascript" src="https://unpkg.com/tabulator-tables@4.2.2/dist/js/tabulator.min.js"></script>


<script>
    fetch('http://localhost:8000/members', {
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
              
              var members = data.result.members;
             
             
              var table = new Tabulator("#table", {
                    height:"50%", // set height of table (in CSS or here), this enables the Virtual DOM and improves render speed dramatically (can be any valid css height value)
                  
                    data:members, //assign data to table
                    layout:"fitColumns", //fit columns to width of table (optional)
                    autoResize:false, // prevent auto resizing of table
                    pagination:"local",
                    paginationSize:10,
                    paginationSizeSelector:[5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                    columns:[ //Define Table Columns
                      {title:"ID", field:"id", align:"center" ,width:"50"},
                      {title:"Last Name", field:"lastname", align:"center"},
                      {title:"First Name", field:"firstname", align:"center"},
                      {title:"Username", field:"username", align:"center"},
                      {title:"Email", field:"email",  align:"center"},
                    ],
                  
                  });

            }else{
              alert(data.result.message);
            }
            })

          .catch((err)=>alert(err))

</script>




 
