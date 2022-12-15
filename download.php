<?php  
$con = mysqli_connect("localhost","u651328475_nov_2022","V12345678@vb","u651328475_nov_2022");
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=Reg_Report.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
$sep = "\t"; //tabbed character

print("\n");   
// Sno	Name	Contact No	Class Type
        $schema_insert = str_replace($sep."$", "", "SNo".$sep."Name".$sep."Contactno".$sep."Branch".$sep."Date");
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
        $sno=0;
$result=mysqli_query($con,"select * from details");
    while($row =$result->fetch_assoc())
    {
        $sno++;
        
        $schema_insert = "";
          $schema_insert=$sno.$sep.$row['name'].$sep.$row['mobile'].$sep.$row['branch'].$sep.$row['date'];
        
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }  


 exit;
?>