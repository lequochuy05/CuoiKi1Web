<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onix</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}
html {
  scroll-behavior: smooth;
}
::-webkit-scrollbar {
  width: 15px;
}

::-webkit-scrollbar-track {
  border-radius: 5px;
  box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.26);
}

::-webkit-scrollbar-thumb {
  border-radius: 5px;
  background: linear-gradient(to right, #c72092, #6c14d0);
}
nav {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-around;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
  background: white;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;
}

nav .logo {
  font-size: 35px;
  color: #c72092;
  margin: 5px 0;
  cursor: pointer;
  position: relative;
  left: -4%;
}
nav ul {
  list-style: none;
}

nav ul li {
  display: inline-block;
  margin: 5px 15px;
}

nav ul li a {
  text-decoration: none;
  color: black;
  transition: 0.2s;
}

nav ul li a:hover {
  color: #c72092;
}
nav .icone i {
  margin: 0 4px;
  cursor: pointer;
  font-size: 18px;
  transition: 0.3s;
}

nav .icone i:hover {
  color: #c72092;
}

nav ul li.sale {
  position: relative;
  animation: blink 0.5s infinite alternate;
  color: #c72092;
  font-weight: bold;
  text-transform: uppercase;
  border-bottom: 2px solid #c72092;
  padding-bottom: 2px;
}

@keyframes blink {
  from {
    opacity: 1;
  }
  to {
    opacity: 0.5;
  }
}
</style>
</head>
<body>
    <nav>
        <div class="logo">
            <h1><span>O</span>NIXshop</></h1>
        </div>

        <ul>
            <li class="sale"><a href="#">Sale</a> </li>    
            <li><a href="#">Trang Chủ</a></li>
            <li><a href="#">Thương hiệu</a></li>
            <li><a href="#">Về chúng tôi</a></li>
            <li><a href="#">Đánh giá</a></li>
            <li><a href="#">Dịch vụ</a></li>            
        </ul>

        <div class="icone">
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-solid fa-user"></i>
          
        </div>
    </nav>
</body>
</html>