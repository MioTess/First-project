<?php
session_start();

include 'connect.php';

if(isset($_SESSION["shalgahNer"])){
   $name =  $_SESSION["shalgahNer"];
   $names =  $_SESSION['admins'];
   $ID =  $_SESSION['id_user'];
//Admin bol
    if($names == 'admin'){
                $sql = "SELECT * FROM medee";
        $result = mysqli_query($con, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['m_id'];
                $user = $row['user_id'];
                $garcig =$row['m_title'];
                $medee = $row['m_info'];
                $status = $row['m_status'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$user.'</td>
                <td>'.$garcig.'</td>
                <td>'.$medee.'</td>
                <td>'.$status.'</td>
                <td>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" style = "color: white">Устгах</a></button>
            </td>
              </tr>';
            }
        } 
    }
//Hereglegch baiwal
    else
    {
     $sql = "SELECT user_id,  m_title, m_info FROM medee";
     $result = mysqli_query($con, $sql);
     if($result)
     {
      while($row = mysqli_fetch_assoc($result))
      {
        $idd = $row['user_id'];
        $garcigg = $row['m_title'];
        $medeee = $row['m_info'];
        echo '<tr>
        <th scope="row">'.$idd.'</th>
        <td>'.$garcigg.'</td>
        <td>'.$medeee.'</td>
        <td>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$idd.'" class="text-light" style = "color: white">Устгах</a></button>
        </td>
      </tr>';
      }
     }

    }

}
?>