<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleForm.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

  <div class="container">
    <h2>تسجيل الدخول </h2>
    <form id="loginForm" action="login.php" method="post">
        <label for="username">اسم المستخدم</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">كلمة المرور</label>
        <input type="password" id="password" name="pass" required>

        <input type="submit" value="تسجيل الدخول">
   
    </form>
  </div>
</body>
</html>