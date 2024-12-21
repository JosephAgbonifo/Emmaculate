<html>
 <title>
 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <head>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
  <script src="https://kit.fontawesome.com/db7a93c41c.js" crossorigin="anonymous"></script>
  <style>
  body{
      background-image:url('regback.png');
          display:flex;
              align-items:center;
                  justify-content:center;
                  }
                  #main{
                  font-family:Montserrat;
                      display:block;
                          background-color:white;
                              width:70%;
                                  height:60%;
                                      overflow-y:scroll;
                                          border-radius:10px;
                                              margin:auto;
                                                  padding:10%;
                                                  }
                                                                      .but, .bot{
                                                                          display:block;
                                                                              border:1px solid navy;
                                                                                  background-color: skyblue;
                                                                                      color: navy;
                                                                                          height:50px;
                                                                                          font-weight:999;
                                                                                              width:80%;
                                                                                                  border-radius:2px;
                                                                                                      margin:10%;

                                                                                                      }
  .profile-picture {
    opacity: 0.75;
      height: 250px;
        width: 250px;
          position: relative;
            overflow: hidden;
            
              /* default image */
                background: url('https://qph.cf2.quoracdn.net/main-qimg-f32f85d21d59a5540948c3bfbce52e68');
                
                  background-position: center;
                    background-repeat: no-repeat;
                      background-size: cover;
                        box-shadow: 0 8px 6px -6px black;
                        }
  .file-uploader {
    /* make it invisible */
      opacity: 0;
        /* make it take the full height and width of the parent container */
          height: 100%;
            width: 100%;
              cursor: pointer;
                /* make it absolute */
                  position: absolute;
                    top: 0%;
                      left: 0%;
                      }
  .upload-icon {
    position: absolute;
      top: 45%;
        left: 50%;
          transform: translate(-50%, -50%);
            /* initial icon state */
              opacity: 0;
                transition: opacity 0.3s ease;
                  color: #ccc;
                    -webkit-text-stroke-width: 2px;
                      -webkit-text-stroke-color: #bbb;
                      }
  /* toggle icon state */
  .profile-picture:hover .upload-icon {
    opacity: 1;
    } 
  </style>
 <?php 
     ?>
   <style>
   input{
   background-color:white;
   color:navy;
   padding:5px;
   }
  </style>
 </head>
 <body>
   <?php
?>
   <div id="main">
       <?php
 include 'auth.php';
   if($auth==0)
   {
     echo "YOU ARE NOT AUTHORISED TO PERFORM THIS ACTION";
   }
   else
   {
   ?>
   
     
    <form method="POST" enctype="multipart/form-data" class="mt-5" action="upload.php">
      <h3 style="font-family:lora;">STUDENT'S REGISTRATION</h3>
      <span>FULL NAME :</span><br />
    <input type="text"  name="fullname" class="bot" style="outline:none;">
   <span>Email:</span><br />
    <input type="text"  name="email" class="bot" style="outline:none;">

    <span >CLASS :</span><br />
    <select type="text" name="class" class="but" style="outline:none;padding:20px;">
     <option value=""></option> 
    <option value="JSS1">JSS1</option>
    <option value="JSS2">JSS2</option>
    <option value="JSS3">JSS3</option>
    <option value="SSS1">SSS1</option>
    <option value="SSS2">SSS2</option>
    <option value="SSS3">SSS3</option>
    </select>
      <span>PARENT OR GUARDIAN'S NAME :</span><br />
    <input type="text" name="parent" class="bot" style="outline:none;">
 
        <span>SEX :</span><br/>
        <select name="sex" class="but" style="outline:none;padding:20px;">
          <option value=""></option>
          <option value="Male">MALE</option>
          <option value="Female">FEMALE</option>
        </select>
      <span >PARENT'S NUMBER :</span><br />
    <input type="number" name="pphone" class="bot" style="outline:none;">
      <span>ADDRESS :</span><br/>
    <input type="text" name="address" class="but" style="outline:none;" >
      <span >DOB :</span><br />
    <input type="date" name="dob" id="dateb" class="bot" style="outline:none;">
      <span> PASSPORT :</span>
      <div class="profile-picture">
            <h1 class="upload-icon">
                    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                          </h1>
                                <input
                                        class="file-uploader"
                                                type="file" id="fileToUpload" name="image"
                                                        onchange="upload()"
                                                                accept="image/*"
                                                                      />
                                                                          </div>
  <button type="submit" name="submit" class="bot">REGISTER</button>
    </form>
   <?php
   }
     ?>
   </div>
   <script>
   function upload() {
   
     const fileUploadInput = document.querySelector('.file-uploader');
     // using index [0] to take the first file from the array
       const image = fileUploadInput.files[0];
                           const fileReader = new FileReader();

                             fileReader.readAsDataURL(image);



                             fileReader.onload = (fileReaderEvent) => {

                                 const profilePicture = document.querySelector('.profile-picture');

                                     profilePicture.style.backgroundImage = url(</span><span class="p">${</span><span class="nx">fileReaderEvent</span><span class="p">.</span><span class="nx">target</span><span class="p">.</span><span class="nx">result</span><span class="p">}</span><span class="s2">);

                                       }

                                       
     }
   </script>
   <script src='emc2.js'>
   </script>
 </body>
</html>
