<center>
<button><a href="form.html">Click here to insert new data.</a></button>
    <h1>Registration table</h1>
        <table border=2px>
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Gender</th>
                    <th>City</th>
                </tr>
            </thead>
<br><br>
            
            <center>
<?php

                    $pdo = mysqli_connect("localhost", "root", "", "submission01");
                    $sql="SELECT * FROM `form`";
                    $result=mysqli_query($pdo,$sql);
                    $i=0;
                    while (($row=mysqli_fetch_assoc($result))) {
                        $i=$i+1;
                        echo"
                        <tbody>
                            <tr>
                                <td>".$i."</td>
                                <td>".$row["name"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["gender"]."</td>
                                <td>".$row["city"]."</td>
                            </tr>
                        </tbody>
                        ";
                    
                    }


?>
