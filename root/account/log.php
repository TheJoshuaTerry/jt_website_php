<!-- LOGIN panel -->
<div id="fullPanel">
    <div class="container logInPanel">
        <div class="row justify-content-center loginRow">
            <div class="col-md-6">LOGIN</div>
        </div>
        <div class="row justify-content-center userinputRow">
            <div class="col-md-6">
                <form method="post" action="account/log-in.php">
                    <input type="text" id="user" name="username" placeholder="Username"/>
                    <input type="password" id="pass" name="password" placeholder="Password"/><br>
                    <button type="submit" class="btn btn-dark logonButton" name="submit">Log In</button>
                </form>
            </div>
        </div>
        <div class="row register">
            <div class="col-md-6">
                Have you not registered yet?<br> Don't worry, just
                <button type="button" class="btn btn-dark goRegister" onclick="loadRegister()">Register</button>
            </div>
        </div>
    </div>
    </div>