





<html lang="en">


<head>
  <title>Student Marks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>  
<form method="post" action="<?php echo site_url('user/savingdata'); ?>">  
        <table>  
            <tr>  
                <td>StudentName</td>  
                <td>:</td>  
                <td><input type="text" name="StudentName"></td>  
            </tr>  
            <tr>  
                <td>MathsMarks</td>  
                <td>:</td>  
                <td><input type="text" name="MathsMarks"></td>  
            </tr>  
            <tr>  
                <td>ScienceMarks</td>  
                <td>:</td>  
                <td><input type="text" name="ScienceMarks"></td>  
            </tr>  
            <tr>  
                <td>EnglishMarks</td>  
                <td>:</td>  
                <td><input type="text" name="EnglishMarks"></td>  
            </tr><br><br>  
            <tr>  
                <input type="submit" name="submit" value="Save">  
            </tr>  
        </table>  
    </form>  
    <table border="1">  
        <thead> 
          <th>Studentid</th> 
            <th>StudentName</th>  
            <th>MathsMarks</th>  
            <th>ScienceMarks</th>  
            <th>EnglishMarks</th>  
            
            
        </thead>  
        <tbody>  
            <?php  
                foreach($this->a->fetchtable() as $row)  
                {  
                    //name has to be same as in the database.  
                    echo "<tr>  
                                <td>$row->Studentid</td>  
                                <td>$row->StudentName</td>  
                                <td>$row->MathsMarks</td>  
                                <td>$row->ScienceMarks</td>  
                                <td>$row->EnglishMarks</td>  
                    </tr>";  
                }  
            ?>  
        </tbody>  
    </table>  

   

  


</body>
</html>


