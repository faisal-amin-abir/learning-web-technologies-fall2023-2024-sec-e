function isValid(){
    let name = document.getElementById("name").value ;
    let n = name.length;
    if(name == "") {
        alert("Name is Empty");
        return false;
    }
    else if(n < 2){
        alert("Length should be greater than 2");
        return false;
    }
    else if (name[0] < 'A' || ( name[0] > 'Z' && name[0] < 'a' ) || name[0] > 'z' ){
        alert("First letter should be an alphabet");
        return false;
    }
    else{
        for(let i = 0; i<n; i++){
            if( (name[i] >= 'a' && name[i] <= 'z') || (name[i] >= 'A' && name[i] <= 'Z') || name[i] == '.' || name[i] == '-' ){
                // do nothing
            }
            else{
                alert("Letters should be a-z, A-Z, . and -");
                return false;
            }
        }
    }
    alert("success");
    return true;
}