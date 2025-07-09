const pswrdField = document.querySelector(".form input[type='password']"),
      toggleBtn = pswrdField.nextElementSibling; // Selects the <i> right after the password input

toggleBtn.onclick = ()=>{
    if(pswrdField.type == "password"){
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    }else{
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}