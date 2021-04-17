 <?php 
    include('inter.php');

    
    $lena = date("d/m");


    $querry ="SELECT * FROM table1 WHERE date = $lena";
   
    $row = mysqli_query($con,$querry);
 

    if(isset($_POST['search']))
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
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body >
    <form  method="POST" action="db_todo.php">
        <div id="particles-js">
            <div class="under-part">
                <div class="left-pannel" style="">
                    <h3 style="color:white;">&#x1F4DA;FunctionController</h3>
                    <hr>
                    <h2 class="animated zoomIN">Profile<h2>
                    <hr>
                    <p>MY DAY</p>
                    <hr>
                    <a style="text-decoration:none;color:black;" href="list.php"> LIST </a>
                    <hr>
                </div>

                    <div class="main">
                        <div id="upperd">
                            <div id="mod">
                                <h2 id="side">My Day</h2>            
                            </div>
                        <div id="upper">
                                <a id="clr" onclick="myFunction()" href="login.html">LOGOUT</a>
                            </div>
                        </div>
                        <div class="add">
                            <div id=write>
                                <input id="txtarea" class="md-textarea form-control" type="textarea" name="msg" placeholder="&nbsp; &#9711; &nbsp;   ADD TASK HERE">  
                            </div>
                            
                            <p><input class="animated flash" id="datepicker" type="text" name="dated"></p> 
                             
                        
                            <div id="snd">
                                <button type="submit" name="btn" value="signin">ADD TASK ➤</button>   
                    
                            </div>
                        </div>
                        <div id="scroll">
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
              $(".loader-wrapper").fadeOut(2000);
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
        format: 'DD-MM-YYYY HH:mm',
        time: true,
        minDate:moment(),
        currentDate:moment(),
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
$.ajax({
    type: "POST",
    url: 'fetch.php',
    data: {date : day,month : month,year:year,usage:1},
    success: function(response){
        if(response.trim()!=""){
            console.log(response);
            response = JSON.parse(response);
            var error = response.error ;
            var message = response.message ;
            var data = response.data;
           if(!error){
            var len = Object.keys(data).length;
            $("#scroll").empty();
            for(let i = 0 ; i<len ; i++){
                $("#scroll").append(
                    
                   '<li>'+data[i]["message"]+'</li>'
                   
                    );
            }
           }else{
               alert(message);
           }
        }else{
            console.log("Chot happens...");
        }
    }
});
        console.log(day,month,year,hour,min,sec,mili);
    });
    </script>
    </body>
</html>