<div class="row_one">
    <?php 
        //  $_SESSION["idlop"] = $_GET["idlophoc"];
    ?>

       <div class="contenner">
        <div class="MainList">
            <div class="header">

            </div>
            <div class="kmau">
                <div class="headding">
                    <label for="check" class="icon">
                        <img src="./img/Vector.png" alt="">
                    </label>
                    <div class="xinchao">
                        <p>xin chào ........</p>
                    </div>
                </div>
                <div class="hass">
                    <h2>Cơ Sở</h2>
                </div>
                <div class="ca1">
                    <form>
                        <input type="text" placeholder="Tìm kiếm trên lớp">
                    </form>

                    <div class="selech">
                        <select name="format" id="hihi">
                            <option value="none">Trạng Thái</option>
                            <option value="finished">Finished</option>
                            <option value="runing">Runing</option>
                        </select>
                    </div>
                    <form>
                        <input type="text" placeholder="Giáo Viên">
                    </form>

                    <div class="seasc">
                        <button>seasch</button>
                    </div>

                </div>
                <div class="bentrong">

                    <form action="#" id="classStu">
                        <table border="1">
                           
                           <tr>
                                <td>Tên Lớp</td>
                                <td>Khóa Học</td>
                                <td>Trạng Thái</td>
                                <td>Giảng Viên</td>
                                <td>Số Lượng</td>
                                <a href=""></a>
                                
                                <td></td>
                            </tr>
                            <?php 
                                foreach ($listlh as $lh)  {
                                    extract($lh);
                                    $load="index.php?act=loadoneclass&idlophoc=".$idlophoc;
                                    echo '  <tr>
                                                <td>'.$tenlophoc.'</td>
                                                <!-- <td>Khóa Học</td>
                                                <td>Trạng Thái</td>
                                                <td>Giảng Viên</td>
                                                <td>Số Lượng</td> -->
                                                <td><button class="show"><a href="'.$load.'">Xem</a></button></td>
                                             </tr>';
                                }
                            ?>
                        </table>
                    </form>
                </div>


            </div>
        </div>

    </div>
      
      
        <button><a href="index.php?act=diemdanh" >Điểm Danh</a></button>

    </div>
