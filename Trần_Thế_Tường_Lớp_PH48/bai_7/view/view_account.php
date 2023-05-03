<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login vaof hệ thống</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./account_controller.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
        <form class="d-flex my-2 my-lg-0" action="" method="POST">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary" name="action" value="clear_session_amount" type="submit">Home</button>
        </form>
        <form class="d-flex my-2 my-lg-0 " action="" method="POST">                    
            <button class="btn btn-outline-success my-2 my-sm-0" name="action" value="logout" type="submit">logout</button>
        </form>           
      </div>
    </nav>   
    
     <main>
        <h2>Account login</h2>
            <div class="row">
                <?php foreach ($_SESSION['account'] as $key => $value):?>
                    <div class="card col-md-3">
                        <form action="" method="post">
                            <img class="card-img-top" src="../image/<?php echo$account_type;?>" alt="Title">
                            <div class="card-body">
                                <p>Account no : <?php echo $account_no?></p>
                                <p>Owner name : <?php echo $owner_name?></p>
                                <p>password : <?php echo $value['password']; ?></p>  
                                <p>amount : <?php //echo $your_amount;
                                if(isset($surplus_amount)){
                                    echo $surplus_amount;
                                }
                                else{
                                    echo $your_amount;
                                }
                                ?></p> 
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
            <br>
     </main>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
