
          function get_user_table(){
          console.log("id ayi hai");
           
           $.ajax({
              type: "POST",
              url: "table.php",
              data: { "all_data": "true"},
              success: function(data){
                $("#giggle").html(data);
              }
              

           });

        }

        function get_user_table_with_num(){
          console.log("id ayi hai");
           
           $.ajax({
              type: "POST",
              url: "table.php",
              data: { "all_data_with_num": "true"},
              success: function(data){
                $("#google").html(data);
              }
              

           });

        }

        function get_names_table(){
          console.log("name wala table");
           
           $.ajax({
              type: "POST",
              url: "table.php",
              data: { "name_table": "true"},
              success: function(data){
                $("#giggle1").html(data);
              }
              

           });

        }

        

