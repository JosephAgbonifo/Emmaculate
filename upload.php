<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="emc.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
<script src="https://kit.fontawesome.com/db7a93c41c.js" crossorigin="anonymous"></script>

  </head>
  <body>
<?php
    include 'head.php';
function compressImage($source, $destination, $quality) { 
    // Get image info 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // Create a new image from file 
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // Save image 
    imagejpeg($image, $destination, $quality); 
     
    // Return compressed image 
    return $destination; 
}
function convert_filesize($bytes, $decimals = 2) { 
    $size = array('B','KB','MB','GB','TB','PB','EB','ZB','YB'); 
    $factor = floor((strlen($bytes) - 1) / 3); 
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor]; 
}



    if($_SERVER['REQUEST_METHOD']=="POST"){
  include 'connect.php';
      $namee=$_POST['fullname'];
      $name=strtoupper($namee);
      $class=$_POST['class'];
      $sex=$_POST['sex'];
      $email=$_POST['email'];
      $p_no=$_POST['pphone'];
      $p_n=$_POST['parent'];
      $addr=$_POST['address'];
      $dob=$_POST['dob']; 
$img=$_POST['img']; 
// string of specified length
function random_strings($length_of_string)
{

    // String of all alphanumeric character
    $str_result = '0123456789abcdefghijklmnopqrstuvwxyz';

    // Shuffle the $str_result and returns substring
    // of specified length
    return substr(str_shuffle($str_result), 
                       0, $length_of_string);
};
 $pin=random_strings(6);
      $target_dir = "uploads/";
      $na=[];
      $cl=[];
include 'getsession.php';
      if($class=="JSS1" or $class=="JSS2" or $class=="JSS3")
      {$sect="JSS";}
      else {$sect="SSS";};
      $year=date("y");
      $sql = "SELECT id, fullname, class FROM students ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while( $rows = mysqli_fetch_assoc($result)) {
    array_push($na,$rows["fullname"]);
    array_push($cl,$rows["class"]);

  }  
}
else {
echo "Error updating record: " . mysqli_error($conn);
}
      if(in_array($name,$na)){
        echo "<div class='alert alert-danger'>•REGISTRATION BLOCKED BY BY SYSTEM</br>
        <strong>ERROR : </strong>student's record already exist<div>";}
      else {
	echo 'stage 2';
$code=mysqli_num_rows($result)+1;
      $coded=sprintf("%04d", $code);
      $reg_num="EMC/". $year. "/". $coded;
      echo $reg_num. "<br />"; 
   include 'getsession.php';
      $reggnumm=$reg_num.'/'.$gsess.'/'.$gterm;
      
      $uploadPath = "uploads/"; 
 
$statusMsg = ''; 
$status = 'danger'; 
    // Check whether user inputs are empty 
    if(!empty($_FILES["image"]["name"])) { 
        // File info 
      if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        die("File upload error: {$_FILES['image']['error']}");
      }
        $fileName = basename($_FILES["image"]["name"]); 
        $imageUploadPath = $uploadPath . $fileName; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source and size 
            $imageTemp = $_FILES["image"]["tmp_name"]; 
            $imageSize = convert_filesize($_FILES["image"]["size"]); 
             
            // Compress size and upload image 
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 35); 
             
            if($compressedImage){ 
                $compressedImageSize = filesize($compressedImage); 
                $compressedImageSize = convert_filesize($compressedImageSize); 
                 
                $status = 'success'; 
                $statusMsg = "•Image transmitted   successfully."; 
            }else{ 
                $statusMsg = "Image transmission failed!"; 
            } 
        }else{ 
            $statusMsg = '•Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = '•Please select an image file to upload.'; 
    } 

      $img=$compressedImage;
      $sql= "INSERT INTO `students` (fullname, class,pin,reg_number,sex,img,parent_no,parent_name,addr,dab)
VALUES ('$name', '$class','$pin','$reg_num','$sex','$img','$p_no','$p_n','$addr','$dob')";
if (mysqli_query($conn, $sql)) {
  echo "•New record created successfully</br>";
} else {
	echo "Error updating record: " . mysqli_error($conn);
}
       if ($gterm=3){
      $sqlll = "CREATE TABLE `$reggnumm` (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
subject VARCHAR(30) NOT NULL,
ca1 VARCHAR(30),
ca2 VARCHAR(30),
exam VARCHAR(50),
total VARCHAR(50),
st VARCHAR(50),
ft VARCHAR(50),
avg VARCHAR(50),
grade VARCHAR(50),
remark VARCHAR(50),
position VARCHAR(50)
)";}
    else {
    $sqlll = "CREATE TABLE `$reggnumm` (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
subject VARCHAR(30) NOT NULL,
ca1 VARCHAR(30),
ca2 VARCHAR(30),
exam VARCHAR(50),
total VARCHAR(50),
grade VARCHAR(50),
remark VARCHAR(50),
position VARCHAR(50)
)";
    }

if (mysqli_query($conn, $sqlll)) {
  echo "•REGISTRATION INITIATED BY SYSTEM ON ". strtoupper(date("Y-M-d---h:i:sa")) . "<br />";
   if ( $sect=="JSS")
   {  
     $subjects = array("Mathematics", "English","Agric", "Phe","Social studies",
                       "Business studies","Civic education","Basic Technology",
                       "Basic Science","CCA","Home economics","CRK/IRK","Yoruba","French","Computer science");
   }
  else{
    $subjects = array("Mathematics","English","Physics","Chemistry","Biology",
                      "Agric","Data processing","Computer","Civic Education","Financial Accounting",
                      "Commerce","CRK/IRK","Government","Literature in English","Marketing","Economics",
                      "Further Mathematics","Geography","Yoruba");
  }
  foreach($subjects as $subject)
  {
    $sql = "INSERT INTO `$reggnumm` (subject)
VALUE ('$subject')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
  echo "•". $name. " IS REGISTERED SUCESSFULLY WITH NUMBER <h1 class='text-success'>". $reg_num. "</h1>";
  }
      else {
  echo "Error creating table: " . mysqli_error($conn);
}
    }
?> 
 <?php echo $statusMsg; ?>

<?php if(!empty($compressedImage)){ ?>
    <p><b>IMAGE STATUS 1 : </b> <?php echo "•Image processing"; ?></p>
    <p><b>IMAGE STATUS 2 : </b> <?php echo "•Image processed and uploaded"; ?></p>
    <img width="200px" height="200px" src="<?php echo $compressedImage; ?>"/><br />
    <a href="register"> CONTINUE REGISTRATION</a>
<?php ;};}?> 
  </body>
</html>
