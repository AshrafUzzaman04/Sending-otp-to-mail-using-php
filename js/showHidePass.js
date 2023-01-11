var password = document.getElementById("password");
var hide = document.getElementById("hide");
var show = document.getElementById("show");

function toggle() {
  if (password.type === "password") {
    password.type = "text";
    hide.style.display = "inline-block";
    show.style.display = "none";
  } else {
    password.type = "password";
    hide.style.display = "none";
    show.style.display = "inline-block";
  }
}
