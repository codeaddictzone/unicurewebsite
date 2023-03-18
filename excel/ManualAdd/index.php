<?php
$con=mysqli_connect('localhost','root','','productlist');
if(isset($_POST['submit'])){
    require('PHPExcel/PHPExcel.php');
    require('PHPExcel/PHPExcel/IOFactory.php');
    $file = $_FILES['doc'] ['tmp_name'];

    $obj=PHPExcel_IOFactory::load($file);
    
    foreach($obj->getWorksheetIterator() as $sheet) {
       $getHighestRow = $sheet->getHighestRow();
       for($i=0; $i<=$getHighestRow;$i++){
            $itemname = $sheet->getCellByColumnAndRow(0,$i)->getValue();
            $composition = $sheet->getCellByColumnAndRow(1,$i)->getValue();
            $category = $sheet->getCellByColumnAndRow(2,$i)->getValue();
            if($itemname!=''){
               mysqli_query($con, "insert into list(itemname,composition,category) values('$itemname','$composition','$category')");
            }
        }    
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc"/>
    <input type="submit" name="submit"/>
</form>
