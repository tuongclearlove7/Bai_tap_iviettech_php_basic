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
                        <a class="nav-link active" href="?action=homepage" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
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
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Home</button>
                </form>
              
            </div>
      </div>
    </nav>   
    
     <main>
        <h2>Update book</h2>
     </main>
    <div class="add-book">
    <div class="row">
       <form action="" method="post" class="col-md-4">
        <input type="hidden" name='key' value="<?php echo $key?>">
        <div class="mb-3">
          <label for="" class="form-label">book_id</label>
          <input type="text" name="book_id" id="book_id" value="<?php echo $book['book_id']?>" readonly class="form-control" placeholder="" aria-describedby="helpId">          
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" name="name" id="name" value="<?php echo $book['name']?>" class="form-control" placeholder="" aria-describedby="helpId">          
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Author</label>
          <input type="text" name="author" value="<?php echo $book['author']?>" id="author" class="form-control" placeholder="" aria-describedby="helpId">          
        </div>
        <div class="mb-3">
          <label for="" class="form-label">publish year</label>
          <input type="text" name="publishyear" value="<?php echo $book['publishyear']?>" id="publishyear" class="form-control" placeholder="" aria-describedby="helpId">          
        </div>
        <div class="mb-3">
          <label for="" class="form-label">production</label>
          <input type="text" name="production" value="<?php echo $book['production']?>" id="production" class="form-control" placeholder="" aria-describedby="helpId">          
        </div>
       
        <button type="submit" name="action" value="update_book" class="btn btn-primary">Update</button>
       </form>       
    </div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>