function isValid(){
    let id = document.getElementById("userId").value ;
    let pic = documebt.getElementById("picture");
    let n = id.length;
    for(let i =0; i<n; i++){
        if(id[i] >= '0' && id[i] <= '9'){
            // do nothing
        }
        else {
            alert("invalid id");
            return false;
        }
    }
    let idN = parseInt(id, 10);
    if(idN <= 0){
        alert("id should be positive and greater than 0");
        return false;
    }
    if(!pic){
        alert("No pic is selected");
        return false;
 
    }
    return true;
}