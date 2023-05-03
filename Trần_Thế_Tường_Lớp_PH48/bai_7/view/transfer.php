<div class="atm-form">
    <form  action='' method='POST'>
        <h2>Chuyển Khoản</h2>
        <div class="mb-3">
            <label for="" class="form-label">Số tài khoản</label>
            <input width="500px" type="text" class="form-control" id="accountNo" name="accountNo" 
                     readonly value="<?php echo $_SESSION['account'][0]['accountNo'];?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Vui lòng nhập lại password để chuyển tiền</label>
            <input width="500px" type="password" class="form-control" id="password" name='password' 
                    value="<?php echo $_SESSION['account'][0]['password'];?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tên tài khoản bạn muốn chuyển tiền</label>
            <input width="500px" type="text" class="form-control" id="sendAccountNo" name='sendAccountNo'>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Số tiền</label>
            <input width="500px" type="text" class="form-control" id="amount" name='amount'>
        </div>
        <button class="btn btn-primary" name="action" value="transfer" type="submit">Transfer</button>
    </form>

</div>

