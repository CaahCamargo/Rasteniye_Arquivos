function alertSucess() {
    var x = document.getElementById("alertSucess");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function alertError() {
    var y = document.getElementById("alertError");
    y.className = "show";
    setTimeout(function(){ y.className = y.className.replace("show", ""); }, 3000);
}