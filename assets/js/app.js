function validateForm() {
    var x = document.forms["searchform"]["searchinput"].value;
    if (x == null || x == "") {
        var d = document.getElementById("searchinput");
        d.className += " error";
        return false;
    }
}