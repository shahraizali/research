<?php
    include_once("header.php");
    include_once("helper.php");
?>

</head>
<body>
        <div class="container">
            <div class="col-md-6">
            <form method="post" >
                <h1>Get Code By Name</h1>
                <input type="text" name="name" placeholder="Enter Name" class="form-control">
                <br>
                <input type="submit" name="get_code" class="btn btn-success">
            </form>
                <div class="result">Result:
                    <div class="res">
                        <?php
                        if(isset($_POST["get_code"])){
                            if(getCode($_POST["name"]) > 0 ){
                        primary("Code For ".$_POST["name"]." is <b>".getCode($_POST["name"])."<b>");
                             }else{
                                error("Not Found");
                             }
                        }
                        
                        ?>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
            <form method="post">
                <h1>Get Name By code</h1>
                <input type="number" placeholder="Enter Code"  name="code" class="form-control">
                <br>
                <input type="submit"  name="get_name" class="btn btn-success">
            </form>
                <div class="result">Result:</div>
                <div class="res">
                        <?php
                        if(isset($_POST["get_name"])){
                            if(getName($_POST["code"])){
                                 primary($_POST["code"]." is Code for <b>".getName($_POST["code"])."<b>");
                             }else{
                                error("Not Found");
                             }
                        }
                        
                        ?>
                    </div>
            </div>
        </div>
          <!-- Page Content -->
    <script src="scripts/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="scripts/bootstrap.min.js"></script>
    </body>
</html>
