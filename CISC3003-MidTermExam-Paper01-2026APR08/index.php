<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>dc229841 jiaozinan - CISC3003 期中考试</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">登录</button>
            <button type="button" class="toggle-btn" onclick="register()">注册</button>
        </div>

        <!-- 登录表单 -->
        <form id="login-form" class="input-group" action="#" method="post">
            <input type="email" class="input-field" id="login-email" placeholder="Email" required>
            <input type="password" class="input-field" id="login-password" placeholder="Password" required>
            <button type="submit" class="submit-btn">登录</button>
        </form>

        <!-- 注册表单 -->
        <form id="register-form" class="input-group" action="#" method="post">
            <input type="text" class="input-field" id="reg-fullname" placeholder="Full Name" required>
            <input type="email" class="input-field" id="reg-email" placeholder="Email" required>
            <input type="password" class="input-field" id="reg-password" placeholder="Create Password" required>
            <button type="submit" class="submit-btn">注册</button>
        </form>
    </div>
</div>

<footer>
    CISC3003 Web Programming: dc229841 jiaozinan 2026
</footer>

<script>
    // 默认显示登录表单
    document.getElementById("register-form").style.display = "none";

    function login() {
        document.getElementById("login-form").style.display = "block";
        document.getElementById("register-form").style.display = "none";
        document.getElementById("btn").style.left = "0px";
    }

    function register() {
        document.getElementById("login-form").style.display = "none";
        document.getElementById("register-form").style.display = "block";
        document.getElementById("btn").style.left = "110px";
    }

    // 登录表单验证
    document.getElementById("login-form").addEventListener("submit", function(event) {
        let email = document.getElementById("login-email").value.trim();
        let password = document.getElementById("login-password").value.trim();

        if (email === "" || password === "") {
            alert("Email 和 Password 都是必填字段。");
            event.preventDefault();
        } else {
            alert("登录成功（演示）");
        }
    });

    // 注册表单验证
    document.getElementById("register-form").addEventListener("submit", function(event) {
        let fullname = document.getElementById("reg-fullname").value.trim();
        let email = document.getElementById("reg-email").value.trim();
        let password = document.getElementById("reg-password").value.trim();

        if (fullname === "" || email === "" || password === "") {
            alert("Full Name、Email 和 Create Password 都是必填字段。");
            event.preventDefault();
        } else {
            alert("注册成功（演示）");
        }
    });
</script>

</body>
</html>