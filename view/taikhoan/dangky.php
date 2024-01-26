<main class="catalog  mb ">
          
            <div class="boxleft">
                <div class="mb">
                    <div class="box_title">Đăng Ký Thành Viên</div>
                        <div class="box_content form_account">
                        <form action="index.php?act=dangky" method="post">
                            <div>
                                <p>Tên Đăng Nhập</p>
                                <input type="text" name="user" placeholder="user">
                            </div>
                            <div>
                                Email
                                <input type="email" name="email"  placeholder="email">
                            </div>
                            Mật khẩu
                            <div>
                                <input type="password" name="pass"  placeholder="pass">
                            </div>
                            <input type="submit" value="Đăng ký" name="dangky">
                            <input type="reset" value="Nhập lại">
                        </form>
                        <h3 class="thongbao">
                        <?php
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
                        </h3>
                    </div>
                </div>
                
            </div>
      <!-- box right -->
            <div class="boxright"> 
                <?php include "view/boxright.php"; ?>
            </div>
           
</main>