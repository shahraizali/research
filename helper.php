<?php
    
    // retuen false if do not find record and true other wise
    function check_existing($name){
        $q =  "select * from name_codes where Name ='".$name."' ";
              $res =   mysql_query($q);

             $rows =  mysql_num_rows($res);

             if($rows >= 1 ){
                 return true;
             }else{
                 return false;
             }
    }
    // get code for name
    function getCode($name){
        $q =  "select * from name_codes where Name ='".$name."' ";
              $res =   mysql_query($q);

             $rows =  mysql_fetch_array($res);

             return $rows['code'];
    }
    function getName($code){
        $q =  "select Name from name_codes where code ='".$code."' ";
              $res =   mysql_query($q);

             $rows =  mysql_fetch_array($res);

             return $rows['Name'];
    }
    
    //inserting new name
    function insertNewName($name){
        // for first entry
        $q =  "select code from name_codes order by code desc";
              $res =   mysql_query($q);

             $rows =  mysql_num_rows($res);
             $data =  mysql_fetch_array($res);
            if($rows  ==  0){
                $new_code  = 1;
            }else{
               $code =  $data[0];
               $new_code = $code+1;

            }

             $new_q =  "insert into name_codes (Name , code ) values ('". strtolower($name)."' , '".$new_code."')";
               $res = mysql_query($new_q);
               
             
    }

    function error(  $error ){
       echo '<div style="padding-top :10px;" class="alert alert-danger fade in">
             <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">X</a>
             <strong>Error !  </strong>'.$error.'.</br>
                 </div> ';
}

function warning($error){
                        echo ' <div style="padding-top :10px; " class="alert alert-warning fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                        <strong>Warning!   </strong>'.$error.'.
                        </div>';
}

function success($msg){
                             echo '<div style="padding-top :10px;" class="alert alert-success fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <strong>Congratulations!</strong> '.$msg.'.
                            </div>';
}
function primary($msg){
                             echo '<div style="padding-top :10px;" class="alert alert-success fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <strong>Congratulations!</strong> '.$msg.'.
                            </div>';
}


?>