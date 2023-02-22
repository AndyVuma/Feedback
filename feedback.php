<?php include 'inc/header.php'; ?>

<link rel="stylesheet" href="style.css">

<?php
 $sql = 'SELECT *  FROM feedback' ; 
 $result = mysqli_query( $conn, $sql);

 $feedback = mysqli_fetch_all ($result, MYSQLI_ASSOC);

?>
   
    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
<p class="lead mt3">There is no feedback</p>

<?php endif; ?>


<?php foreach( $feedback as $item) : ?>
  <div class="card my-3 w-75">
   <div class="card-body text-center p-3">
     <!-- Feedback body -->
     <p class="card-text mb-2">
       <?php echo $item ['body']; ?>
     </p>
     <!-- Feedback author and date -->
     <p class="text-secondary mt-2">
       By <?php echo $item ['name']; ?> on <?php echo $item ['date']; ?>
     </p>
   </div>
 </div>
<?php endforeach; ?>

   
  <?php include 'inc/footer.php'; ?>