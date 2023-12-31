function isValid(){
    let ssc = document.getElementById('SSC').checked;
    let hsc = document.getElementById('HSC').checked;
    let bsc = document.getElementById('BSc').checked;

    if(ssc == true || hsc == true || bsc == true){
        alert("success");
        return true;
    }
    alert("Fields are empty");
    return false;
}