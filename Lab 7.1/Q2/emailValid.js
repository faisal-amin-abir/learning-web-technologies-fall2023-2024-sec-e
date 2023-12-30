function isValid(){
    let email = document.getElementById("email").value ;
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