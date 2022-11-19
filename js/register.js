function register(event){
    console.log(event)
    event.preventDefault();
    firstName = document.getElementById("firstName");
    lastName = document.getElementById("lastName");
    contactNo = document.getElementById("contactNo");
    dob = document.getElementById("dob");
    age = document.getElementById("age");
    gender = document.getElementById("gender");
    address = document.getElementById("address");
    email = document.getElementById("email");
    password = document.getElementById("password");
console.log(firstName.value)

var url = 'http://localhost/project/php/register.php';

var data = {
    firstName:firstName.value,
    lastName:lastName.value,
    contactNo:contactNo.value,
    dob:dob.value,
    age:age.value,
    gender:gender.value,
    address:address.value,
    email: email.value,
    password: password.value
}
fetch(url, {
    method: "POST",
    body: data,
    headers: {
        "Content-type": "application/json; charset=UTF-8"
    }})
    .then(Result => {
        console.log(Result)
        alert("Register successfully");
        window.location.href="login.html";
        localStorage.setItem("userDetails",JSON.stringify(data));
    })
    .catch(errorMsg => { console.log(errorMsg); });

}