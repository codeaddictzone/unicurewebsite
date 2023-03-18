<?php
$con=mysqli_connect('localhost','unicurei_manav','@`Manav`#123','unicurei_new');
if(isset($_POST['submit'])){
    require('PHPExcel/PHPExcel.php');
    require('PHPExcel/PHPExcel/IOFactory.php');
    $file = $_FILES['doc'] ['tmp_name'];

    $obj=PHPExcel_IOFactory::load($file);
    
    foreach($obj->getWorksheetIterator() as $sheet) {
       $getHighestRow = $sheet->getHighestRow();
       for($i=0; $i<=$getHighestRow;$i++){
            $itemname = $sheet->getCellByColumnAndRow(0,$i)->getValue();
            $category = $sheet->getCellByColumnAndRow(1,$i)->getValue();
            if($itemname!=''){
               mysqli_query($con, "insert into list(itemname,category) values('$itemname','$category')");
            }
        }    
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc"/>
    <input type="submit" name="submit"/>
</form>
