var name = localStorage.getItem("name");
var surname = localStorage.getItem("surname");
var phone = localStorage.getItem("phone");
var email = localStorage.getItem("email");

document.getElementById("name").innerHTML = name;
document.getElementById("surname").innerHTML = surname;
document.getElementById("phone").innerHTML = phone;
document.getElementById("email").innerHTML = email;