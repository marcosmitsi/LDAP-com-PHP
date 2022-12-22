<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conexão LDAP</title>
<style>
    body{
        text-align: center;
    }
    form{
        margin: 0 auto;
        width: 500px;
    }
    input{
        padding: 10px;
        font-size: 20px;
    }
</style>
</head>
<body>
<h1>Autenticação com Active Directory</h1>
<form action="ldap.php" method="post">
    <input type="text" name="username"> <br><br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login">

</form>

</body>
</html>