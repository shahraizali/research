<?php
    include_once("header.php");
    include_once("helper.php");
?>

       <!-- 
            Coded By: Rana Shahraiz Ali
            Date Started: 23-3-2017 
            Testing Phase: Tested
            Last Tested: 25-3-2017
        --> 
</head>
<body>
        <div class="container">
            <form method="post" >
                <label for="First_name">First Name</label>
                <input type="text" name="f_name" class="form-control" id="First_name" placeholder="Enter First Name" />

                <label for="middle_name">Middle Name</label>
                <input type="text" name="m_name" class="form-control" id="Middle_name" placeholder="Enter Middle Name" />
                
                <label for="last_name">Last Name</label>
                <input type="text" name="l_name" class="form-control" id="last_name" placeholder="Enter First Name" />
                <br>
                <input type="Submit" class="btn btn-success" />
            </form>  
        

       <?php
            $first_name_code = 0;
            $middle_name_code = 0;
            $last_name_code = 0;
            if(isset($_POST['f_name']) || isset($_POST['m_name']) || isset($_POST['l_name']) ){
                if(!empty($_POST['l_name'])){
                    $l_name =  $_POST['l_name'];
                    if(!check_existing($l_name) ){
                        insertNewName($l_name);
                       // echo "last inserted";
                         $last_name_code =  getCode($l_name);
                    }else{
                      $last_name_code =  getCode($l_name);
                      //echo $last_name_code;
                    }

                }

                if(!empty($_POST['m_name'])){
                     $m_name =  $_POST['m_name'];
                    if(!check_existing($m_name) ){
                        insertNewName($m_name);
                       // echo " middle inserted";
                        $middle_name_code =  getCode($m_name);
                    }else{
                      $middle_name_code =  getCode($m_name);
                      //echo $middle_name_code;
                    }
                }

                if(!empty($_POST['f_name'])){
                     $f_name =  $_POST['f_name'];
                    if(!check_existing($f_name) ){
                        insertNewName($f_name);
                        $first_name_code =  getCode($f_name);
                        //echo "first inserted";
                    }else{
                      $first_name_code =  getCode($f_name);
                      //echo  $first_name_code;
                    }
                    
                }

                // Add codes to users table
                if( empty($_POST['f_name']) && empty($_POST['m_name']) && empty($_POST['l_name']) ){
                    error("All Empty Fields");
                }else{
                $q =  "insert into users (f_name , m_name ,l_name) values ( '".$first_name_code."' , '".$middle_name_code."' , '".$last_name_code."' ); ";

                $result = mysql_query($q);


                if($result){
                    success("Record entered Successfuly");
                }
            }






            }
        
        ?>
        <br>
        <button onclick="get_user_table()" class="btn btn-default">Refresh TABLE</button>
        <h1>Users Table</h1>
        <table id="giggle" class="table table-striped">

        </table>
        <h1>Names Table</h1>
        <table id="giggle1" class="table table-striped">

        </table>
        </div>
          <!-- Page Content -->
    <script src="scripts/jquery.js"></script>
    <script type="text/javascript">
           get_user_table();
           get_names_table();
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="scripts/bootstrap.min.js"></script>
    </body>
</html>
