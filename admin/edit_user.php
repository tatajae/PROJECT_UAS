<?php
include '../koneksi.php';

$id = $_GET['id'];

/* =========================
   AMBIL DATA USER
========================= */

$query = mysqli_query($conn,
"SELECT * FROM users WHERE id_user='$id'");

$data = mysqli_fetch_assoc($query);

if(!$data){
    echo "Data tidak ditemukan";
    exit;
}

/* =========================
   UPDATE DATA
========================= */

if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    mysqli_query($conn,
    "UPDATE users SET
    nama='$nama',
    email='$email',
    role='$role'
    WHERE id_user='$id'");

    header("Location: index.php?menu=user");
    exit;

}

?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit User</title>

<style>

/* =========================
   BODY (SKY BLUE + JEANS)
========================= */

body{

    font-family:Arial;

    background:#cfefff;

    background-image:
    repeating-linear-gradient(
        45deg,
        rgba(255,255,255,0.08),
        rgba(255,255,255,0.08) 2px,
        transparent 2px,
        transparent 12px
    ),
    repeating-linear-gradient(
        -45deg,
        rgba(0,0,0,0.03),
        rgba(0,0,0,0.03) 2px,
        transparent 2px,
        transparent 12px
    );

    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;

}

/* =========================
   CARD
========================= */

.card{

    width:420px;

    background:white;

    padding:30px;

    border-radius:25px;

    position:relative;

    overflow:hidden;

    box-shadow:0 8px 20px rgba(0,0,0,0.15);

}

/* jeans effect */

.card::before{

    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;

    background-image:
    repeating-linear-gradient(
        45deg,
        rgba(93,185,255,0.05),
        rgba(93,185,255,0.05) 3px,
        transparent 3px,
        transparent 15px
    );

    pointer-events:none;

}

/* TITLE */

h2{

    text-align:center;
    color:#3498db;
    margin-bottom:20px;

}

/* INPUT */

input, select{

    width:100%;
    padding:12px;
    margin-bottom:15px;

    border-radius:12px;
    border:2px solid #8ed0ff;

}

input:focus, select:focus{

    outline:none;
    border-color:#5db9ff;
    box-shadow:0 0 10px rgba(93,185,255,0.3);

}

/* BUTTON */

.btn{

    width:100%;

    padding:12px;

    border:none;

    border-radius:12px;

    background:#5db9ff;

    color:white;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;

}

.btn:hover{

    background:#3498db;
    transform:scale(1.02);

}

/* BACK LINK */

.back{

    display:block;
    text-align:center;
    margin-top:15px;
    text-decoration:none;
    color:#3498db;
    font-weight:bold;

}

</style>

</head>
<body>

<div class="card">

<h2>✏️ Edit User</h2>

<form method="POST">

<label>Nama</label>
<input type="text" name="nama"
value="<?php echo $data['nama']; ?>" required>

<label>Email</label>
<input type="email" name="email"
value="<?php echo $data['email']; ?>" required>

<label>Role</label>
<select name="role">

<option value="user"
<?php if($data['role']=="user") echo "selected"; ?>>
User
</option>

<option value="admin"
<?php if($data['role']=="admin") echo "selected"; ?>>
Admin
</option>

</select>

<button type="submit" name="update" class="btn">
Update
</button>

</form>

<a class="back"
href="index.php?menu=user">
⬅ Kembali
</a>

</div>

</body>
</html>