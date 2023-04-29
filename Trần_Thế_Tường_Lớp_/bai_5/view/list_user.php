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
                                <a name="action" id="" class="btn btn-primary" href="./user_Controller.php" role="button">Home</a>                
                            </form>
                    </div>
                </div>
                </nav>
                <h1>Home page</h1>
                
                <?php require('./view/add_user.php'); ?>
                <br>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Nhập vào tên</label>
                        <input type="text"
                        class="form-control" name="search_value" 
                        id="" aria-describedby="helpId" placeholder="">
                        <br>
                        <button type="submit" class="btn btn-primary" 
                        name="action" value="search_name">Tìm</button>
                    </div>        
                </form> 
                <br>
                <div class="list_student">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>firstname</th>
                                    <th>lastname</th>
                                    <th>email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php if (isset($lists)): ?>
                            <?php foreach ($lists as $key => $value):?>
                            <tr>
                                <td><?php echo $value['firstname']?></td>
                                <td><?php echo $value['lastname']?></td>
                                <td><?php echo $value['email']?></td>
                                <td>
                                    <a name="action" id="" class="btn btn-primary" 
                                    href="?action=edit&key=<?php echo $key?>" 
                                    role="button">Sửa
                                    </a>
                                </td>
                                <td><a name="action" id="" class="btn btn-primary" 
                                    href="?action=delete&key=<?php echo $key?>" 
                                    role="button">Xóa
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        <?php endif; ?>
                       
                       

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


















































































































































































































