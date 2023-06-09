<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login vào hệ thống</title>
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
                <form action="" method="POST">
                    <button class="btn btn-primary" name="action" value="clear_deposit" type="submit">Home</button>
                </form>             
                              
            </div>
      </div>
    </nav>   
    
     <main>

        <h2>Deposit</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Stt</th>
                    <th>số tài khoản đã chuyển</th>
                    <th>số tiền đã chuyển</th>
                </tr>
            </thead>
            <tbody>
            <?php $surplus_amount = ''; ?>
            <?php if(isset($_SESSION['deposit'])): ?>
                <?php foreach ($_SESSION['deposit'] as $key => $value):?>
                <tr>
                    <td><?php echo $key+1;?></td>
                    <td><?php echo $value['sendAccountNo'];?></td>
                    <td><?php echo $value['amount'];?></td>
                    <?php $surplus_amount = $_SESSION['your_amount'] - surplus_Amount($_SESSION['deposit']);?>
                </tr>
                <?php endforeach;?>
            <?php endif; ?>
            <h3>Số dư còn lại trong tk : 
                <?php 
                if($surplus_amount == '')
                    echo $_SESSION['your_amount'];
                else{
                    echo $surplus_amount;
                }                
            ?></h3>
            </tbody>
        </table>

        <?php 
        if(isset($_SESSION['deposit']))
            return;
        else 
            echo '<h4>hiện chưa có hóa đơn nào</h4>';
        ?>
     </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
