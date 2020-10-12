<?php include ('includes/connection.php'); ?>
<?php include('includes/adminheader.php');  ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

 <div id="wrapper">
       
       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">
 
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome 
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
<?php if($_SESSION['username'] == 'admin') {
?>

<?php 
}
else {
    ?>

 <h3 class="page-header">
                            
                        </h3>

                    </div>
                </div>
<div class="row">
<div class="col-lg-12">
        <div class="table-responsive">

<form action="" method="post">
            <table class="table table-bordered table-striped table-hover">


            <thead>
                    <tr>
                <th>QUESTION</th>
                <th>TITLE</th>
                <th>TAGS</th>
                <th>DESCRIPTION</th>
                <th>ANSWER</th>
                        
                    </tr>
                </thead>
                <tbody>

             <?php 
            
            $query = "SELECT * FROM ques ORDER BY Id DESC ";
            $select_post = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_post) > 0 ) {
            while ($row = mysqli_fetch_array($select_post)) {
        
                $ques_question = $row['question'];
                $ques_title = $row['title'];
                $ques_tag = $row['tag'];
                $ques_description = $row['description'];
               
            
                echo "<tr>";
                echo "<td>$ques_question</td>";
                echo "<td>$ques_title</td>";
                echo "<td>$ques_tag</td>";
                echo "<td>$ques_description</td>";
                
                echo "</tr>";
             }
         }
        ?>
  </tbody>
            </table>
</form>
</div>
</div>
</div>
<?php }
 
 ?>

</body>
</html>