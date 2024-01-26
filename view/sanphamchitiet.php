<main class="catalog  mb ">
          
            <div class="boxleft">
            <div class="mb">
                <?php
                extract($onesp);
                ?>
                <div class="box_title"><?=$name?></div>
                    <div class="box_content">
                        <?php
                            extract($onesp);
                            $hinh = $img_path.$img;
                            echo '<div class=" mb spct"> <img src="'.$hinh.'"></div> ';
                            echo $desc;
                        ?>
                    </div>
            </div>
            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("binhluanform.php", {idpro: <?=$idpro?>});
                });
            </script> -->
            <div class="row">
                <iframe src="view/binhluan/binhluanform.php?idpro=<?=$id?>" frameborder="0" width="100%" height="300px"></iframe>
            </div>
                <div class="mb">
                    <div class="box_title">Sản Phẩm Cùng Loại</div>
                        <div class="box_content">
                            <?php
                                foreach($sp_cung_loai as $sp){
                                    extract($sp);
                                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                                }
                            ?>    
                        </div>
                </div>
            </div>
      <!-- box right -->
            <div class="boxright"> 
                <?php include "boxright.php"; ?>
            </div>
           
        </main>