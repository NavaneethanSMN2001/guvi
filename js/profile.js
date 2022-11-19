var userDetails = localStorage.getItem("userDetails");
var users = JSON.parse(localStorage.getItem("userDetails"));

document.getElementById("firstName").value = users.firstName;
document.getElementById("lastName").value = users.lastName;
document.getElementById("contactNo").value = users.contactNo;
document.getElementById("dob").value = users.dob;
document.getElementById("age").value = users.age;
document.getElementById("gender").value = users.gender;
document.getElementById("address").value = users.address;
document.getElementById("email").value = users.email;
