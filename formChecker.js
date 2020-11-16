/*
scripts for password.html (password validator)
 */
let username = document.getElementById("username")
    , password = document.getElementById("password")
    , candle = document.getElementById("candle")
    , jail = document.getElementById("jail")
    , umbrella = document.getElementById("umbrella")
    , shipping = document.getElementById("shipping"); 

//checks for equivalent values and if length is too small then alerts
function validateForm(){
    if(username.value == "") {
        window.alert("Must enter a username");
    }
    if (password.value == "") {
        window.alert('Must enter a password');
    }
    if (candle.value < 0 || candle.value == "") {
        window.alert('Must have a valid number of candle orders');
    }
    if (jail.value < 0 || jail.value == "") {
        window.alert('Must have a valid number of jail orders');
    }
    if (umbrella.value < 0 || umbrella.value == "") {
        window.alert('Must have a valid number of umbrella orders');
    }
    if (shipping.value == "") {
        window.alert('Must choosing a shipping method');
    }
}
