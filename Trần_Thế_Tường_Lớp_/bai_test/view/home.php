<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
            <header>
            <div class="logo">
                    <h1>
                        php learning
                    </h1>
                </div>

                <div class="banner">
                    <img src="../image/php1.png" alt="">
                </div>
            </header>
        
        <main>

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>   
                            </li>
                            </ul>
                            <form class="d-flex" role="search" action="" method="POST">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit" value="login">Search</button>
                                <button class="btn btn-outline-success" name="action" value="mycard" type="submit">shop</button>
                                <a name="action" id="" class="btn btn-primary" href="?action=logout" role="button">Logout</a>                
                            </form>
                    </div>
                </div>
                </nav>
                <h1>Home page</h1>
                
                <div class="list_student">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>giới tính</th>
                                    <th>email</th>
                                    <th>image</th>
                                    <th>address</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php foreach ($student as $key => $value):?>
                            <tr>
                            <th ><?php echo $value['id']?></th>
                            <td><?php echo $value['name']?></td>
                            <td><?php echo $value['gioitinh']?></td>
                            <td><?php echo $value['email']?></td>
                            <td><img src="../image/<?php echo $value['image']?>" alt="" ></td>
                            <td><?php echo $value['address']?></td>
                            </tr>
                            <?php endforeach;?>
                        
                        </tbody>
                    </table>
                </div>
        </main>
        <footer>
            <h1>FOOTER</h1>
        </footer>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


















































































































































































































