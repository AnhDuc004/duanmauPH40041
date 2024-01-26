<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH THỐNG KÊ</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th>MÃ DANH MỤC</th>
                <th>LOẠI HÀNG</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
            </tr>
            <?php
                foreach($listthongke as $tk){
                    extract($tk);
                    echo '<tr>
                    <th>'.$madm.'</th>
                    <th>'.$tendm.'</th>
                    <th>'.$countsp.'</th>
                    <th>'.$maxprice.'</th>
                    <th>'.$minprice.'</th>
                    <th>'.$avgprice.'</th>
                </tr>';
                }
            
            ?>
           
           </table>
           </div>
           <!-- <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        <!-- <a href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM"></a> -->
           </div>
          </form>
         </div>
        </div>