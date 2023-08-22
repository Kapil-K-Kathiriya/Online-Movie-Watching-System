function validate() {
  var firstname = document.getElementById("fname").value;
  var secondname = document.getElementById("sname").value;
  var mail = document.getElementById("email").value;
  var mnumber = document.getElementById("number").value;
  var password = document.getElementById("pass").value;
  var cpassword = document.getElementById("cpass").value;

  if (firstname == "") {
    document.getElementById("fnm").innerHTML = "Please enter a first name";
    return false;
  } else {
    document.getElementById("fnm").innerHTML = " ";
  }
  if (!isNaN(firstname)) {
    document.getElementById("fnm").innerHTML =
      "Please enter the Characters only";
    return false;
  }

  if (secondname == "") {
    document.getElementById("snm").innerHTML = "Please enter a second name";
    return false;
  } else {
    document.getElementById("snm").innerHTML = " ";
  }
  if (!isNaN(secondname)) {
    document.getElementById("snm").innerHTML =
      "Please enter the Characters only";
    return false;
  }

  if (mail == "") {
    document.getElementById("em").innerHTML = "Please enter a email";
    return false;
  }
  var emailformat = /^[a-z A-z 0-9_\.\+]{2,}\@{1}[a-z A-Z]{2,}\.{1}[a-z]{2,6}\.{0,1}[a-z]{0,3}$/;
  if (emailformat.test(mail)) {
    document.getElementById("em").innerHTML = "";
  } else {
    document.getElementById("em").innerHTML = "Please enter correct email";
    return false;
  }

  if (mnumber == "") {
    document.getElementById("num").innerHTML = "Please enter a number";
    return false;
  } else {
    document.getElementById("num").innerHTML = " ";
  }
  if (isNaN(mnumber)) {
    document.getElementById("num").innerHTML = "Please enter number only";
    return false;
  }
  if (mnumber.length !== 10) {
    document.getElementById("num").innerHTML =
      "Please enter number in 10 digits only";
    return false;
  }

  if (password == "") {
    document.getElementById("ps").innerHTML = "Please enter a Password";
    return false;
  } else {
    document.getElementById("ps").innerHTML = " ";
  }
  if (password.length <= 6) {
    document.getElementById("ps").innerHTML =
      "Enter Password more than 6 characters";
    return false;
  } else {
    document.getElementById("ps").innerHTML = " ";
  }

  if (cpassword == "") {
    document.getElementById("cps").innerHTML =
      "Please enter a confirm password";
    return false;
  }
  if (password.length <= 6) {
    document.getElementById("cps").innerHTML =
      "Enter Password more than 6 characters";
    return false;
  }
  if (password != cpassword) {
    document.getElementById("cps").innerHTML = "Confirm Password not matched ";
    return false;
  }
}
