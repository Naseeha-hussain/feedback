<?php 
// Include the database config file 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$stem = $_SESSION['sreg'];
 
 require_once('fcon.php');
if(!empty($_POST["ssem"])){
    // Fetch state data based on the specific country 
     
               $t="SELECT sub FROM feedback WHERE stem = ".$_SESSION['sreg']."";
                    $r = mysqli_query($confaculty, $t);
   
                    if($r->num_rows > 0){ 
                        while($row = $r->fetch_assoc()){  
                              $fsub[] = $row['sub'];
     
                         } 
                    }
                     //echo var_dump($fsub);
                    
     $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && sname NOT IN (' " .implode("','" ,$fsub)."') ORDER BY sname ASC"; 
    $result = mysqli_query($confaculty, $query); 
    
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select Subject</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['sname'].'">'.$row['sname'].'</option>'; 
        } 
    }
    else
    { 
        echo '<option value="">Subject not available</option>'; 
    } 
    
}

// elseif(!empty($_POST["s_name"])){ 
//     // Fetch city data based on the specific state 
//     $query = "SELECT sfaculty FROM subject WHERE sname = ".$_POST["s_name"]." ORDER BY sfaculty ASC"; 
//     $result = mysqli_query($confaculty, $query);
       
//    
 // Generate HTML of city options list 
//     if($result->num_rows > 0){ 
//         echo '<option value="">Select faculty</option>'; 
//         while($row = $result->fetch_assoc()){  
//             echo '<option value="'.$row['sfaculty'].'">'.$row['sfaculty'].'</option>'; 
//         } 
//     }else
//     { 
//         echo '<option value="">Faculty not available</option>'; 
//     } 
// } 
?>