function isValid(){

    let dobObject = document.getElementById("dob").value;
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