<?php

function getPatientInfo($patient_name){
    if ($patient_name=='leo'){
        $result="<?php include '../view/header.php';?>"; 
        $result="<table>"; 
        $result=$result."<th>Leo Shafer</th>";
        $result=$result."<tr><td>DOB: 04/22/2008</td></tr>";
        $result=$result."<tr><td>Height: 3 ft 9 inches</td></tr>";
        $result=$result."<tr><td>Weight: 76 lbs</td></tr>";
        $result=$result."<tr><td>Restrictions: Nut, Gluten</td></tr>";
        $result=$result."<tr><td>Last Recipe: Gluten-free recipe 1, no substitutions</td></tr>";
        $result=$result."<tr><td><a>Edit info</a></td></tr>";
        $result=$result."</table>"; 
        $result=$result."<?php include '../view/footer.php';?>";
    }
    if ($patient_name=='mark'){
        $result="<table>"; 
        $result=$result."<th>Mark Sith</th>";
        $result=$result."<tr><td>DOB: 07/01/1996</td></tr>";
        $result=$result."<tr><td>Height: 5 ft 3 inches</td></tr>";
        $result=$result."<tr><td>Weight: 116 lbs</td></tr>";
        $result=$result."<tr><td>Restrictions: Nut</td></tr>";
        $result=$result."<tr><td>Last Recipe: Original recipe 1, no substitutions</td></tr>";
        $result=$result."<tr><td><a>Edit info</a></td></tr>";
        $result=$result."</table>";    
    }
    if ($patient_name=='sara'){
        $result="<table>"; 
        $result=$result."<th>Sara Haft</th>";
        $result=$result."<tr><td>DOB: 11/14/1992></tr>";
        $result=$result."<tr><td>Height: 3 ft 9 inches</td></tr>";
        $result=$result."<tr><td>Weight: 76 lbs</td></tr>";
        $result=$result."<tr><td>Restrictions: Nut, Gluten</td></tr>";
        $result=$result."<tr><td>Last Recipe: Gluten-free recipe 1, no substitutions</td></tr>";
        $result=$result."<tr><td><a>Edit info</a></td></tr>";
        $result=$result."</table>";    
    }
    
    return $result;    
}