<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
  include 'connect.php';
      $name=$_POST['fullname'];
      $class=$_POST['class'];
      $sex=$_POST['sex'];
      $target_dir = "uploads/";
      if($class=="JSS1" or $class=="JSS2" or $class=="JSS3")
      {$sect="JSS";}
      else {$sect="SSS";};
      $year=date("y");
      $sql = "SELECT id, fullname, class FROM students ";
$result = mysqli_query($conn, $sql);
$code=mysqli_num_rows($result)+1;
      $coded=sprintf("%04d", $code);
      $reg_num="EMC/". $year. "/". $coded;
      echo $reg_num. "<br />"; 
   $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.". $check;
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
      $img='uploads/'.basename($_FILES["fileToUpload"]["name"]);
      $sql= "INSERT INTO students (fullname, class, reg_number,sex,img)
VALUES ('$name', '$class', '$reg_num','$sex',$img)";
if (mysqli_query($conn, $sql)) {
  echo "•New record created successfully</br>";
} else {
}
      $sql = "CREATE TABLE `$reg_num` (
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

if (mysqli_query($conn, $sql)) {
  echo "•REGISTRATION INITIATED BY SYSTEM". date("Y-M-d---h:i:sa") . "<br />";
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
    $sql = "INSERT INTO `$reg_num` (subject)
VALUE ('$subject')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
  echo "• ". $name. " IS REGISTERED SUCESSFULLY WITH NUMBER <h1 class='text-white'>". $reg_num. "</h1>";
  }
      else {
  echo "Error creating table: " . mysqli_error($conn);
}
    }
?> 
    		