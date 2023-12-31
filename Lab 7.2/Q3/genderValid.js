function isValid(){
    let x = document.getElementById("Male").checked;
    let y = document.getElementById("Female").checked;
    let z = document.getElementById("Others").checked;
    if(x==false && y == false && z== false){
        alert("Select gender");
        return false;
    }
    alert("Success");
    return true;
}