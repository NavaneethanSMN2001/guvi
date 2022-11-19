function login(event){
    event.preventDefault();
    email = document.getElementById("email");
    password = document.getElementById("password");
    let formData = new FormData();
    formData.append('email',  email);
    formData.append('password',  password);
    console.log(formData.get('email'));
    var url = 'http://localhost/project/php/login.php';


    fetch(url, {
        method: "POST",
        body: formData,
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }})
        .then(Result => {
            console.log(Result)
            alert("Login successfully");
            window.location.href="profile.html";
            
        })
        .catch(errorMsg => { console.log(errorMsg); });
}

