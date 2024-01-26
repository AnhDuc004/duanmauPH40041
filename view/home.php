<main class="catalog  mb ">
          
            <div class="boxleft">
                 <div class="banner">
                    <img id="banner" src="view/img/anh0.jpg" alt="">
                    <button class="pre" onclick="pre()">&#10094;</button>
                    <button class="next" onclick="next()">&#10095;</button>
                 </div>

            
           
            <div class="items">
            <?php
            
            foreach($spnew as $sp){
                extract($sp);
                $hinh = $img_path.$img;
                $linksp = "index.php?act=sanphamct&idsp=".$id;
                echo '<div class="box_items">
                <div class="box_items_img">
                <a class="item_name" href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                   
                </div>
                 <a class="item_name" href="'.$linksp.'">'.$name.'</a>
                 <p class="price">$'.$price.'</p>
                 
              </div>';
            }
             ?>
             <!-- <div class="box_items">
               <div class="box_items_img">
                  <img src="view/img/realme2.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="view/img/iphoneX.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="view/img/iphoneX.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/item1.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/item0.jfif" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/galaxyJ4.jfif" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/iphoneX.jpg" alt="">
                  <a class="add" href="">ADD TO CART</a>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/item0.jfif" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/anh5.jpg" alt="">
                  <div class="add" ><a href="danhsach.html">ADD TO CART</a></div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>

             </div> -->
             
             
            
        </div>
      </div>
            <div class="boxright">
               <?php include "boxright.php"; ?>
            </div>
           
        </main>