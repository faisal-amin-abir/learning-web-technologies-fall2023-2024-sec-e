window.addEventListener('load', function(e){
    let xx = document.getElementById("sId");
    let id = xx.getAttribute("data-sid");
    console.log(id);


    const xhr = new XMLHttpRequest();
    xhr.responseType="json";
    xhr.open("post", "../controller/showMessage.php", true);
    xhr.setRequestHeader("Content-type", "application/json");

    xhr.onload = function(){
        if(this.status === 200){
            let x = this.response;
            console.log(x);
            let text = "<table  border = '1px' style = 'border: 1px solid black'; width = 50%>";
            text += "<tr> <th>Sender</th> <th>Receiver</th> <th>Message</th> <th>Status</th></tr>";
            for(let i = 0; i<x.length; i++){
                text += "<tr><td>"+ x[i].sender_name +"</td> <td>" + x[i].receiver_name+"</td> <td>"+ x[i].message_text +"</td> <td> "+x[i].msg_status+"</td></tr>";
            }
            text += "</table>";

            document.getElementById("msgView").innerHTML = text;
        }
        else{
            document.getElementById("msgView").innerHTML = "error found !!";
        }
    };

    const mydata = {sid: id};
    const data = JSON.stringify(mydata);
    xhr.send(data);


});