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

// Retirar caracteres especiais

const input = document.getElementById("txtAge");

  input.addEventListener("input", function () {
    // Remove qualquer caractere que não seja dígito
    this.value = this.value.replace(/[^0-9]/g, "");
  });

