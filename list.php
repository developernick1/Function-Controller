<?php 
    include('inter.php');

     $sqll = "select * from table1";
                                    //$query_auto = "INSERT INTO tablename (col_name, col_date) VALUE ('DATE: Auto CURDATE()', CURDATE() )";

     $row = mysqli_query($con,$sqll);  
    
        if(isset($_POST))
 ?>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="shortcut icon" href="images/tick.png" sizes="1111">
                    <link rel="stylesheet" type="text/css" href="css/animate.css">
                            <meta name="viewport" content="width=device-width" initial-scale="1">
                            <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
                        <link rel="stylesheet" href="js/bootstrap.min.js">
                    <link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.js">
                <link src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet" href="./css/material_datetimepicker.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-material-datetimepicker.min.js"></script>
    <title>ToDo</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form  method="POST" action="db_todo.php">
        <div id="particles-js">
            <div class="under-part">
                <div class="left-pannel">
                    <h3>TASKMASTER</h3>
                    <hr>
                    <h2 class="animated zoomIN">Profile<h2>
                    <hr>
                    <a style="text-decoration:none;color:black;" href="todo.php"> MY DAY </a>
                    <hr>
                    <p>MY LIST</p>
                    <hr>
                </div>

                    <div class="main">
                        <div class="uptask">
                        <div class="mnbar">
                            <p>MY DAY</p>
                        </div>
                        <div class="add">
                        &nbsp&nbsp<input id="txtarea" type="textarea" name="msg" placeholder="&nbsp; &#9711; &nbsp;   ADD TASK HERE">  
                       <button type="submit" name="btn" value="signin">➤</button>         
                        </div>
                        <div id=scroll>
                         <?php while($res = mysqli_fetch_array($row)){?>
                                <ul id=ultodo>
                                    <li class=display> <?=$res['message']?></li>
                                    <li class=display> <?=$res['date']?></li>
                                </ul>
                        <?php } ?>
                        </div>
                </div>
            </div>

         </div>

         <div class="loading">
        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
          </div>   
          
          <script>
            $(window).on("load",function(){
              $(".loader-wrapper").fadeOut(3000);
            });
        </script>
            
        </form>
            <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

            <script>
                var day = moment().format("D");
                var month = moment().format("M");
                var year = moment().format("YYYY");
                var hour = moment().format("H");
                var min = moment().format("m");
                var sec = moment().format("s");
                var mili=moment().format("X");
                particlesJS.load('particles-js','particles.json');
        var picker = $('#datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD HH:mm',
        time: true,
        minDate:moment(),
        currentDate:moment()
    });
    picker.change(function(event,date){
        day = date.format("D");
        month = date.format("M");
        year = date.format("YYYY");
        hour = date.format("H");
        min = date.format("m");
        sec = date.format("s");
        mili=date.format("X");
        // TO_DO more actions.
        console.log(day,month,year,hour,min,sec,mili);
    });
    </script>
    </body>
</html>