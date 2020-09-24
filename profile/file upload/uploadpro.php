<?php session_start();
// Include the database configuration file  
require_once 'dbConfig.php'; 
 $user=$_SESSION['sess_user'];
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("update clientdetails set profile='$imgContent' where email='$user'"); 
             
            if($insert){ 
                $status = 'success'; 
                echo "<script type='text/javascript'>
alert('File uploaded successfully');window.location='../index.php';</script>";

            }else{ 
                echo "<script type='text/javascript'>
alert('Failed to upload,Please try again');window.location='../index.php';</script>";
  }
        }else{ 
            
echo "<script type='text/javascript'>
alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.');window.location='../index.php';</script>";
 }
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
}
 
// Display status message 
echo $statusMsg; 
?>
