<?php include ('includes/connection.php'); 
include "includes/adminheader.php"; ?>


<?php if($_SESSION['username'] == 'admin')  
{ 
	?>
	 <div id="wrapper">

    
    <?php include "includes/adminnav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-12">

                        
                        <h1 class="page-header">
                            All Users
                        </h1>



    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Join Date</th>
            <th>Time</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        
        <?php 
            
            $query = "SELECT * FROM users ORDER BY Id DESC ";
            $select_users = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_users) > 0 ) {
            while ($row = mysqli_fetch_array($select_users)) {
                $user_id = $row['id'];
                $username = $row['username'];
                $user_email = $row['email'];
                $user_joindate = $row['joindate'];
                $user_Time = $row['Time'];
                echo "<tr>";
                echo "<td>$user_id</td>";
                echo "<td>$username</td>";
                echo "<td>$user_email</td>";
                echo "<td>$user_joindate</td>";
                echo "<td>$user_Time</td>";
                echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this user?')\" href='users.php?delete=$user_id'><i class='fa fa-times fa-lg'></i>delete</a></td>";
                echo "</tr>";
             }
        ?>

    </tbody>
 </table>

<?php 
}

    if (isset($_GET['delete'])) {
        $the_user_id = mysqli_real_escape_string($conn , $_GET['delete']);
        $query0 = "SELECT email FROM users WHERE id = '$the_user_id'";
        $result = mysqli_query($conn , $query0) or die(mysqli_error($conn));
        if (mysqli_num_rows($result) > 0 ) {
            $row = mysqli_fetch_array($result);
            $id1 = $row['email'];
        }
        if ($id1 == 'admin') {
            echo "<script>alert('admin cannot be deleted');</script>";
        }
        else {

        $query = "DELETE FROM users WHERE id = '$the_user_id'";

        $delete_query = mysqli_query($conn, $query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0 ) {
            echo "<script>alert('user deleted successfully');
            window.location.href= 'users.php';</script>";
        }
        else {
        	 echo "<script>alert('error');
            window.location.href= 'users.php';</script>";
        }
    }
}
    ?>

    <?php } else {
    	header("location: login.php");
    }
    ?>

    </div>
    </div>
    </div>
    </div>

    </div>
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>