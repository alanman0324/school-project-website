document.addEventListener("DOMContentLoaded", function () {
    const menuCheckbox = document.getElementById("switch"); // 漢堡選單的 checkbox
    const navMenu = document.querySelector("nav"); // 選單區塊
    const menuLinks = document.querySelectorAll("nav a"); // 選單內所有連結

    if (!menuCheckbox || !navMenu) {
        console.error("找不到 'switch' 或 'nav'，請檢查 HTML 結構。");
        return;
    }

    document.addEventListener("click", function (event) {
        // 確保 menuCheckbox 被勾選，並且點擊的地方不在選單內
        if (menuCheckbox.checked && !navMenu.contains(event.target) && event.target !== menuCheckbox) {
            menuCheckbox.checked = false;
            document.body.classList.remove("menu-open");
        }
    });

    // 點擊選單內連結後關閉選單
    menuLinks.forEach(link => {
        link.addEventListener("click", function () {
            menuCheckbox.checked = false;
            document.body.classList.remove("menu-open");
        });
    });
});
