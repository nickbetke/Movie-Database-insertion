
<?php 
	
    session_start();
    
    $hostname = "localhost";
    $username = "root";
    $password = "Pass@1234";
    $db = "cinema";
		  $fname = $_GET['fname'];
        $dir = $_GET['dir'];
        $year= $_GET['year'];
        $act = $_GET['act'];
        
    $connect = mysqli_connect("localhost", "root", "Pass@1234", "cinema");
    if (mysqli_connect_errno()) {
    	echo mysqli_connect_errno();
    	exit();
    }
    
    if(isset($_GET['goodboy'])){
        
        $query = "insert into cinema values(NULL, '$fname', '$dir', $year, '$act')"; 
        console.log("Amen");
        $result = mysqli_query($connect, $query);
        if($result) 
            echo'Data Inserted';
        // changed above line
        mysqli_close($connect);
    }
?>

<html>
<style>
        #k {
            background-color: floralwhite;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            border-radius: 5px;
            border: 5px solid gray;
            text-align: center;
            width: 40%;
            padding: 5px;
            
        }
        h1{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: lawngreen;
        }
        #kl {
            background-color:lemon;
            border-radius: 5px;
            border: 1px solid  gold ;
            padding: 6px;
            color:grey;
            font-weight: bold;
            /* text-decoration-style: wavy; */
        }
        .r {
            border: 2px solid rgb(223, 216, 216);
            border-radius: 5px;
            padding: 7px;
        }
    </style>
    <body>
        <h1>
            Movie 
         Database
        </h1>
        <hr size="10" color="grey">
        <center>
        <div id="k">
        <form action="index.php" method="GET"><br><br>
            <input type="text" placeholder="Name" class="r" name="fname"><br><br>
            <input type="text" placeholder="Director" class="r" name="dir"><br><br>
            <input type="text" placeholder="Year" class="r" name="year"><br><br>
            <input type="text" placeholder="Actors" class="r" name="act"><br><br>
            <input type="submit" id="kl" name="goodboy">
        </form>
        </div>
    </body>

</html>
