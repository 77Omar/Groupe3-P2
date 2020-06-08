<?php 
function Avatar(){
    if(isset($_FILES['file'])){
        $name_file=$_FILES['file']['name'];
        $tmp_name=$_FILES['file']['tmp_name'];
        $local_image= "images/";
        move_uploaded_file($tmp_name,$local_image.$name_file);
    }
   
}

