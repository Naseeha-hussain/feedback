<?php 
// Include the database config file 
if(!isset($_SESSION)) 
    { 
        session_start(); 
        
           $reg=$_SESSION['sreg'];
           //$batchh=$batch;
         
    } 

     
 
 require_once('fcon.php');
 
   if(!empty($_POST["ssem"]))
  { 
    // Fetch state data based on the specific country 
    
                           if(strpos($reg,'103',5)!=false || strpos($reg,'126',5)!=false){
                                $dep="CIVIL";
                             }
                             else if(strpos($reg,'104',5)!=false){
                                $dep="CSE";
                             }
                             else if(strpos($reg,'105',5)!=false){
                                $dep="EEE";
                             }
                             
                             else if(strpos($reg,'205',5)!=false){
                                $dep="IT";
                             }
                             
                             else if(strpos($reg,'106',5)!=false){
                                $dep="ECE";
                             }
                             else if(strpos($reg,'114',5)!=false){
                                $dep="Mech";
                             }
                             else if(strpos($reg,'214',5)!=false){
                                $dep="Bio-Tech";
                             }
                             else if(strpos($reg,'219',5)!=false){
                                $dep="Petro";
                             }
                             else if(strpos($reg,'237',5)!=false){
                                $dep="Pharma";
                             }
                             
                         if(strpos($reg,'0019',2)!=false){
                                $batchh="2019-2023";
                             }
                             else if(strpos($reg,'0020',2)!=false){
                                $batchh="2020-2024";
                             }
                             else if(strpos($reg,'0021',2)!=false){
                                $batchh="2021-2025";
                             }
                             else if(strpos($reg,'0022',2)!=false){
                                $batchh="2022-2026";
                             }

                           //  if(strpos($reg,'20',4)!=false){
                           //      $batch;
                           //  }
                           
                           $n="SELECT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "'  &&  sub LIKE 'PE%' || sub LIKE 'PE2%' ";
                            $m = mysqli_query($confaculty, $n); 
                            //$c=0;
                          //    //$j="SELECT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = " .$dep. " && sub NOT LIKE 'PE%' ";
                          //    //$x = mysqli_query($confaculty, $j); 
                           
                          //     if($m->num_rows ==$j->num_rows)
                          //     { 
                          //        //     echo '<option value="">Subject not available</option>';
                          //       //     echo "<script type='text/javascript'>alert('You have submitted all the feedbacks successfully');</script>";
                          //       //$c=1;
                          // } 
                         //$r=0; 
                   //if($c==0){
                   $t="SELECT DISTINCT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "' ";
                       $r = mysqli_query($confaculty, $t);
                   
                     
                      if($r->num_rows > 0){ 
                          while($row = $r->fetch_assoc())
                          {  
                              $fsub[] = $row['sub'];
                         
                          }  
                               $f="SELECT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "'  &&  sub LIKE 'PE1%' ";
                               $d = mysqli_query($confaculty, $f);
                               $c="SELECT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "'  &&  sub LIKE 'PE2%' ";
                               $q = mysqli_query($confaculty, $c);

                           if($q->num_rows == 1 && $d->num_rows == 1) {
                              $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "' && sname NOT IN ( '" . implode( "', '" , $fsub ) . "')  && sname NOT LIKE 'PE1%' && sname NOT LIKE 'PE2%' "; 
                              //$result = mysqli_query($confaculty, $query); 
                           }
                           else if($d->num_rows == 1){
                              $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "' && sname NOT IN ( '" . implode( "', '" , $fsub ) . "')  && sname NOT LIKE 'PE1%' "; 
                              //$result = mysqli_query($confaculty, $query); 
                           }
                           else if($q->num_rows == 1){
                              $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "' && sname NOT IN ( '" . implode( "', '" , $fsub ) . "')  && sname NOT LIKE 'PE2%' "; 
                              //$result = mysqli_query($confaculty, $query); 
                           }
                           else{
                              $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "' && sname NOT IN ( '" . implode( "', '" , $fsub ) . "') "; 
                              //$result = mysqli_query($confaculty, $query); 
                           }
                           $result = mysqli_query($confaculty, $query); 
                           
                             // Generate HTML of state options list 
                            if($result->num_rows > 0){ 
                                echo '<option value="">Select Subject</option>'; 
                            while($row = $result->fetch_assoc()){  
                                 echo '<option value="'.$row['sname'].'">'.$row['sname'].'</option>'; 
                            }
                              
                           }
                           else{
                           // }
                             if($result->num_rows ==0){
                                  echo '<option value="">Subject not available</option>';
                             }
                               $f="SELECT sname FROM subject WHERE  ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "'  &&  sname LIKE 'PE%' ";
                               $d = mysqli_query($confaculty, $f);
                              
                                $g="SELECT sname FROM subject WHERE  ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "'  &&  sname LIKE 'PE1%' ";
                                $h = mysqli_query($confaculty, $g);
                              //
                             // if($_POST['ssem']>5){ 
                              if($d->num_rows > 0 && $h->num_rows > 0){
                                   $h="SELECT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "' && sub LIKE 'PE1%'";
                                   $u = mysqli_query($confaculty, $h); 
                                   $i="SELECT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "' && sub LIKE 'PE2%'";
                                   $v = mysqli_query($confaculty, $i); 
                                   if($u->num_rows == 1 && $v->num_rows == 1)
                                 { 
                                    //if($v->num_rows == 1)   
                                    echo '<option value="">Subject not available</option>';
                                    echo "<script type='text/javascript'>alert('You have submitted all the feedbacks successfully');</script>";
                                 
                                 } 
                              }
                              else if($d->num_rows > 0) {
                              $n="SELECT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "' && sub LIKE 'PE1%'";
                              $m = mysqli_query($confaculty, $n); 
                                 if($m->num_rows == 1)
                                { 
                                  echo '<option value="">Subject not available</option>';
                                  echo "<script type='text/javascript'>alert('You have submitted all the feedbacks successfully');</script>";
                                }
                             }
                           else{
                              echo '<option value="">Subject not available</option>';
                              echo "<script type='text/javascript'>alert('You have submitted all the feedbacks successfully');</script>";
                           }

                           }
                               
                              
                           
                              //  $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "' ";
                              //  $result = mysqli_query($confaculty, $query); 
                              
                        
                     //echo var_dump($fsub);
                        }
               
                else if($r->num_rows < 1){
 
                $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']."  && dept = '" .$dep. "' && batch='" .$batchh. "' ";
                $result = mysqli_query($confaculty, $query); 
    
                    // Generate HTML of state options list 
                     if($result->num_rows > 0){ 
                              echo '<option value="">Select Subject</option>'; 
                       while($row = $result->fetch_assoc()){  
                              //echo $row["sname"];
                                 echo '<option value="'.$row['sname'].'">'.$row['sname'].'</option>'; 
                        } 
                    }
                    
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

                              //  $f="SELECT sname FROM subject WHERE stem = ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "'  &&  sub LIKE 'PE%' ";
                              //  $d = mysqli_query($confaculty, $f);
                              //
                               //  $g="SELECT sname FROM subject WHERE stem = ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "'  &&  sub LIKE 'PE1%' ";
                              //  $h = mysqli_query($confaculty, $g);
                              //
                               //  $i="SELECT sname FROM subject WHERE stem = ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "'  &&  sub LIKE 'PE2%' ";
                              //  $j = mysqli_query($confaculty, $i);
                              //  if($d->num_rows>0 && $h->num_rows>0 && $j->num_rows>0){
                              //
                              //  }
                              //else if($d->num_rows>0){
                               //  
                              //  $f="SELECT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "'  &&  sub LIKE 'PE%' ";
                              //  $j = mysqli_query($confaculty, $f);
                              //  if($j->num_rows==1){
                              //    $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "' && sname NOT IN ( '" . implode( "', '" , $fsub ) . "')  && sname NOT LIKE 'PE%' "; 
                              //  }
                              // }
                              //else if($h->num_rows>0){
                              //   
                              //  $f="SELECT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "'  &&  sub LIKE 'PE1%' ";
                              //  $j = mysqli_query($confaculty, $f);
                              //  if($j->num_rows==1){
                              //    $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "' && sname NOT IN ( '" . implode( "', '" , $fsub ) . "')  && sname NOT LIKE 'PE1%' "; 
                              //  }
                              // }
                              // else if($j->num_rows>0){
                              //   
                              //  $f="SELECT sub FROM feedback WHERE stem = '" .$_SESSION['sreg']. "'  &&  sub LIKE 'PE2%' ";
                              //  $j = mysqli_query($confaculty, $f);
                              //  if($j->num_rows==1){
                              //    $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "' && sname NOT IN ( '" . implode( "', '" , $fsub ) . "')  && sname NOT LIKE 'PE2%' "; 
                              //  }
                              // }
                              // else{
                              //    $query = "SELECT DISTINCT sname FROM subject WHERE ssem = ".$_POST['ssem']." && dept = '" .$dep. "' && batch='" .$batchh. "' && sname NOT IN ( '" . implode( "', '" , $fsub ) . "') "; 
                              //    //$result = mysqli_query($confaculty, $query); 
                              // }
                              // $result = mysqli_query($confaculty, $query); 
?>
