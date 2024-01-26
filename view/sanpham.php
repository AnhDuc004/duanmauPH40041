<main class="catalog  mb ">
          
            <div class="boxleft">
            <div class="mb">
                
                <div class="box_title">SẢN PHẨM  <strong><?=$tendm?></strong></div>
                    <div class="box_content">
                        <?php
                            foreach($dssp as $sp){
                                extract($sp);
                                $hinh = $img_path.$img;
                                $linksp = "index.php?act=sanphamct&idsp=".$id;
                                echo '<div class="box_items">
                                <div class="box_items_img">
                                <a class="item_name" href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                                   <div class="add" href="">ADD TO CART</div>
                                </div>
                                 <a class="item_name" href="'.$linksp.'">'.$name.'</a>
                                 <p class="price">$'.$price.'</p>
                                 
                              </div>';
                            }
                        ?>
                    </div>
            </div>
                <div class="mb">
                    <div class="box_title">Bình Luận</div>
                        <div class="box_content">
                                
                        </div>
                </div>
                
            </div>
      <!-- box right -->
            <div class="boxright"> 
                <?php include "boxright.php"; ?>
            </div>
           
        </main>