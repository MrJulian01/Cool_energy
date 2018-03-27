function opennav(){
  var x = document.getElementById("nav");
    if (x.className === "navigation") {
        x.className += " mobile";
    } else {
        x.className = "navigation";
    }
}
