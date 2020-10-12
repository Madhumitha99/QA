
<?php include 'includes/adminheader.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<div id="wrapper">

       <?php 
       include 'includes/adminnav.php';
       ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            ADD QUESTIONS
                        </h2>

<?php

error_reporting(0);
include ('connect.php');

$questionErr  = $titleErr = $tagErr = $descriptionErr = "";

$question = $title = $tag =$description = "";
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["question"])) {
    $questionErr = "question is required";
  } else {
    $question = test_input($_POST["question"]);
  }

  if (empty($_POST["title"])) {
    $titleErr = "title is required";
  } else {
    $title = test_input($_POST["title"]);
  }



  if (empty($_POST["tag"])) {
    $tagErr = "tag is required";
  } else {
    $tag = test_input($_POST["tag"]);
    
  }

   if (empty($_POST["description"])) {
    $descriptionErr = "description is required";
  } else {
    $description = test_input($_POST["description"]);
    
  }
  


if($questionErr=="" && $titleErr=="")
{
  $sql = "INSERT INTO ques(question,title,tag,description,Date,Time) VALUES ('$question','$title','$tag','$description',NOW(),NOW())";


if(mysqli_query($conn,$sql))
{
  echo "<script type='text/javascript'>alert(' SUCCESSFULLY....!!')</script>";
    
}
  else
    echo "<script type='text/javascript'>alert('Question Posted Failed...')</script>"; 

}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

    <?php if (isset($_POST['form_submitted'])): ?>
 
            <?php else: ?>

     <form role="form"  method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <div class="form-group">
        <label for="post_question">QUESTION</label>
        <input type="text" name="question" class="form-control" required="">
    </div>

   <div class="form-group">
    <label for="post_title">TITLE</label>
    <input type="text" name="title" class="form-control"  required="">
   </div>

   <div class="form-group">
    <label for="post_tags">TAGS</label>
    <input type="text" name="tag" class="form-control" required="">
   </div>

   <div class="form-group">
        <label for="post_description">DESCRIPTION</label>
        <input type="text" name="description" class="form-control" required="">
  </div>
 <input type="hidden" name="form_submitted" value="1" />

<br>
<input type="submit"  class="btn btn-primary" value="Submit">
<br>
<br>
</form>
<?php endif; ?>

</div>
</div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

