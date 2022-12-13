<table border="1" >
    <tr>
        <th>tiêu đề</th>
        <th>nội dung</th>
    </tr>
   
   <?php 
   foreach ($listtintuc as $value){
         extract($value);
         $suatt="index.php?act=suatt&id=".$idtintuc;
         $xoatt="index.php?act=xoatt&id=".$idtintuc;
         echo '
         <tr>
    <td>'.$tieude.'</td>
    <td>'.$noidung.'</td>
    <td> <button><a href="'.$suatt.'">sửa</a></button> <button><a href="'.$xoatt.'">xóa</a></button> </td>
   </tr>
         ';

   }
   
   ?>
</table>