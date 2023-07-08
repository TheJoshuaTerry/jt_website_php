<?php
    include "account/getdata.php";
?>
<!-- EDIT panel, which works the same style as the LOGIN panel -->
<div id="fullPanel">
    <div class="container logInPanel">
        <div class="row justify-content-center loginRow">
            <div class="col-md-6">Profile</div>
        </div>
        <div class="row justify-content-center userinputRow">
            <div class="col-md-6">
                <form method="post" action="account/edit.php">
                    <input type="text" id="user" name="NewUsername" value="<?php echo $row["Uname"]; ?>"/><br>
                    <input type="text" id="email" name="NewEmail" value="<?php echo $row["Uemail"]; ?>"/><br>
                    <input type="text" id="fullname" name="NewFullname" value="<?php echo $row["Ufullname"]; ?>"/><br>
                    <button type="submit" class="btn btn-dark logonButton" name="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>