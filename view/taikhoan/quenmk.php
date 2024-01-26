<main class="catalog  mb ">
          
            <div class="boxleft">
                <div class="mb">
                    <div class="box_title">Quên Mật Khẩu</div>
                        <div class="box_content form_account">
                        <form action="index.php?act=quenmk" method="post">
                            <div>
                                Email
                                <input type="email" name="email"  placeholder="email">
                            </div>
                            <input type="submit" value="Xác Nhận" name="guiemail">
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