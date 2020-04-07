<!DOCTYPE html>

<html>
    <head>
        <title>Que-2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
        <?php
         
            $first=$_POST["first_name"];
            $last=$_POST["last_name"];
            $full=$_POST["full_name"];
            $DOB=$_POST["dob"];
            $education=$_POST["courses"];
            $gender=$_POST["radio"];
            $department=$_POST["list"];
        ?>
    <center>
       
            <table>
                <tr>
                    <th>First name:</th>
                    <td><?php 
                         echo "$first";
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>last name:</th>
                    <td><?php 
                         echo "$last";
                        ?></td>
                </tr>
                <tr>
                    <th>Full name:</th>
                    <td><?php 
                         echo "$full";
                        ?></td>
                </tr>
                <tr>
                    <th>Date of birth:</th>
                    <td><?php 
                         echo "$DOB";
                        ?></td>
                </tr>
                <tr>
                    <th>Education:</th>
                    <td>
                    <?php 
                    if(isset($education)){
                       foreach($education as $value)  {
                           echo $value.",";
                    }
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td><?php 
                         echo "$gender";
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Department:</th>
                    <td>
                    <?php 
                         echo "$department";
                        ?>
                    </td>
                
                     
                </tr>

            </table>
    </center>
    </body>
</html>
