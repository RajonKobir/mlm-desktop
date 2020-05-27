<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>






<?php
include('php-includes/connect.php');



$start_date = strtotime('2019-10-14'); 
echo date('d M, Y D', $start_date);
echo '<br>';
$end_date = strtotime(date('Y-m-d')); 
echo date('d M, Y D', $end_date);
echo '<br>';
$date = strtotime("+7 day", strtotime('2019-10-14'));
echo date('d M, Y D', $date);
echo '<br>';
$test = '2020-03-01';
$weekNoNextMonday = strtotime('next monday', strtotime(date('Y-m-d')));
echo  $weekNoNextMonday;
// echo date('D', $weekNoNextMonday);
echo '<br>';
$weekNoNextMonday2 = strtotime(date('Y-m-d'));
echo  $weekNoNextMonday2;
echo '<br>';

$pre_monday = strtotime('previous monday', strtotime(date('Y-m-d')));
echo date('Y-m-d', $pre_monday);

// echo ($weekNoNextMonday - $weekNoNextMonday2);

// $current_date = strtotime(date('Y-m-d')); 
// $current_date_day = date('D', $current_date);
// echo date('Y-m-d');

// $current_date = strtotime(date('Y-m-d'));
// echo date('D', $current_date);



// while(){

// }




// include('php-includes/connect.php');



// Declare two dates 
// $start_date = strtotime("2018-06-08"); 
// $end_date = strtotime("2018-09-19"); 
  
// // Get the difference and divide into  
// // total no. seconds 60/60/24 to get  
// // number of days 
// echo ($end_date - $start_date)/60/60/24; 


// // $query = "SELECT * FROM tree WHERE bill_out_date BETWEEN CAST('2020-02-01' AS DATE) AND CAST('2020-03-13' AS DATE)";
// $query = "SELECT * FROM tree WHERE 
// (l1 >= CAST('2020-02-01' AS DATE) AND l1 <= CAST('2020-03-13' AS DATE))
// OR (l2 >= CAST('2020-02-01' AS DATE) AND l2 <= CAST('2020-03-13' AS DATE))
// OR (l3 >= CAST('2020-02-01' AS DATE) AND l3 <= CAST('2020-03-13' AS DATE))
// OR (l4 >= CAST('2020-02-01' AS DATE) AND l4 <= CAST('2020-03-13' AS DATE))
// ;";
// $result = $con->query($query);
// $bill_out_user_id = array();

// $data =  '<table class="table table-bordered table-striped">
// <tr>
//     <th>No.</th>
//     <th>User ID</th>
//     <th>Stage</th>
//     <th>Level</th>
//     <th>P1</th>
//     <th>P2</th>
//     <th>L1 Bill Out Date</th> 
//     <th>L2 Bill Out Date</th> 
//     <th>L3 Bill Out Date</th> 
//     <th>L4 Bill Out Date</th> 
//     <th>Total Bill</th> 
// </tr>'; 

// $number = 1000;
// while ($row = mysqli_fetch_array($result)){
//     array_push($bill_out_user_id, $row['userid']);
//     $d1=new DateTime($row['l1']);
//     $d2=new DateTime("2020-03-13");
//     $diff=$d2->diff($d1);
//     $day_difference = $diff->format("%d");
//     $bill = 0;
//     if($day_difference >= 7){
//         $bill = $bill + 1000;
//     }
//     $data .= '<tr>  
//     <td>'.$number.'</td>
//     <td>'.$row['userid'].'</td>
//     <td>'.$row['stage'].'</td>
//     <td>'.$row['level'].'</td>
//     <td>'.$row['temp_leftcount'].'</td>
//     <td>'.$row['temp_rightcount'].'</td>
//     <td>'.$row['l1'].'</td>
//     <td>'.$row['l2'].'</td>
//     <td>'.$row['l3'].'</td>
//     <td>'.$row['l4'].'</td>
//     <td>'.$bill.'</td>
// </tr>';
// $number++;
// }
// print_r($bill_out_user_id);
// echo '<br>';
// echo $bill_out_user_id[0];
// echo '<br>';
// $bill_out_user_id_count = count($row);
// echo $bill_out_user_id_count;

   
// echo '<br>';
// $d1=new DateTime("2012-07-08");
// $d2=new DateTime("2012-07-20");
// $diff=$d2->diff($d1);
// $day_difference = $diff->format("%d");
// echo $day_difference;



// $data =  '<table class="table table-bordered table-striped">
// <tr>
//     <th>No.</th>
//     <th>User ID</th>
//     <th>Stage</th>
//     <th>Level</th>
//     <th>P1</th>
//     <th>P2</th>
//     <th>L1 Bill Out Date</th> 
//     <th>L2 Bill Out Date</th> 
//     <th>L3 Bill Out Date</th> 
//     <th>L4 Bill Out Date</th> 
// </tr>';  

// for($i=0; $i<=$bill_out_user_id_count; $i++){
//     $displayquery = " SELECT * FROM `tree` WHERE userid=$bill_out_user_id[$i] "; 
//     $result2 = mysqli_query($con,$displayquery);
//     while ($row2 = mysqli_fetch_assoc($result2)) {
//         $bill = 0;
//         $query_l1 = "SELECT * FROM tree WHERE userid=$bill_out_user_id[$i] AND
// (l1 >= CAST('2020-02-01' AS DATE) AND l1 <= CAST('2020-03-13' AS DATE)  );";
// $result_l1 = $con->query($query_l1);
        
//     }
// }


// function RAJON($user_id_stage_level){
// 	global $con;
// 	$query ="select * from tree where userid='$user_id_stage_level'";
//     $result = $con->query($query);

//     if (mysqli_num_rows($result) > 0) {
//         // output data of each row
//         $row = mysqli_fetch_assoc($result);
//         $temp_leftcount = $row['temp_leftcount'];
//         $temp_rightcount = $row['temp_rightcount'];
//         $temp_level = $row['level'];
//         $temp_stage = $row['stage'];
//         // echo $temp_leftcount;
//         // echo '<br>';
//         // echo $temp_rightcount;
//         // echo '<br>';
//         // echo $temp_level;
//         // echo '<br>';
//         // echo $temp_stage;

//         if($temp_leftcount == 1 && $temp_rightcount == 1){
//             $temp_level++;
// 	$query = mysqli_query($con,"update tree set `level`='$temp_level' where userid='$user_id_stage_level'");
// 	$query = mysqli_query($con,"update tree set `bill_out_date`=curdate() where userid='$user_id_stage_level'");

//         }
//         if($temp_leftcount == 3 && $temp_rightcount == 3){
//             $temp_level++;
//     $query = mysqli_query($con,"update tree set `level`='$temp_level' where userid='$user_id_stage_level'");
//     $query = mysqli_query($con,"update tree set `bill_out_date`=curdate() where userid='$user_id_stage_level'");
//     // $query ="select * from tree where userid='$user_id_stage_level'";
//     // $result = $con->query($query);
//     // $row = mysqli_fetch_assoc($result);
//     // echo $row['level'];

//         }

//         if($temp_leftcount == 7 && $temp_rightcount == 7){
//             $temp_level++;
//     $query = mysqli_query($con,"update tree set `level`='$temp_level' where userid='$user_id_stage_level'");
//     $query = mysqli_query($con,"update tree set `bill_out_date`=curdate() where userid='$user_id_stage_level'");

//         }

//         if($temp_leftcount == 15 && $temp_rightcount == 15){
//             $temp_level = 0;
//     $query = mysqli_query($con,"update tree set `level`='$temp_level' where userid='$user_id_stage_level'");
//             $temp_stage++;
//     $query = mysqli_query($con,"update tree set `stage`='$temp_stage' where userid='$user_id_stage_level'");

//     $temp_leftcount = 0;
// $query = mysqli_query($con,"update tree set `temp_leftcount`='$temp_leftcount' where userid='$user_id_stage_level'");
//     $temp_rightcount = 0;
// $query = mysqli_query($con,"update tree set `temp_rightcount`='$temp_rightcount' where userid='$user_id_stage_level'");
// $query = mysqli_query($con,"update tree set `bill_out_date`=curdate() where userid='$user_id_stage_level'");

//         }

//  }


//     $con->close();
// }

// RAJON('user1');

?>



<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>