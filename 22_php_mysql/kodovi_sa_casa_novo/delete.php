<?php
require_once 'connection.php';
$id = "";
if( $_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])){
    $id=$_GET['id'];
    //mozete da izvadite dodatne podatke o studentu i prikazete ga pre brisanja
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST['id'];

    $q = "DELETE FROM `studenti` WHERE `id`=" . $id . ";";
    $r = $conn->query($q);
    if($r){
        //uspesno obrisan student, prebaci ga na index.php
        header("location: index.php");
        exit();
    }else{
        //doslo je do greske
        echo "<p>DOSLO JE DO GRESKE</p>";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Brisanje</title>
</head>
<body>

    <div class="container mt-5">
    <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Student: brisanje</h4>
                    </div>
                    <div class="card-body">
                    <form action="#" method="post">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <p>Da li ste sigurni da želite da obrišete podatak?</p>
                        <p>
                            <button type="submit" class="btn btn-danger"> DA </button>
                            <a href="index.php" class="btn btn-secondary"> NE </a>
                        </p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    </div>
    
</body>
</html>