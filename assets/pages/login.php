
    <div style="display:flex ">
    <table>
<tr>
    <td>

    </td>

    </div>
    
    
    <td>
    <div class="login" style="background-color: #fff6ed  ">
        <div class="col-sm-12 col-md-4 bg-white border p-4 shadow-sm " style="border-radius:400px; height:600px ;width:400px">
        <br>
            <form method="post" action="assets/php/actions.php?login">
                <div class="d-flex justify-content-center">
                    <br>
                    <h1 class="mb-4" ><b>Pixel Surf</b> </h1>
                </div>
                <br>
                <br>
                <h1 class="h5 mb-3 fw-normal" style="text-align:center ;">Please sign in</h1><br>

                <div class="form-floating rounded" style="border-radius:50px ; background-color:#d2edf6">
                    <input type="text" name="username_email" value="<?=showFormData('username_email')?>" class="form-control" placeholder="username/email" style="height: 50px;
    border-radius: 10px;
    border: 1px solid gray;
    font-size: 18px;
    padding-left: 20px;
    background-color: #d2edf6;"  >
                    <label for="floatingInput">username/email</label>
                </div>
                <br>
                <?=showError('username_email')?>
                <div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded-10" id="floatingPassword" placeholder="Password" style="height: 50px;
    border-radius: 10px;
    border: 1px solid gray;
    font-size: 18px;
    padding-left: 20px;
    background-color: #d2edf6;">
                    <label for="floatingPassword">password</label>
                </div>
                <?=showError('password')?>
                <?=showError('checkuser')?>


                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-success" type="submit" >Sign in</button>
                    <a href="?signup" class="text-decoration-none">Create New Account</a>


                </div>
                <a href="?forgotpassword&newfp" class="text-decoration-none">Forgot password ?</a>
            </form>
        </div>
    </div>
    </td>
    </tr>
    </table>
    </div>

