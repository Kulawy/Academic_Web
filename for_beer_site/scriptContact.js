var buttonSend = document.getElementById("sendMsg");

function sendMail(){
    
    buttonSend.addEventListener("click", showAlert, false);
}

function showAlert(){
    window.alert("Massage has send");
}



window.addEventListener("load", sendMail, false);