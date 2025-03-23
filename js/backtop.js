document.addEventListener("DOMContentLoaded", function () {
    let backTop = document.getElementById("backTop");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
            backTop.classList.add("show"); // 顯示按鈕
        } else {
            backTop.classList.remove("show"); // 隱藏按鈕
        }
    });

    backTop.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});
