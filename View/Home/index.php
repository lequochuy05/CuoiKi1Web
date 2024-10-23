
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONIX - Thế giới giày</title>  
    <link rel="Shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="home_style.css">
</head>
<body>
      <?php
          include "View/Menubar/index.php";
      ?>
    <section>
        <div id="menu-container">
        </div>
        <div class="main" id="Home">
            <div class="main_content">
                <div class="main_text">
                    <h1>Onix<br><span>sưu tập</span></h1>
                    <p style="margin-top: 40px;">
                        Chào mừng đến với thế giới của chúng tôi ONIX - nơi nơi mà phong cách và sự thoải mái hội tụ để tạo nên những bước chân đẹp mắt và tự tin. 
                        Tại đây, chúng tôi không chỉ bán giày, mà còn mang đến cho bạn một trải nghiệm mua sắm độc đáo và thú vị. 
                        Bước chân đầu tiên vào trang web của chúng tôi, bạn sẽ bắt gặp những tinh hoa của thế giới giày dép, 
                        từ những mẫu thiết kế thời trang cho đến những đôi giày đa dụng và thoải mái. 
                        Hãy để chúng tôi dẫn dắt bạn trên hành trình khám phá những bước đi mới với sự tự tin và phong cách. 
                        Cùng bắt đầu chuyến hành trình mua sắm của bạn và để chúng tôi là người bạn đồng hành đáng tin cậy!
                    </p>
                </div>
                <div class="main_image">
                    <img src="img/home/shoes.png" alt="">
                   </div>
            </div> 
            <div class="social_icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="button">
                <a href="#Products">Mua Ngay</a>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </section>
    
    <!---Products------------------------------------------->

    <div class="products" id="Products">
        <h1>Thương hiệu</h1>
        <div class="box">
        <!------Card---------------------------------------------------------------------->
            <div class="card">
                  <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                  </div>  

                  <div class="image">
                        <img id="img1" src="img/nike/logo.png">
                  </div>

                  <div class="products_text">
                        <h2>Nike</h2>
                        <p>
                            Là một trong những “ông lớn” của ngành thời trang giày dép.
                        </p>
                        <div class="products_star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <a href="./nike.html" class="btn">Xem thêm</a>
                  </div>
            </div>
            <div class="card">
                <div class="small_card">
                  <i class="fa-solid fa-heart"></i>
                  <i class="fa-solid fa-share"></i>
                </div>  

                <div class="image">
                      <img id="img2" src="img/converse/logoHome.png">
                </div>

                <div class="products_text">
                      <h2>Converse</h2>
                      <p>
                        Là một trong các hãng giày nổi tiếng được nhiều người ưa thích.
                      </p>
                      <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                      <a href="./converse.html" class="btn">Xem thêm</a>
                </div>
          </div>
          <div class="card">
            <div class="small_card">
              <i class="fa-solid fa-heart"></i>
              <i class="fa-solid fa-share"></i>
            </div>  

            <div class="image">
                  <img id="img3" src="img/adidas/logoHome.png">
            </div>

            <div class="products_text">
                  <h2>Adidas</h2>
                  <p>
                    Là một trong những "ông lớn" về những sản phẩm giày dép.
                  </p>
                  <div class="products_star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                  </div>
                  <a href="./adidas.html" class="btn">Xem thêm</a>
            </div>
      </div>
      <div class="card">
        <div class="small_card">
          <i class="fa-solid fa-heart"></i>
          <i class="fa-solid fa-share"></i>
        </div>  

        <div class="image">
              <img id="img4" src="img/vans/logoHome.jpg">
        </div>

        <div class="products_text">
              <h2>Vans</h2>
              <p>
                Là thương hiệu được tạo ra dành cho các skater.
              </p>
              <div class="products_star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
              <a href="./vans.html" class="btn">Xem thêm</a>
        </div>
  </div>
  <div class="card">
                  <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                  </div>  

                  <div class="image">
                        <img id="img5" src="img/new Balance/logoHome.png">
                  </div>

                  <div class="products_text">
                        <h2>New Balance</h2>
                        <p>
                            Là cái tên mà dân snaeker nào cũng biết.
                        </p>
                        <div class="products_star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <a href="./new Balance.html" class="btn">Xem thêm</a>
                  </div>
            </div>

            <div class="card">
                <div class="small_card">
                  <i class="fa-solid fa-heart"></i>
                  <i class="fa-solid fa-share"></i>
                </div>  

                <div class="image">
                      <img id="img6" src="img/puma/logoHome.png">
                </div>

                <div class="products_text">
                      <h2>Puma</h2>
                      <p>
                        Yêu thích sự đơn giản nhưng thuận tiện lại đảm bảo sự êm ái.
                      </p>
                      <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div   >
                      <a href="./puma.html" class="btn">Xem thêm</a>
                </div>
          </div>

          <div class="card">
            <div class="small_card">
              <i class="fa-solid fa-heart"></i>
              <i class="fa-solid fa-share"></i>
            </div>  

            <div class="image">
                  <img id="img7" src="img/supreme/logoHome.png">
            </div>

            <div class="products_text">
                  <h2>Supreme</h2>
                  <p>
                    Giày của Supreme sẽ giúp bạn khẳng định cá tính và độ chịu chơi. 
                  </p>
                  <div class="products_star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                    <a href="./supreme.html" class="btn">Xem thêm</a>
                 </div>
            </div>

            <div class="card">
                <div class="small_card">
                  <i class="fa-solid fa-heart"></i>
                  <i class="fa-solid fa-share"></i>
                </div>  

                <div class="image">
                      <img id="img8" src="img/fila/logoHome.png">
                </div>

                <div class="products_text">
                      <h2>Fila</h2>
                      <p>
                       Giày của Fila sẽ giúp bạn khẳng định cá tính và độ chịu chơi. 
                      </p>
                      <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                      <a href="./fila.html" class="btn">Xem thêm</a>
                </div>
          </div>
        </div>       
    </div>

<!------About---------------------------------------->
    <div class="about" id="About">
        <h1>Về<span>Chúng tôi</span></h1>
            <div class="about_main">
                <div class="about_image">
                    <div class="about_small_image">
                        <img src="img/home/red_shoes1.png" onclick="show(this)">
                        <img src="img/home/red_shoes2.png" onclick="show(this)">
                        <img src="img/home/red_shoes3.png" onclick="show(this)">
                        <img src="img/home/red_shoes4.png" onclick="show(this)">
                        
                    </div>

                    <div class="image_contaner">
                         <img src="img/home/red_shoes1.png" id="imagebox">
                    </div>
                </div>
                <div class="about_text">
                    <p>
                        Tạo dấu ấn cá nhân và tự tin bước đi với những đôi giày từ Onix - nơi mà chất lượng và đa dạng kiểu dáng gặp gỡ. <br>
                        Bạn sẽ khám phá được bộ sưu tập đa dạng từ những đôi sneakers thời trang cho đến những đôi boots bền bỉ, 
                        từ những thiết kế độc đáo cho đến những màu sắc sặc sỡ.
                        Onix cam kết đem đến cho bạn những trải nghiệm mua sắm tuyệt vời nhất, 
                        từ quá trình chọn lựa sản phẩm đến khi bạn bước ra khỏi cửa hàng với sự tự tin mới mẻ. <br>
                        Chúng tôi hiểu rằng mỗi đôi giày không chỉ là một sản phẩm, mà còn là một biểu tượng của phong cách và cá tính riêng của bạn.
                        Hãy để Onix là người bạn đồng hành tin cậy, luôn đồng hành cùng bạn trên mọi nẻo đường, 
                        từ những buổi dạo phố đến những cuộc phiêu lưu xa xôi. <br>
                        Bạn không chỉ đơn thuần mua giày, mà còn mua sự tự tin và sự khẳng định về bản thân.
                        Chọn Onix là chọn sự tin tưởng và chất lượng. Hãy khám phá ngay hôm nay và biến giấc mơ về phong cách thành hiện thực! <br>
                        CHÀO MỪNG BẠN ĐẾN VỚI ONIX - Nơi mà đặt chất lượng lên hàng đầu !!!! <br>
                        <br>
                        <br>
                        <br>
                        <span style="margin-left: 400px;">Qhuy - Onix</span>
                    </p>
                </div>
            </div>
            <a href="#Products" class="about_btn">Mua ngay</a>
        </div>
<!---Review-------------------------------------------->
        <div class="review" id="Review">
            <h1><span>Đánh giá</span></h1>
            <div class="review_box">
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
                            <div class="profile_image">
                                <img src="./img/home/Cmt1.jpg">
                            </div>

                            <div class="name">
                                <strong>No Name</strong>

                                <div class="like">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <p>
                            Mẫu mã đẹp, giá cả hợp lý!! <br>
                            Tôi cho shop này 5 sao
                        </p>
                    </div>
                </div>
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
                            <div class="profile_image">
                                <img src="./img/home/Cmt2.jpg">
                            </div>

                            <div class="name">
                                <strong>Soda</strong>

                                <div class="like">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <p>
                           Rất đẹp, hàng chất lượng, giao hàng nhanh, giá cả phải chăng!!!
                        </p>
                    </div>
                </div>
                <div class="review_card">
                    <div class="card_top">
                        <div class="profile">
                            <div class="profile_image">
                                <img src="img/home/facebook.png">
                            </div>

                            <div class="name">
                                <strong>NaKotex</strong>

                                <div class="like">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <p>
                            Customer friendly shop, reasonable prices, quick delivery. I like it so much!!!
                        </p>
                    </div>
                </div>  
            </div>
            <div class="input_cmt">
                <form id="reviewForm">
                    <div id="p1">
                        <label for="rating">Đánh giá:</label>
                        <div class="starRating" id="rating">
                            <span class="fa fa-star" data-rating="1"></span>
                            <span class="fa fa-star" data-rating="2"></span>
                            <span class="fa fa-star" data-rating="3"></span>
                            <span class="fa fa-star" data-rating="4"></span>
                            <span class="fa fa-star" data-rating="5"></span>
                        </div>
                    </div>
                <br>
                  
                    <input type="text" name="name" id="name" placeholder="Nhập tên"><br>
                    <input type="text" name="comment" id="comment" placeholder="Nhập bình luận tại đây !!!"><br>
                    <input type="submit" value="Gửi">
                </form>
            </div>
        </div>

    <!-------Services--------------------------->
    <div class="services" id="Services">
        <h1><span>Dịch vụ</span></h1>
            <div class="services_cards">
                <div class="services_box">
                    <i class="fa-solid fa-truck-fast"></i>
                    <h3>Giao hàng nhanh</h3>
                    
                </div>
               
                <div class="services_box">
                    <i class="fa-solid fa-rotate-left"></i>
                    <h3>Hoàn trả trong vòng 10 ngày</h3>
                    
                </div>

                <div class="services_box">
                    <i class="fa-solid fa-headset"></i>
                    <h3>Hỗ trợ 24/7</h3>
                  
                </div>
                
            </div>
    </div>

<!-----Footer--------------------->
<footer>
    <div class="footer_main">
        <div class="tag">
            <h1>Liên Hệ</h1>
            <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Th%C3%B4ng+tin+v%C3%A0+Truy%E1%BB%81n+th%C3%B4ng+Vi%E1%BB%87t+-+H%C3%A0n/@15.9751384,108.2500698,17z/data=!4m14!1m7!3m6!1s0x3142108997dc971f:0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!8m2!3d15.9752931!4d108.252355!16s%2Fg%2F1yjg80dyy!3m5!1s0x3142108997dc971f:0x1295cb3d313469c9!8m2!3d15.9752931!4d108.252355!16s%2Fg%2F1yjg80dyy?entry=ttu"><i class="fa-solid fa-house"></i>470 Đ. Trần Đại Nghĩa, Khu đô thị, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam </a>
            <a href="#"><i class="fa-solid fa-phone"></i>0706163387</a>
            <a href="#"><i class="fa-solid fa-envelope"></i>lehuy2425@gmail.com</a>
        </div>

        <div class="tag">
            <h1>Được giúp đỡ</h1>
           <a href="#" class="center">QHUY</a>
           <a href="https://www.apple.com/vn/" class="center">APPLE INC</a>
           <a href="https://www.aramco.com/" class="center">SAUDI ARAMCO</a>
           <a href="https://www.microsoft.com/vi-vn" class="center">MICROSOFT CORP</a>
        </div>

        <div class="tag">
            <h1>Chi Nhánh</h1>
            <a href="https://www.google.com/maps/place/Ng%C5%A9+H%C3%A0nh+S%C6%A1n/@16.0685698,107.9218081,11z/data=!4m15!1m8!3m7!1s0x314219c792252a13:0x1df0cb4b86727e06!2zxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!3b1!8m2!3d16.0544563!4d108.0717219!16zL20vMDI2eXFm!3m5!1s0x31420dd4e14b2edb:0xbc6e1faf738be4c5!8m2!3d16.0034756!4d108.2645803!16s%2Fm%2F02623q9?entry=ttu" class="center">Đà Nẵng</a>
            <a href="https://www.google.com/maps/place/Di+t%C3%ADch+L%E1%BB%8Bch+s%E1%BB%AD+Qu%E1%BB%91c+gia+-+Khu+T%C6%B0%E1%BB%9Fng+ni%E1%BB%87m+Li%E1%BB%87t+s%C4%A9+Ng%C3%A3+ba+Gi%E1%BB%93ng/@10.8823154,106.570566,12.33z/data=!4m15!1m8!3m7!1s0x317529292e8d3dd1:0xf15f5aad773c112b!2zVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!3b1!8m2!3d10.8230989!4d106.6296638!16zL20vMGhuNGg!3m5!1s0x31752b8571f040a3:0x7c0c95277cd166ac!8m2!3d10.868225!4d106.5585429!16s%2Fg%2F11qp2y296s?entry=ttu" class="center">TP Hồ Chí Minh</a>
            <a href="https://www.google.com/maps/place/H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.0227971,105.841679,16z/data=!4m6!3m5!1s0x3135ab9bd9861ca1:0xe7887f7b72ca17a9!8m2!3d21.0277644!4d105.8341598!16zL20vMGZuZmY?entry=ttu" class="center"">Hà Nội</a>
            <a href="https://www.google.com/maps/place/H%E1%BA%A3i+Ph%C3%B2ng,+Vi%E1%BB%87t+Nam/@20.8467319,106.6575469,13z/data=!3m1!4b1!4m6!3m5!1s0x314a7af39e3f1ad3:0xa5ffc85ff87a07e8!8m2!3d20.8449115!4d106.6880841!16zL20vMDJtYnRx?entry=ttu"class="center"">Hải Phòng</a>
            <a href="https://www.google.com/maps/place/C%E1%BA%A7n+Th%C6%A1,+Ninh+Ki%E1%BB%81u,+C%E1%BA%A7n+Th%C6%A1,+Vi%E1%BB%87t+Nam/@10.0341844,105.7163705,13z/data=!3m1!4b1!4m6!3m5!1s0x31a0629f6de3edb7:0x527f09dbfb20b659!8m2!3d10.0451618!4d105.7468535!16zL20vMDNmY20z?entry=ttu"class="center"">Cần Thơ</a>
        </div>

        <div class="tag">
            <h1>Theo dõi</h1>
            <div class="social_link">
                <a href="https://www.facebook.com/lqh205"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com/QuocHuy_Sonix"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/lqhuy_05/"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>

        <div class="tag">
            <h1>Liên hệ với <br> chúng tôi</h1>
            <div class="search_bar">
                <input type="text" placeholder="Nhập email tại đây">
                <button type="submit">Gửi</button>
               <a href="Login.html">Đăng xuất</a>
            </div>
        </div>
    </div>
</footer>
</body>
<script>
    ScrollReveal({
    reset: true,
    distance: "80px",
    duration: 2000,
    delay: 100,
  });
  ScrollReveal().reveal("", { origin: "top" });
  ScrollReveal().reveal(".main .main_content .main_text h1", { origin: "right" });
  ScrollReveal().reveal(
    ".main, .products .box, .products .box .card, .about, .review, .services, footer",
    {
      origin: "bottom",
    }
  );
  ScrollReveal().reveal(".products h1", { origin: "left" });

</script>
</html>

