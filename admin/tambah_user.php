<?php

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    mysqli_query($conn,
    "INSERT INTO users VALUES(
    NULL,
    '$nama',
    '$email',
    '$password',
    '$role'
    )");

    header("Location: ?menu=user");
}
?>

<form method="POST">

<input type="text" name="nama" placeholder="Nama">
<br><br>

<input type="email" name="email" placeholder="Email">
<br><br>

<input type="password" name="password" placeholder="Password">
<br><br>

<select name="role">
<option>admin</option>
<option>user</option>
</select>

<br><br>

<button type="submit" name="simpan">
Simpan
</button>

</form>
