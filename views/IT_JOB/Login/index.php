<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/a8df01a584.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="views/IT_JOB/Login/styles.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="header">
        <nav class="header-left">
          <a href="../Homepage/index.html">
            <img
              class="header-logo"
              src="views/IT_JOB/img/logo-itviec-4492a2f2577a15a0a1d55444c21c0fa55810822b3b189fc689b450fb62ce0b5b.png"
              alt="logo"
            />
          </a>
          <ul class="list-nav">
            <li class="nav-item">Việc Làm IT</li>
            <li class="nav-item">Top Công ty IT</li>
            <li class="nav-item">Blog</li>
            <li class="nav-item">Chuyện IT</li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="container">
      <div class="container-background">
        <div class="title">
          <h6>Welcome to</h6>
          <img
            src="views/IT_JOB/img/logo_black_text-04776232a37ae9091cddb3df1973277252b12ad19a16715f4486e603ade3b6a4.png"
            alt=""
          />
        </div>
        
        <div class="login-content">
          <form action="./login" method="POST">
          <h4>Email Address<span>*</span></h4>
          <input class="login-input" name="email" type="text" placeholder="Email" />
          <div class="login-password">
            <div class="password-title">
              <h4>Password<span>*</span></h4>
              <h5>Forgot Password?</h5>
            </div>
            <input class="login-input" name="password" type="text" placeholder="Password" />
            <i class="show-icon fa-regular fa-eye"></i>
            <div class= "login-fail"> 
            <?php if (isset($error)) echo $error; ?>
            </div>
          </div>
          <input type="submit" class="btn-submit" value="Login" onClick="" />
        </form>
        </div>
  


        <h3>
          Do not have an account?<a
            href="../SignUp/index.html"
            class="switch"
            onclick=""
          >
            Sign up now!</a
          >
        </h3>
      </div>
    </main>

    <footer class="footer">
      <div class="footer-link">
        <div class="list-link">
          <h5 class="footer-title">Về ITviec</h5>
          <a href="">Trang Chủ</a>
          <a href="">Về ITviec.com</a>
          <a href="">Liên Hệ</a>
          <a href="">Việc Làm IT</a>
          <a href="">Câu hỏi thường gặp</a>
        </div>

        <div class="list-link">
          <h5 class="footer-title">Điều khoản chung</h5>
          <a href="">Quy định bảo mật</a>
          <a href="">Quy chế hoạt động</a>
          <a href="">Giải quyết khiếu nại</a>
          <a href="">Thoả thuận sử dụng</a>
          <a href="">Thông cáo báo chí</a>
        </div>

        <div class="list-link">
          <h5 class="footer-title">General</h5>
          <span>Copyright © IT VIEC JSC</span>
          <span>MST: 0312192258</span>
          <div class="contact">
            <a href="">
              <i class="fa-brands fa-facebook"> </i>
            </a>
            <a href="">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="footer-post">
        <h5 class="footer-title">Liên hệ để đăng tin tuyển dụng tại</h5>
        <p>
          Hồ Chí Minh: (+84) 977 460 519 - Hà Nội: (+84) 983 131 351 - Email:
          love@itviec.com
        </p>
      </div>
    </footer>
  </body>
</html>
