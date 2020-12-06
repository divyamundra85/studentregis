<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
	
    <?php
    if (isset($_POST['add'])) {
        
        $host = 'student.cixpzvu9kx5t.us-east-1.rds.amazonaws.com';
        $user = 'admin';
        $password = 'divya1234';
        $database = 'student';
        $port = 3306;

        $name = $_POST['name'];
		$address = $_POST['address'];
        $city = $_POST['city'];
		$email = $_POST['email'];
        $contact = $_POST['contact'];
        $dob = $_POST['dob'];
		

        $conn = mysqli_connect($host, $user, $password, $database, $port);



        if ($conn) {
            
        } else {
            die("Database Connection Failed.");
        }

        $query = "INSERT INTO `student1`(`s_name`, `s_address`,`s_city`, `s_email`, s_contact, s_dob) VALUES 
		('" . $name . "','" . $address . "','" . $city . "','" . $email . "','" . $contact . "','" . $dob . "')";
		
		
        $res = mysqli_query($conn, $query);

        if ($res > 0) {
            header('location:view.php');
        }
    }
    ?>
    <body>
 
	<h1 style="color:#fff000;font-variant: calibri;text-shadow: 0px 0px 1px #333;">Student Registration </h1>
        <form  border="5" method = "post">
         <table width = "400" border = "1" cellspacing = "1" 
                   cellpadding = "2">

                <tr>
                   <td width = "100"><b>Name</b></td>
                    <td><input name = "name" type = "text" 
                               id = "name" placeholder="Name" required></td>
							   
                </tr>
				
				<tr>
                    <td width = "100"><b>Address</b></td>
                    <td><textarea input name = "address"  
                               id = "address" placeholder="Address" required></textarea></td>
							   
                </tr>
				
				<tr>
                    <td width = "100"><b>City</b></td>
                    <td><input name = "city" type = "text" 
                               id = "city" placeholder="City" required></td>
                </tr>

                <tr>
                    <td width = "100"><b>Email</b></td>
                    <td><input name = "email" type = "text" 
                               id = "email" placeholder="Email" required></td>
                </tr>

                
                <tr>
                    <td width = "100"><b>Contact</b></td>
                    <td><input name = "contact" type = "text" 
                               id = "contact" placeholder="Contact" required></td>
                </tr>
				
                <tr>
                    <td width = "150"><b>Dob</b></td>
                   <td><input name = "dob" type="date" 
                               id = "dob" placeholder="Date Of Birth" required><td>
                   
                </tr>
				
				

                <tr>
                    <td width = "150"> </td>
                    <td> </td>
                </tr>

                <tr>
                    <td width = "150"> </td>
                    <td>
						<button name="add" type="submit" id = "add" class="registerbtn" value = "Add register"><b>Register</b></button>
						
                    </td>
                </tr>

            </table>
        </form>
        <a href="view.php"><button>Student Info</button></a>
   
</body>
</html>
