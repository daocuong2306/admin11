
<div class="row">
            <div class="rowformtile">
                <h1>Danh sách giáo viên</h1>
            </div>
            <!-- <select name="id">
                    <option value="0" selected> tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'"> '.$ten_danh_muc.' </option>';

                } 
                ?>
                <option value=""></option>
            </select>
            </form> -->
            <div class="rowtable">
                <table border="1px">
                    <tr>
                        
                        <th>id giaso vien</th>
                        <th>tên giáo viên </th>
                        <th>Địa chỉ </th>
                        <th>Tuổi </th>
                        <th>Email </th>
                        <th>Liên hệ </th>
                        <th>Ảnh </th>
                        <th>Giới tính</th>
                        <th>tên lớp dạy</th>

                    </tr>
                    
                
            </select>
                    <?php
                         foreach ($giaovien as $value ){
                            
                             extract($value);
                             $suagv="index.php?act=suagv&id=".$idgiaovien;
                             $xoagv="index.php?act=xoagv&id=".$idgiaovien;
                             $avatar = "../uploadimg/".$img;
                             
                             if(is_file($avatar)){
                                 $img = "<img src='".$avatar."' height='80'>";
                             }else{
                                 $img = "no photo";
                             }
                             foreach($listlophoc as $key){extract($key);}
                             
                             echo ' 
                         <tr>
                        
                        <td>'.$idgiaovien.'</td>
                        <td>'.$name.'</td>
                        <td>'.$adess.'</td>    
                         <td>'.$age.'</td> 
                         <td>'.$gmail.'</td>                                                                                               
                        <td>'.$tell.'</td>
                        <td>'.$img.'</td>
                         <td>'.$gioitinh.'</td>
                         <td> 
                             <option value="'.$idlophoc.'"> '.$tenlophoc.' </option>
                                </td>
                         
                        
                          
                        <td><a href="'.$suagv.'"><input type="button" name="" id="" value="sửa"></a> <a href="'.$xoagv.'"><input type="button" name="" id="" value="xóa"></a></td>
                         </tr>
                    ';
                         }
                    ?> 
                    <td>
                        <?php foreach ($listlophoc as $value) {
                    extract($value);
                    echo '<option value="'.$idlophoc.'"> '.$tenlophoc.' </option>';
                        }
                        ?>
                </td>
                </table>
            </div>
            <div class="rowbuttom">
                
                <a href="index.php?act=addsv"><input type="button" name="" id="" value="nhập thêm"></a>
            </div>
        </div>
        