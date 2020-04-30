<html>
<title>
    Halaman Login - Latihan_8.6_02734
</title>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="col-md-12">
        <br>
        <center>
            <h2>Halaman Login Praktikum 7</h2>
            <label>Crud_PDO</label>
        </center>
        <br>

        <table align="center">
            <form method="POST" action="proseslogin.php">

                <tr>
                    <td>Username</td>
                    <td><input type="text" class="form-control form-control-lg" name="username" required> </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="form-control form-control-lg" name="password" required> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-warning" name="login" value="Login"></td>
                </tr>
            </form>

        </table>
    </div>
</body>
</body>

</html>