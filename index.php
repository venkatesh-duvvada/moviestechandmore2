
<?php

include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Moviestechandmore</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">OTT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tech</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">More</a>
                            </li>
                
                
                        </ul>
                </div>
            </nav>

            <?php
                // Display data
                

                foreach($query as $q){  ?>

                <h3><a href="fullpage.php?id=<?php echo $q['id'];?>"> <?php echo $q['title']; ?></a></h3>
                
                <?php

                }
                
            ?>
 

  

  <nav aria-label="Page navigation">
  <ul class="pagination">
  <?php


   if(isset($_GET['pageno'])) 
    $pageNo = $_GET['pageno'];
   
     else 
     $pageNo = 1 ;
   
   
   
    for($i=0;$i<$totalPages;$i++){
    ?>
    

    <li class="page-item <?php if ($i=1) echo 'disabled'; ?> "><a class="page-link" href="index.php?pageno=<?php echo $pageNo - 1 ;?>">Previous</a></li>
    <li class="page-item <?php if ($i=$pageNo) echo 'active'; ?>"><a class="page-link" href="index.php?pageno=<?php echo $i;?>"><?php echo $i;?></a></li>
    <li class="page-item <?php if ($i=$totalPages) echo 'disabled'; ?>"><a class="page-link" href="index.php?pageno=<?php echo $pageNo + 1 ;?>">Next</a></li>

    <?php
  }
 
    
  ?>
  </ul>
</nav>


 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>