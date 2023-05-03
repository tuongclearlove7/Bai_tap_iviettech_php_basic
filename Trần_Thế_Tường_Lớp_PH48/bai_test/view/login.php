<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login vào hệ thống</title>
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
          <div class='form-user'>
            <div class="row">
              <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="" method="post">
                      <div class="mb-3">
                        <label for="" class="form-label">UserName : tuong</label>
                        <input type="text"
                          class="form-control" name="username" id="" aria-describedby="helpId" placeholder="UserName"
                          value=""
                          >          
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">password : 12345</label>
                        <input type="password"
                          class="form-control" name="password" id="" aria-describedby="helpId" placeholder="PassWord"
                          value=""
                          >          
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="rememberme" id="">
                        <label class="form-check-label" for="">
                          Remember Me
                        </label>
                      </div>        
                      <button type="submit" name="action" value="check_login" class="btn btn-primary">Login</button>
                  </form>
                  <p></p>
                </div>
              <div class="col-md-4"></div>
            </div>
          </div>
        </div>
      </main>
 
    <footer>
            <h2>FOOTER</h2>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>