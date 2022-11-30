let show = document.querySelectorAll(".show");
// console.log(show)
let all = document.querySelector(".all");
if(all.style.height < "500px") {
    all.style.height = "1000px";
} else {
    all.style.height = "auto";
}
function showmmain() {
    let Main = document.querySelector(".all");
    if (Main.style.display == "none") {
        Main.style.display = "block";
    }
    else {
        Main.style.display = "none";
    }
}
for(let item of show) {
    item.addEventListener("click", showmmain);
}
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
                <img src="./img/Vector.png" alt="">
            </label>
            <div class="mau">

                <img src="./img/image 10.png" alt="">
                <div class="menu">
                <div class="img_text">
                    <a href="./admintrangchu.html"><img src="./img/image 1.png" alt=""></a>
                    <a href="./admintrangchu.html" id="abc">Trang chủ</a>
                </div>
                <div class="img_text">
                    <a href="./indexcoso.html"> <img src="./img/image 3.png" alt=""></a>
                    <a href="./indexcoso.html" id="abc">Cơ Sở</a>
                </div>
                <div class="img_text">
                    <a href="./indexhocsinh.html"> <img src="./img/image 2.png" alt=""></a>
                    <a href="./indexhocsinh.html" id="abc">Học Sinh</a>
                </div>
                <div class="img_text">
                    <a href="./indexgiaovien.html"><img src="./img/image 4.png" alt=""></a>
                    <a href="./indexgiaovien.html" id="abc">Giao Viên</a>
                </div>
                <div class="img_text">
                    <a href="./indexkhoahoc.html"><img src="./img/image 5.png" alt=""></a>
                    <a href="./indexkhoahoc.html" id="abc">Khóa Học</a>
                </div>
                <div class="img_text">
                        <a href="./indexlichhoc.html"><img src="./img/image 5.png" alt=""></a>
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


