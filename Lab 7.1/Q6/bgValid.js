function isValid(){
    let bg = document.getElementById("blood").value ;
    if(bg == ''){
        alert("Enter a blood group");
        return false;
    }
    alert("success");
    return true;
}