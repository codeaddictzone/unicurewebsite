<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../public/images/logo.svg">
    <link rel="stylesheet" href="./css/product-list.css">
    <title>Product List | Unicure India</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <div class="about-drop">
                <a href="#">About</a>
                <div class="about-drop-content">
                    <a href="our-mission.html">Our Mission</a>
                    <a href="our-founder.html">Our Founder</a>
                    <a href="our-journey.html">Our History</a>
                </div>
            </div>

            <div class="about-drop">
                <a href="#">Corporate Sales</a>
                <div class="about-drop-content">
                    <a href="institutional.html">Institutional Sales</a>
                    <a href="co-manufacturing.html">Co-Manufacturing</a>
                    <a href="export-sales.html">Export Sales</a>
                </div>
            </div>

            <div class="about-drop">
                <a href="#">Manufacturing</a>
                <div class="about-drop-content">
                    <a href="operational-unit.html">Operational Unit's</a>
                    <a href="our-accre.html">Our Accreditions</a>
                    <a href="dose-form.html">Dosage Form</a>
                    <a href="regulorty-affairs.html">Regulatory Affairs</a>
                    <a href="qa-qc.html">QA & QC</a>
                </div>
            </div>

            <li><a href="presence.html">Presence</a></li>
            <li><a href="from-director-desk.html">From Director Desk</a></li>
            <li><a href="product-list.php" >Product List</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
        </ul>
    </nav>

    <a href="../public/images/brochure.pdf" target="_blank"><button><img src="../public/images/download-icon.png" alt="">Downlaod Brochure</button></a>


    <input type="text" name="" id="myInput" placeholder="Search Item.." onkeyup="searchFun()">


    <table id="myTable">
        <tr class="header">
            <th>ITEM DESCRIPTION</th><th>CATEGORY</th>
        </tr>
        <?php
        $con =  mysqli_connect('localhost','unicurei_manav','@`Manav`#123','unicurei_new');
        $query = "SELECT * FROM list";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
            while($result = mysqli_fetch_assoc($data)){
                echo "<tr><td>".$result['itemname']."</td><td>".$result['category']."</td></tr>";
            }
        }else{
            echo "No Record Found";
        }
        
        //<tr>
          //  <td>ACARBOSE TABLETS IP 50 mg</td><td>Diclo Paracetamol</td><td>Tablet</td><td><a href="./images/legacy.jpg"><img src="./images/legacy.jpg" alt=""></a></td>
        //</tr>
        ?>
    </table>

    


    <script src="./js/product-search.js"></script>
</body>

</html>