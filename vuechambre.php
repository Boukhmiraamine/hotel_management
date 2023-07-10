<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body id='contain-product'>

    <div class='container'>
    
        <div class="small-container" style=" max-width: 1100px;">
        
       
  <div class="row card-body">
  <div class="w-25 trie" style='margin-top: 20px;'>
             <select class="form-select" aria-label="Default select example">
                    <option value="1">Default shorting</option>
                    <option value="1">short by price</option>
                    <option value="1">short by popularity</option>
                    <option value="1">short by rating</option>
                    <option value="1">short by sale</option>
             </select>
             </div>    
  <div class="list">Liste des Chambres</div>
  	<?php
  	include("admin/DAO.php");
	$dao=new DAO();
	$liste=$dao->listechambre();
  	?>		
			<?php
			foreach ($liste as $e) {
				echo "<div class='col-sm-3' style='margin-top: 15px;box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);'>
                <div class='p-3'><img width=100% heigth=200 src='admin/".$e[5]."'><a href='singleproduct.php'><h4>".$e[1]."</h4></a><hr><p>".$e[4]."dhs</p></div></div> &emsp;";
			}
    ?>
  </div>
</div>
</div>

</body>
</html>