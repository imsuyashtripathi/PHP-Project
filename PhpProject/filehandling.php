<html>
    <head>
        <title>file handling</title>
    </head>
    <body>
    <center>
        <form action="que-3.php">
            <table border="1px">
                <tr>
                    <th>First name:</th>
                    <td><input type="text" name="first_name"></td>
                </tr>
                <tr>
                    <th>last name:</th>
                    <td><input type="text" name="last_name"></td>
                </tr>
                <tr>
                    <th>Full name:</th>
                    <td><input type="text" name="full_name"></td>
                </tr>
                <tr>
                    <th>Date of birth:</th>
                    <td><input type="text" name="dob"></td>
                </tr>
                <tr>
                    <th>Education:</th>
                    <td><input type="checkbox" name="courses[]" value="Graduation"/>Graduation
                        <input type="checkbox" name="courses[]" value="PostGraduation"/>PostGraduation
                    </td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td><input type="radio" name="radio" value="male">Male
                        <input type="radio" name="radio" value="female">Female
                    </td>
                </tr>
                <tr>
                    <th>Department:</th>
                    <td>
                    <select name="list">
                      <option value="MBA">MBA</option>
                      <option value="B.tech">B.tech</option>
                      <option value="B.pharma">B.pharma</option>
                    </select>
                    </td>
                
                     
                </tr>
                <pre>
                    <tr>
                    <td><input type="submit"></td>
                          <td><input type="reset"></td>
                    </tr>
                </pre>
            </table>
        </form>
      </center>  
    </body>
</html>