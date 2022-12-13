<?php
   if(is_array($suatt)){
       extract($suatt);
   }
?>

<div class="row">
    <div class="rowformtile">
        <h1>Cập nhật tin tức </h1>
    </div>
    <div class="rowformcontenr">
        <form action="index.php?act=updatett" method="post" enctype="multipart/form-data" >
        <div class="rowinput">
            
            <input type="hidden" name="idtintuc" id="" value="<?php echo $idtintuc ?>">
        </div>
        <div class="rowinput">
            tiêu đề <br>
            <input type="text" name="tieude" id="" value="<?php echo $tieude ?>">
        </div>
        <div class="rowinput">
            nội dung<br>
            <textarea name="noidung" id="" cols="30" rows="10"><?php echo $noidung ?></textarea>
        </div>
        
        
        
        <div class="rowinput">
  
        <div class="rowsubmit">
            <input type="submit" name="capnhat" id="" value="cập nhập">
            <input type="reset" name="" id="" value="nhập lại">
            <a href="index.php?act=listtt"><input type="button" name="" id="" value="danh sách"></a>
        </div>
            <?php
            if(isset($thongbao)&& $thongbao!= ""){
                echo $thongbao;
            }
            ?>
        </form>
    </div>

</div>

</div>