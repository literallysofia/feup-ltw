<?php if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email'])) {
        $userinfo['Name'] = $_POST['name'];
        $userinfo['Username'] = $_POST['username'];
        $userinfo['Email'] = $_POST['email'];
}

?>
<main>
    <div id="settings">
        <h1>Personal Information</h1>
        <div id="content">
            <div id="account">
                <div id="fields">
                    <form action="action_login.php" method="post">
                        <label>Name</label>
                        <input name="name" class="w3-input w3-border" type="text" placeholder="John Doe" value="<?php echo $userinfo['Name'] ?>" required="required">
                        <label>Username</label>
                        <input name="username" class="w3-input w3-border" type="text" placeholder="johndoe123" value="<?php echo $userinfo['Username'] ?>" required="required">
                        <span class="hint">Only lowercase, at least 6 characters</span>
                        <label>Email</label>
                        <input name="email" class="w3-input w3-border" type="email" placeholder="johndoe@gmail.com" value="<?php echo $userinfo['Email'] ?>" required="required">
                        <label>Password</label>
                        <input name="password" class="w3-input w3-border" type="password" placeholder="Password" required="required">
                        <span class="hint">One uppercase, 1 symbol, 1 number, at least 6 characters</span>
                        <h5> Optional </h5>
                        <input name="newpassword" class="w3-input w3-border" type="password" placeholder="New Password">
                        <span class="hint">One uppercase, 1 symbol, 1 number, at least 6 characters</span>
                        <input name="passwordagain" class="w3-input w3-border" type="password" placeholder="Repeat New Password">
                        <span class="hint">Must match new password</span>
                        <input type="submit" name="Submit" value="Update">
                    </form>
                    <hr>
                    <input onclick="openDialog('Delete Account')" type="submit" value="Delete Account">

                </div>
                <div id="photo_field">
                    <form method="post">
                        <label>Photo</label>
                        <img id="photo" src="../assets/portrait.png" alt="Profile Picture">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" name="Submit" value="Upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once('../templates/dialogs/delete_account.php');
?>