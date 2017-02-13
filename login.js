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
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var showString = "";
        if (isEmail(username)) {
            if (password.length < 6) {
                //window.location = "success.html"; // Redirecting to other page.
                document.getElementById("password").value = "";
                showString += "密碼長度不足";
            }
        } else {
            showString += "帳號或密碼格式錯誤";
            document.getElementById("username").value = "";
            document.getElementById("password").value = "";
        }
        if(showString != "") alert(showString);
    });
});