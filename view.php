<html>
    <head>
        <title>Student Details</title>
    </head>
    <body>


    <center>
        <table  class="tb_view" cellpadding="5">
            <caption style="margin-bottom: 10px;">
                <div style="border-bottom: 3px solid #008080;text-align: center;">
                    <h1 style="color:#fff000;font-variant: calibri;text-shadow: 0px 0px 1px #333;">Student Info</h1>
                </div>
            </caption>
            <thead>
			
                <tr>
					
                    <th>Name</th>
					<th>Address</th>
					<th>City</th>
                    <th>Email</th> 
                    <th>Contact</th>
                    <th>DOB</th>
					
					
                </tr>
				
            </thead>
            <tbody>
                <?php
                $host = 'student.cixpzvu9kx5t.us-east-1.rds.amazonaws.com';
                $user = 'admin';
                $password = 'divya1234';
                $database = 'student';
                $port = 3306;

               
                $con = mysqli_connect($host, $user, $password, $database, $port);
                $query = "SELECT * FROM `student`";
                $result = mysqli_query($con, $query);

                $c = 0;
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $data['s_name']; ?></td>
						<td><?php echo $data['s_address']; ?></td>
						<td><?php echo $data['s_city']; ?></td>
                        <td><?php echo $data['s_email']; ?></td>
                        <td><?php echo $data['s_contact']; ?></td>
                        <td><?php echo $data['s_dob']; ?></td>
						
                    </tr>
                    <?php
                }
                ?>
                <?php ?>
            </tbody>
        </table>

    </center>
	</body>
</html>
	
