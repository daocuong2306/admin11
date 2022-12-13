

let icon = document.querySelector(".icon");
function showMenu() {
    let heading = document.querySelector(".header");
    let menu = document.querySelector(".menu-mobile");
    console.log(menu);
    // icon.innerHTML = ``;
    if (icon) {
        heading.innerHTML += `
    
        `;
        menu.style.width = "300px";
        menu.style.height = "300px";
        menu.style.overflow = "none";
    }
}
icon.addEventListener("click", showMenu);


