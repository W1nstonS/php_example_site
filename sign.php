<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Регистрация/Вход</title>
      <link rel="stylesheet" href="css/regstyle.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Вход
            </div>
            <div class="title signup">
               Регистрация
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Вход</label>
               <label for="signup" class="slide signup">Регистрация</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="auth.php" class="login" method="post">
                  <div class="field">
                     <input type="text" name="LogLogin" id="LogLogin" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="LogPass" id="LogPass"  placeholder="Password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Вход">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="check.php" class="signup" method="post">
                  <div class="field">
                     <input type="text" name="RegLogin" id="RegLogin" placeholder="Введите логин" required>
                  </div>
                  <div class="field">
                     <input type="password" name="RegPass" id="RegPass" placeholder="Введите пароль" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Зарегистрироваться">
                    </div>
               </form>
            </div>
         </div>
      </div>

      <script type="text/javascript">
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>

   </body>
</html>
