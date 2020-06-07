let fetchBtn = document.getElementById("btn-register");
let usernameText = document.getElementById("username");
let passwordText = document.getElementById("password");

fetchBtn.addEventListener("click", onClick);


function onClick() {  
    console.log("clicked");
    fetchBtn.setAttribute("disabled", true);
    //fetchBtn.textContent = "Loading...";

    if(usernameText.textContent == "" || passwordText.textContent == "") {
        let errorText = document.createElement("p");
        errorText.textContent = "Missing credentials";
        document.getElementById("registerForm").appendChild(errorText);
    }
    else {
        errorText.textContent = "Loading...";
    }
}