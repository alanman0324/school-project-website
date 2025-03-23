document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("noticeModal");
    const closeModal = document.getElementById("closeModal");
    const doNotShowAgain = document.getElementById("doNotShowAgain");

    if (!modal || !closeModal || !doNotShowAgain) {
        console.error("找不到某些元素，請檢查 HTML 結構！");
        return;
    }

    // 獲取今天的日期 (格式: YYYY-MM-DD)
    const today = new Date().toISOString().split("T")[0];

    // 如果 localStorage 中存有今天的記錄，則不顯示彈窗
    if (localStorage.getItem("hideModal") === today) {
        modal.style.display = "none";
    } else {
        modal.style.display = "flex"; // 顯示彈窗
    }

    // 當按下關閉按鈕
    closeModal.addEventListener("click", function () {
        if (doNotShowAgain.checked) {
            localStorage.setItem("hideModal", today); // 記錄今天不再顯示
        }
        modal.style.display = "none"; // 關閉彈窗
    });
});
