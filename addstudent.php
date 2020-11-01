<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<br>

<form action="addstudent.php" method="POST" enctype="multipart/form-data"/>      
      <table border="0" cellspacing="5" cellpadding="3" style="background-color:   #3e8999;border-color: black " align="center"> 
            
                   
                <tr>
                
                <td style=" color: white;"/> <b>Select Center*</b></td>
                   <td>
                       <select name="select_center">
                           <option>Select Center</option>                           
                            <option>Test1</option>                           
                            <option>tEST2</option>
                            <option>tEAST3</option>                           
                            <option>tEST4</option>
                             
                        </select>
                    </td>
                </tr>
                 
            <tbody>
                <tr>
                    <td style=" color: white">Enter Student Name*</td>
                    <td><input type=text name="sname" placeholder="Student Name"></td>
                </tr>
                <tr>
                    <td style=" color: white">Enter Father's Name*</td>
                    <td><input type=text name="fname" placeholder="Father Name"></td>
                </tr>
                <tr>
                    <td style=" color: white">Enter Mother's Name*</td>
                    <td><input type=text name="mname" placeholder="Mother Name"></td>
                </tr>

                <tr>
                    <td style=" color: white">Date of Birthday:</td>
                  <td><input type="date" id="birthday" name="birthday"></td>
                </tr>
                
                <tr>
             <td style=" color: white">Upload Profile Image:</td>
            <td> <input type="file" name="photo" required=""><font color="red">*100kb to 250kb</font></td> </tr>


              <tr>
                    <td style=" color: white"> Enter Contact Number*</td>
                    <td><input type=text name="c_numnber" placeholder="91+8584015*9"></td>
                </tr>
                <tr>
                    <td style=" color: white"> Enter Email address</td>
                    <td><input type=email name="email" style="width: 360px"/>*</td>
                </tr>
                           
                
                <tr>
                    <td style=" color: white"> <p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label></td>



                <tr>
                    <td style=" color: white"> <p>Marital Status:</p>
  <input type="radio" name="m_status" value="Married">
  <label for="Married">Married</label><br>
  <input type="radio" name="m_status" value="Single">
  <label for="Single">Single</label>
  <hr>
  

   <tr>
                    <td style=" color: white">Select Year</td>
                   <td>
                       <select name="select_year">
                           <option>Select Year</option>                              
                            <option>2018</option>                           
                            <option>2019</option>                           
                            <option>2020</option>  
                            
                        </select>
                   </td>
                </tr>
            <td>  
              

                 <tr>
                    <td style=" color: white">Select Course Duration</td>
                   <td>
                       <select name="cduration">
                           <option>Course Duration</option>                              
                            <option>2018</option>                           
                            <option>2019</option>                           
                            <option>2020</option>  
                            
                        </select>
                   </td>
                </tr>
                <tr>
                    <td style=" color: white">Select Course</td>
                   <td>
                       <select name="Course">
                           <option>Select Course</option>                              
                            <option>2018</option>                           
                            <option>2019</option>                           
                            <option>2020</option>  
                            
                        </select>
                   </td>
                </tr>
                 <td style=" color: white">Enter State</td>
                   <td>
                       <select name="state">
                           <option>West Bengal</option>                              
                            <option>Andra Pradesh</option>                           
                            <option>Sikkim</option>                           
                            <option>Hariyana</option>  
                            
                        </select>
                   </td>
                </tr>
               
                <tr>
                    <td style=" color: white"> Enter PinCode*</td>
                    <td><input type=text name="pincode" style="width: 180px"/></td>
                </tr>

                <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
        </tr>
        </td>
        
        </form>
        <?php
 
 require_once('dbcon.php');


 if (isset($_POST['submit'])){

    $select_center= $_POST['select_center'];
    $select_center= mysqli_real_escape_string($con,$select_center);
    $select_center=htmlentities($select_center);
    $sname= $_POST['sname'];
    $sname= mysqli_real_escape_string($con,$sname);
    $sname= htmlentities($sname);
    $fname= $_POST['fname'];
    $fname= mysqli_real_escape_string($con,$fname);
    $fname= htmlentities($fname);
    $mname= $_POST['mname'];
    $mname= mysqli_real_escape_string($con,$mname);
    $mname= htmlentities($mname);
    $birthday= $_POST['birthday'];
    $image = $_FILES['photo']['name'];
    $image_size = $_FILES['photo']['size'];
    $tempname = $_FILES['photo']['tmp_name'];
    $type = $_FILES['photo']['type'];

    if($type=="image/jpeg" || $type=="image/png" || $type=="image/jpg")
    {
        if($image_size <=250000)
            move_uploaded_file($tempname,"upload-images/". $image);
    }
    $c_numnber= $_POST['c_numnber'];
    $c_numnber= mysqli_real_escape_string($con,$c_numnber);
    $c_numnber= htmlentities($c_numnber);
    $email= $_POST['email'];
    $email= mysqli_real_escape_string($con,$email);
    $email= htmlentities($email);
    $gender= $_POST['gender'];
    $m_status= $_POST['m_status'];
    $select_year=$_POST['select_year'];
    $cduration=$_POST['cduration'];
    $course=$_POST['Course'];
    $state=$_POST['state'];
    $pincode= $_POST['pincode'];
    $pincode= mysqli_real_escape_string($con,$pincode);
    $pincode= htmlentities($pincode);
  




    $query= "INSERT INTO `tb1`(`id`, `select_center`, `sname`, `fname`, `mname`, `birthday`, `photo`, `c_numnber`, `email`, `gender`, `m_status`, `select_year`, `cduration`, `course`, `state`, `pincode`) VALUES ('','$select_center','$sname','$fname','$mname','$birthday','$image','$c_numnber','$email','$gender','$m_status','$select_year','$cduration','$course','$state','$pincode')";


         $result= mysqli_query($con,$query);

if($result)

  
   {
?>
 echo"<script language='javascript'>alert(' Data Successfully Saved !! ')</script>";
  echo"<script>document.location='addstudent.php';</script>;
    <?php
  }

  
    
  }

else
{
  
//header('location:index.php');
}





            ?>

                       
</body>
</html>