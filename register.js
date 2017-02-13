function isEmail(email) {
    reg = /^[^\s]+@[^\s]+\.[^\s]{2,3}$/;
    if (reg.test(email)) {
        return true;
    } else {
        return false;
    }
}

$(document).ready(function () {
    $("#submit").click(function () {
        var account = document.getElementById("account").value;
        var password = document.getElementById("password").value;
        var password2 = document.getElementById("password2").value;

        var showString = "";
        if (!(isEmail(account))) {
            showString += "E-mail格式錯誤\n";
            document.getElementById("account").value = "";
        }
        if (password.length < 6) {
            //window.location = "success.html"; // Redirecting to other page.
            showString += "密碼長度不足，至少六個字元\n";
            document.getElementById("password").value = "";
            document.getElementById("password2").value = "";
        }
        if(password !== password2){
            showString += "兩次密碼輸入不相符\n";
            document.getElementById("password").value = "";
            document.getElementById("password2").value = "";
        }

        if(showString != "") {
            alert(showString);
        }
    });
});