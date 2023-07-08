<!-- REGISTER panel -->
<div class="container logInPanel">
        <div class="row justify-content-center loginRow">
            <div class="col-md-6">Register</div>
        </div>
        <div class="row justify-content-center userinputRow">
            <div class="col-md-6">
                <form method="post" action="account/register.php">
                    <input type="text" id="user" name="username" placeholder="Username"/><br>
                    <input type="password" id="pass" name="password" placeholder="Password"/><br>
                    <input type="password" id="pass" name="passwordrep" placeholder="Password again"/><br>
                    <input type="text" id="email" name="email" placeholder="Email Address"/><br>
                    <input type="text" id="fullname" name="fullname" placeholder="Full Name"/><br>
                    <button type="submit" class="btn btn-dark logonButton" name="submit">Register</button>
                </form>
            </div>
        </div>
        <div class="row register">
            <div class="col-md-6">
                Have you already registered?<br> Don't worry, just
                <button type="button" class="btn btn-dark goRegister" onclick="loadLogin()">Log In</button>
            </div>
        </div>
    </div>