function showHide() {
    const password = document.getElementById("password");
    const icon = document.getElementById("icon-lock");

    if (password.type === "password") {
        password.type = "text";
        icon.setAttribute("name", "lock-open");
    } else {
        password.type = "password";
        icon.setAttribute("name", "lock-closed");
    }
}