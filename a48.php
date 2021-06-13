<html>
<head><title>application form</title></head>
<body>
<center>
     <h2>
     APPLICATION FORM FOR STUDENTS REGISTRATION
    </h2>
     
    <form method="post">
        <table border="0">
            <tr>
                <td>First Name</td><td><input type="text" name="fname" required /></td>
            </tr>
            <tr>
                <td>Middle Name</td><td><input type="text" name="mname"  required/></td>
            </tr>
            <tr>
                <td>Last Name</td><td><input type="text" name="lname"   required/></td>
            </tr>
            <tr>
                <td>Photo</td><td><input type="file" name="pic"  placeholder="Photo" required/></td>
            </tr>
            <tr>
                <td>Father's Name</td><td><input type="text" name="father"  required/></td>
            </tr>
            <tr>
            <tr>
                <td>Address</td><td><textarea name="address"  required></textarea></td>
            </tr>
            <tr>
                <td>Contact Number</td><td><input type="number" name="phone"   required/></td>
            </tr>
            <tr>
                <td>Email-Id</td><td><input type="email" name="email"   required/></td>
            </tr>
            <tr>
                <td>Date of Birth</td><td><input type="date" name="dob"  required/></td>
            </tr>
            <tr>
                <td>Gender</td><td><input type="radio" name="gender"  value="male" required/>Male
                    <input type="radio" name="gender"  value="female"/>Female</td>
            </tr>
            <tr>
                <td>Degree Percent</td><td><input type="number" name="ug" required/></td>
            </tr>
            <tr>
                <td>Hobbies</td><td><input type="checkbox" name="hobby"  value="sports" required/>Sports
                    <input type="checkbox" name="hobby"  value="art"/>Art
                    <input type="checkbox" name="hobby"  value="music"/>Music</td>
            </tr>
            <tr>
                <td>priveous Institution</td><td><input type="text" name="clg"  required/></td>
            </tr>
            <tr>
                <td>Course Studied</td><td><input type="radio" name="course"  value="BCA" required/>BCA
                    <input type="radio" name="course"  value="BSc"/>BSc
                    <input type="radio" name="course"  value="BCom"/>BCom
                    <input type="radio" name="course"  value="BE"/>B.E</td>
            </tr>
            <tr>
                <td>Course Offered</td><td><select name="opt" required>MCA,MBA, M.Tech, MSc
                    <option value="MCA">MCA</option>
                    <option value="MBA">MBA</option>
                    <option value="MTech">MTech</option>
                    <option value="MSc">MSc</option>
                </select></td>
            </tr>
            <tr>
               <td></td> <td> <button type="submit" name="submit" >Enter </button></td>
            </tr>
        </table>
    </form>

 
<?php   
    if($_POST)  
    {   
        $opt =$_POST['opt'];
        $crs = $_POST['course'];
        $ug = $_POST['ug'];


        if( $opt == 'MCA' or $opt == 'MTech'){
            if( $ug >= 70){
                if($opt =='MTech' and $crs == 'B.E'){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be B.E "); </script>';
                }
                if($opt =='MCA' and ($crs == 'BCA' or $crs == 'BSc')){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 70%"); </script>';
            }
        }
        elseif( $opt == 'MBA'){
            if( $ug >= 60){
                echo '<script>alert("Registration Successful "); </script>';
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 60%"); </script>';
            }
        }
        else{
            if( $ug >= 40){
                if($opt =='MSc' and ($crs == 'BCA' or $crs == 'BSc')){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 40%"); </script>';
            }
        }
    }     
?> 
</center>
</body>
</html>


