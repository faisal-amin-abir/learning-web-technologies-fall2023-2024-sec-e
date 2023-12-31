function isValid(){
    
    let name = document.getElementById("name").value ;
    let email = document.getElementById("email").value ;
    let male = document.getElementById("male").checked ;
    let female = document.getElementById("female").checked ;
    let others = document.getElementById("others").checked ;
    let dob = document.getElementById("dob").value ;
    let bg = document.getElementById("blood").value ;
    let ssc = document.getElementById("ssc").checked;
    let hsc = document.getElementById("hsc").checked;
    let bsc = document.getElementById("bsc").checked;
    let photo = document.getElementById("picture").value;
    

    if(isName(name) && isEmail(email) && (isGender(male) || isGender(female) || isGender(others)) && isDob(dob) && isBgroup(bg) && (isDegree(ssc) || isDegree(hsc) || isDegree(bsc)) && isPhoto(photo))
    return true;
    else return false;
    
}


function isName(name){
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

function isEmail(email){
    let n = email.length;
    if (email == ""){
        alert("Empty field");
        return false;
    }
    else {
        let ca=0;
        let lastA=0;
        let lastDot=0;
        for(let i = 0; i<n; i++){
            if(email[i] === '@'){
                ca=ca+1;
                lastA = i;
            }
            if(email[i]=='.') lastDot = i;          
        }
        if(ca != 1){
            alert("exactly 1 @ should be contained");
            return false;
        }
        else if(lastDot - lastA <= 1){
            alert("not a valid email");
            return false;
        }
        else if(lastA == 0 || lastDot == 0){
            alert("@ or . can not be at the beginning");
            return false;
        }
        // a@f.com
        else if( n < 7){
            alert('Mail should have at least 7 characters');
            return false;
        }
        else {
            if(email[n-1] !='m' || email[n-2] != 'o' || email[n-3]  != 'c' || email[n-4]!='.'){
                alert("should contain .com at the end");
                return false;
            }
        }
    
    }
    alert("Success");
    return true;
}

function isGender(gender){
    return gender;
}

function isDob(dobObject){
    let data = dobObject.split("-");
    console.log(data);
    let day = parseInt(data[2], 10);
    let month = parseInt(data[1], 10);
    let year = parseInt(data[0], 10);

    if(day >= 0 && day <= 31 && month >= 1 && month <= 12 && year >= 1900 && year <= 2016) {
        alert("success");
        return true;
    } 
    else{
        alert("DOB is not in correct formate");
        return false;
    }          
}


function isBgroup(bg){
    if(bg == ''){
        alert("Enter a blood group");
        return false;
    }
    alert("success");
    return true;
}

function isDegree(degree){
    return degree;
}

function isPhoto(photo){
    return photo;
}