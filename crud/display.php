<?php
include "connect.php";

if(isset($_POST["displaySend"])){
    $table = '<table class="table"> 
    <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col"> Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Place</th>
      <th scope="col">Operations</th>
      </tr>
  </thead>';
$sql = "select * from `crud` ";
$result = mysqli_query($con,$sql);
$number =1;


while($row= mysqli_fetch_assoc($result)){
    $id =$row['id'];
    $name =$row['name'];
    $email =$row['email'];
    $mobile =$row['mobile'];
    $place =$row['place'];
    
    
    $table.= '<tr>
    <td scope="row">'.$number.'</td>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$mobile.'</td>
    <td>'.$place.'</td>
    <td>
<button class="btn btn-primary update-button" onclick="GetDetails('.$id.')">Update</button>
<button class="btn text-light delete-button " onclick="deleteData('.$id.')">Delete</button>
</td>
  </tr>';
  $number++;
}

}
$table.='</table>';
echo $table;
?>

