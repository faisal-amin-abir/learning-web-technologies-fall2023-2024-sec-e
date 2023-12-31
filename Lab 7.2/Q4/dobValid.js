function isValid(){

    let dobObject = document.getElementById("dob").value;
    let data = dobObject.split("-");
    console.log(data);
    let day = parseInt(data[2], 10);
    let month = parseInt(data[1], 10);
    let year = parseInt(data[0], 10);

                                                      

    alert("success");
    return true;
}