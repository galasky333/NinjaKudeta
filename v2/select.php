<?php  
include("koneksi.php");
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 $query = "SELECT * FROM member WHERE id = '".$_POST["employee_id"]."'";
 $result = mysqli_query($connect, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Nick | ID</label></td>  
            <td width="70%">'.$row["nick"].' ['.$row["charid"].']</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Token | Onigiri</label></td>  
            <td width="70%">'.$row["token"].' <img src="token.png" width="15px"> | '.$row["onigiri"].' <img src="onigiri.png" width="15px"></td>  
        </tr>
        <tr>  
            <td width="30%"><label>Player | Macro</label></td>  
            <td width="70%">'.$row["pchp"].' | '.$row["macro"].'</td>  
        </tr>
      
        <tr>  
            <td width="30%"><label>Contact</label></td>  
            <td width="70%"><img src="discord.png" width="15px">'.$row["discord"].' | <img src="wa.png" width="15px"> '.$row["nowa"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Final Day</label></td>  
            <td width="70%">'.$row["finalday"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Warn</label></td>  
            <td width="70%">'.$row["warn"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>