

let icon = document.querySelector(".icon");
function showMenu() {
    let heading = document.querySelector(".header");
    let menu = document.querySelector(".menu-mobile");
    console.log(menu);
    // icon.innerHTML = ``;
    if (icon) {
        heading.innerHTML += `
        <label for="check"></label>
        <input type="checkbox" hidden name="" id="check">
        <div class="menu-mobile">
            <label for="check" class="hi">
                <img src="../img/Vector.png" alt="">
            </label>
            <div class="mau">

                <img src="../img/image 10.png" alt="">
                <div class="menu">
                <div class="img_text">
                    <a href="../admin/trangchu.php"><i class="fa-solid fa-house-user"></i></a>
                    <a href="../admin/trangchu.php" id="abc">Trang chủ</a>
                </div>
                <div class="img_text">
                    <a href="../admin/index.php?act=lophoc"<i class="fa-solid fa-table"></i> </a>
                    <a href="../admin/index.php?act=lophoc" id="abc">Lớp Học</a>
                </div>
                <div class="img_text">
                    <a href="index.php?act=showallsv"> <i class="fa-solid fa-user"></i></a>
                    <a href="index.php?act=showallsv" id="abc">Học Sinh</a>
                </div>
                <div class="img_text">
                    <a href="index.php?act=showallgv"><i class="fa-solid fa-book-open-reader"></i></a>
                    <a href="index.php?act=showallgv" id="abc">Giao Viên</a>
                </div>
                <div class="img_text">
                    <a href="./indexkhoahoc.html"><i class="fa-solid fa-book"></i></a>
                    <a href="./indexkhoahoc.html" id="abc">Khóa Học</a>
                </div>
                <div class="img_text">
                        <a href="./indexlichhoc.html"><i class="fa-solid fa-id-card"></i></a>
                        <a href="./indexlichhoc.html" id="abc">lich hoc</a>

                    </div>

            </div>
            </div>
        </div>
        `;
        menu.style.width = "300px";
        menu.style.height = "300px";
        menu.style.overflow = "none";
    }
}
icon.addEventListener("click", showMenu);


