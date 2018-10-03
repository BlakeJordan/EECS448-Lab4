function formCheck() {
    let userName = document.getElementById("username");
    let password = document.getElementById("password");
    let button1 = document.getElementById("button1");
    let button2 = document.getElementById("button2");
    let button3 = document.getElementById("button3");
    let shipping1 = document.getElementById("shipping1");
    let shipping2 = document.getElementById("shipping2");
    let shipping3 = document.getElementById("shipping3");
    if (!validateEmail(userName.value) || !userName.value || !password.value || !button
        || (!button1.checked && !button2.checked && !button3.checked) 
        || (!shipping1.checked && !shipping2.checked && !shipping3.checked)) {
        let message;
        if (!validateEmail(userName.value)) {
            message = "USERNAME MUST BE A VALID EMAIL?!?!?!";
        }
        if (!userName || !userName.value) {
            message = "USERNAME FIELD IS REQUIRED!?!!!??!!??!?!";
        }
        if (!password || !password.value) {
            message = "PASSWORD FIELD IS REQUIRED!!!!?!?!";
        }
        if (!button1.checked && !button2.checked && !button3.checked) {
            message = "CHOOSE A BUTTON WHAT THE HECK";
        }
        if (!shipping1.checked && !shipping2.checked && !shipping3.checked) {
            message = "HOW AM I SUPPOSED TO SHIP THIS??!?!??!!";
        }
        alert(message);
        return false;
    }

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    console.log("passed");
    return true;
}

function reset() {
    document.getElementById("inputForm").reset();
}