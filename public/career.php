<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Cinzel&family=Great+Vibes&family=Stick+No+Bills:wght@200&family=Stoke:wght@300&family=Titan+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/career.css">
    
    <title>Career | Unicure India</title>
</head>
<body>
    <div class="banner">
        <img style="width: 100%; box-shadow: 0px 8px 16px 0px black;" height="400px"  src="https://t3.ftcdn.net/jpg/01/37/63/46/360_F_137634615_QFjSm4oFRKMTt7I1Y3yqi3LV39pqBucS.jpg" alt="">

    </div>
   <div class="employer">
    <a href="./login.php"><h4>Only for Employer</h4></a>
</div>

    <div class="container col-lg-18">
        <div class="form-container">
            <h1 style="text-align: center; font-family: arial;">Apply Now</h1>

<?php
    //ini_set('display_errors',0);
    $con=mysqli_connect('localhost','unicurei_manav','@`Manav`#123','unicurei_new');
    if(isset($_POST['submit'])){

        
    
                
        if(
            !empty($_POST['firstName']) && 
            !empty($_POST['lastName']) &&
            !empty($_POST['email']) &&
            !empty($_POST['number']) &&
            !empty($_POST['alterNumber']) &&
            !empty($_POST['address']) &&
            !empty($_POST['exp']) &&
            !empty($_POST['apply']) 
            
            
            ){

                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $alterNumber = $_POST['alterNumber'];
                $address = $_POST['address'];
                $exp = $_POST['exp'];
                $apply = $_POST['apply'];
                $file = $_FILES['file'] ['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                $path = "images/pdf/".$file;

            $query = "INSERT INTO `candidate`(`firstName`, `lastName`, `email`, `number`, `alterNumber`, `address`, `exp`, `apply`,`file`) VALUES ('$firstName','$lastName','$email','$number','$alterNumber','$address','$exp','$apply','$file')";

            $run = mysqli_query($con,$query );

            if($run){
                move_uploaded_file($file_tmp,$path);
                echo " <h2>Successfully Submit</h2> ";
            }
            
        }
        else{
            echo "<h3>All Feilds Required!</h3>";
        }
     
}
?>

    <h4 class="note-line" style="color: black;" ><span style="color: red;" >Note:</span> Only Pharmaceuticals background candidates can apply.</h4>


    <form action="career.php" style="background: white; border-radius: 0; height: auto; box-shadow: 0px 16px 32px 0px black;" method="POST" enctype="multipart/form-data">

            

            <input type="text" style="border-radius: 0;"  name="firstName" placeholder="First Name">
            <input type="text" style="border-radius: 0; margin-top: 20px;"  name="lastName" placeholder="Last Name">
            <input type="email"  style="border-radius: 0; margin-top: 20px;"   name="email" id="email" placeholder="Email-Id">
            <input type="phone" style="border-radius: 0; margin-top: 20px;"  name="number" placeholder="Phone Number">
            <input type="phone" style="border-radius: 0; margin-top: 20px;" name="alterNumber" placeholder="Alternative Phone Number">
            <input type="text" style="border-radius: 0; margin-top: 20px;" name="address" id="add" placeholder="Address">
            <textarea style="border-radius: 0; margin-top: 20px; border: 1px solid black; height: 100px; " name="exp" class="form-control mt-3 mb-3" id="exp" cols="30" rows="10" placeholder="Experience"></textarea>
            <select style="border-radius: 0; margin-top: 20px;" class="form-control mt-3" name="apply" id="apply">
                <option style="display: none;" value="#">Available vaccancy in</option>
                <option value="Quality Control">Quality Control</option>
                <option value="Quality Assurance">Quality Assurance</option>
                <option value="Information Technology">Information Technology(IT)</option>
                <option value="Warehouse">Warehouse</option>
                <option value="Human Resources(HR)">Human Resources(HR)</option>
                <option value="Engineering">Engineering</option>
            </select>
            <label style="border-radius: 0; margin-top: 20px;" class="mt-3" style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; " for="Resume">Attach Resume</label><p style="color: red;">(only PDF file)</p>
            <input class="mt-3" style="border-radius: 0; margin-top: 20px;" type="file" name="file" id="file">

            <button class="btn btn-primary mt-4" style="border-radius: 0; " type="submit" name="submit">Submit</button>

            </form>

        </div>

        
        <img style="box-shadow: 0px 6px 12px 0px black;" src="./images/careerPoster/qc-poster.png" alt="">
        <img style="box-shadow: 0px 6px 12px 0px black;" src="./images/careerPoster/qa-poster.png" alt="">
        <img style="box-shadow: 0px 6px 12px 0px black;" src="./images/careerPoster/it-poster.png" alt="">
        <img style="box-shadow: 0px 6px 12px 0px black;" src="./images/careerPoster/warehouse-poster.png" alt="">
        <img style="box-shadow: 0px 6px 12px 0px black;" src="./images/careerPoster/hr-poster.png" alt="">

    </div>
    
</body>
</html>