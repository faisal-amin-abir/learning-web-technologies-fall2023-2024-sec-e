
document.addEventListener("DOMContentLoaded", function(){
    var btn = document.getElementById("viewUserBtn");
    if(btn){
        btn.addEventListener("click", viewuserF);
    } else {
        console.error("View User Button not found!");
    }

    var insertBTN = document.getElementById("SubmitBtn");
    if(insertBTN){
        insertBTN.addEventListener("click", function(e) {
            // Run your "ccp" functionality here
            console.log("insertBTN button clicked");
            // Call the viewuserF function if needed
            insertUser(e);
        });
    } else {
        console.error("insertBTN Button not found!");
    }
});

function insertUser(e){
    e.preventDefault();

    let nm = document.getElementById("uname");
    let em = document.getElementById("uemail");
    let ps = document.getElementById("upassword");
    let tp = document.getElementById("uutype");
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "../controller/insertUserController.php");
    
    xhr.onload = function(){
        if(this.status === 200){
            document.getElementById("showInsertMsg").innerHTML = this.responseText;
        }
        else document.getElementById("showInsertMsg").innerHTML = "Problem occured";
    }
    const mydata = { unm : nm.value, uemail : em.value, ups : ps.value, utp : tp.value};
    const data = JSON.stringify(mydata);
    xhr.send(data);

}
function updateUser(e){
    e.preventDefault();
    let nm = document.getElementById("editFormName");
    let em = document.getElementById("editFormEmail");
    let ps = document.getElementById("editFormPassWord");
    let id = document.getElementById("editFormID").value;
    console.log('in updateuser');
    console.log(nm.value);
    console.log(em.value);
    console.log(ps.value);
    console.log(id);

    const xhr = new XMLHttpRequest();

    xhr.open("POST", "../controller/updateUserController.php");
    
    xhr.onload = function(){
        if(this.status === 200){
            document.getElementById("showEditMsg").innerHTML = this.responseText;
        }
        else document.getElementById("showEditMsg").innerHTML = "Problem occured";
    }
    const mydata = {uid : id, unm : nm.value, uemail : em.value, ups : ps.value};
    const data = JSON.stringify(mydata);
    xhr.send(data);
}

function viewuserF(e) {
    e.preventDefault();
    const user_type = document.getElementById("user_type").value;
    console.log('working ', user_type); // working good
    const xhr = new XMLHttpRequest();
    xhr.responseType = "json";

    xhr.open("POST", "../controller/showUserController.php", true);
    xhr.setRequestHeader("Content-type", "application/json");

    xhr.onload = function() {
        if (this.status === 200) {
            const response = this.response;
            if (response && response.length > 0) {
                let text = "<table style='text-align: center;'>";
                text += "<tr>";
                text += "<th>Id<hr></th><th>Name<hr></th><th>email<hr></th><th colspan='3'>Action<hr></th>";
                text += "</tr>";

                for (let i = 0; i < response.length; i++) {
                    text += "<tr>";
                    text += "<td>" + response[i].user_id + "</td><td>" + response[i].username + "</td><td>" + response[i].email + "</td>";
                    text += "<td><button class='btn-msg' data-sid=" + response[i].user_id + ">Send Message</button> </td>";
                    text += "<td><button class='btn-del' data-sid=" + response[i].user_id + ">Delete</button> </td>";
                    text += "<td><button class='btn-edit' data-sid=" + response[i].user_id + ">Edit</button> </td>";
                    
                    text += "</tr>";
                }
                text += "</table>";
                document.getElementById("showUserlist").innerHTML = text;
                // Assuming setDelBtn() and setEditBtn() handle event delegation properly
                setDelBtn();
                setEditBtn();
                setMsgBtn();
        
            } else {
                document.getElementById("showUserlist").innerHTML = "No user found";
            }
        } else {
            console.log("Error: " + xhr.statusText);
        }
    };

    xhr.onerror = function() {
        console.log("Request failed");
    };

    const mydata = { type: user_type };
    const data = JSON.stringify(mydata);
    xhr.send(data);
}

function setMsgBtn(){
    var x = document.getElementsByClassName("btn-msg");
    for(let i = 0; i<x.length; i++){

        x[i].addEventListener("click", function(e){
            let id = x[i].getAttribute("data-sid");
            document.getElementById("deltemsg").innerHTML="";
            document.getElementById("showEditMsg").innerHTML = "";
            let rec = "";

            const xhr = new XMLHttpRequest();

            xhr.open("POST", "../controller/FindUserByID.php", true);
            xhr.responseType = "json";
            xhr.setRequestHeader("Content-type", "application/json");
            xhr.onload = function(){
                if(this.status === 200){
                    let res = this.response;
                    rec = res.username;

                    let text = `<h3>Send Message to ` + rec +  ` </h3> <br>
                    <textarea id = 'textArea' rows='4' cols='50'></textarea> <br> <br>
                    <button id = 'sendMsg'>Send</button>`;
        
                    document.getElementById("editPannel").innerHTML = text;
        
        
                    document.getElementById("sendMsg").addEventListener("click", function(e){
                        //

                        let msg = document.getElementById("textArea").value;
                        if(msg == ""){
                            alert("Enter text");
                        }
                        else{
                            const xhr2 = new XMLHttpRequest();

                            xhr2.open("POST", "../controller/sendMessage.php");
                            xhr2.setRequestHeader("Content-type", "application/json");

                            let xx = document.getElementById("showEditMsg");

                            xhr2.onload = function(){
                                if(xhr2.status === 200){
                                    xx.innerHTML = xhr2.responseText;
                                }
                                else xx.innerHTML = "error found !!";
                            };

                            const sendData = {sid : id, text_msg : msg};
                            const sData = JSON.stringify(sendData);

                            xhr2.send(sData);

                            //
                        }
        
        
                    });
                }
                else  {
                    console.log("error found!!");
                }
            };
            const mydata = {sid: id};
            const data = JSON.stringify(mydata);
            xhr.send(data);

            // console.log(2);
            
            // let text = `<h3>Send Message to ` + rec +  ` </h3> <br>
            // <textarea id = 'textArea' rows='4' cols='50'></textarea> <br> <br>
            // <button id = 'sendMsg'>Send</button>`;

            // document.getElementById("editPannel").innerHTML = text;


            // document.getElementById("sendMsg").addEventListener("click", function(e){
            //     //



            // });


        });
    }
}

function setDelBtn(){
    //e.preventDefault();
    var x = document.getElementsByClassName("btn-del");
    console.log("setdel called");
    //console.log(x);
    for(let i=0; i<x.length; i++){
        /*
        1. we will add event listener in every button
        2. we get event id from data-sid value;
        3. then we generate a request to delete.php file to delete the id
        4. in response we send the response text to view page
        */
        x[i].addEventListener("click", function(e){
            let id = x[i].getAttribute("data-sid");
            document.getElementById("deltemsg").innerHTML="";
            document.getElementById("showEditMsg").innerHTML = "";
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "../controller/deleteUserController.php", true);
            xhr.setRequestHeader("Content-type", "application/json");
            xhr.onload = function(){
                if(this.status === 200){
                    document.getElementById("deltemsg").innerHTML = this.responseText;
                    console.log("found this ", this.responseText);
                    viewuserF(e);
                }
                else  {
                    //document.getElementById("showmsg").innerHTML = "Can not delete";
                    console.log("not found here");
                }
            };
            const mydata = {sid: id};
            const data = JSON.stringify(mydata);
            xhr.send(data);
            
        } );
    }
}

function setEditBtn(){
    // e.preventDefault();
   var x = document.getElementsByClassName("btn-edit");
   console.log("setEdit called");

   

  


   //console.log(x);
   for(let i=0; i<x.length; i++){
       /*
       1. we will add event listener in every button
       2. we get event id from data-sid value;
       3. then we generate a request to edit.php file 
       4. in the request we will send the id of the use to be edited
       */
      

       x[i].addEventListener("click", function(){
            let y = document.getElementById("editPannel");
            var text = "";
            text = `<h3>Edit Pannel</h3>
            <form method = "POST">
                <input type="text" id="editFormID" style="display:none;">
                <input type="text" id="editFormName" placeholder="Enter Name"> <br> <br>
                <input type="text" id="editFormEmail" placeholder="Enter Email"> <br> <br>
                <input type="text" id="editFormPassWord" placeholder="Enter Password"> <br> <br>
                <button id = "EditSave">Save</button>
            </form>`;
            y.innerHTML = text;


            let nm = document.getElementById("editFormName");
            let em = document.getElementById("editFormEmail");
            let pass = document.getElementById("editFormPassWord");
            let uid = document.getElementById("editFormID");
            let saveBtn = document.getElementById("EditSave");

            saveBtn.addEventListener("click", function(e){
                   console.log("CCP button clicked");
                   // Call the viewuserF function if needed

                    updateUser(e);

                    viewuserF(e);
            } );

            console.log(x[i].getAttribute('data-sid'));

            console.log(nm );
           
           let id = x[i].getAttribute("data-sid");
           document.getElementById("deltemsg").innerHTML="";
           document.getElementById("showEditMsg").innerHTML = "";
           console.log("where is ", id);

           const xhr = new XMLHttpRequest();
           xhr.open("POST", "../controller/editUserController.php", true);
           xhr.responseType = "json";
           xhr.setRequestHeader("Content-type", "application/json");
           xhr.onload = function(){
               console.log("here");
               if(this.status === 200){
                   
                   nm.value = this.response.username;
                   em.value = this.response.email;
                   pass.value = this.response.PASSWORD;
                   uid.value = this.response.user_id;
                   if(this.response==null){
                    console.log("found null");
                   }
                   else console.log(this.response);
               }
               else  {
                   //document.getElementById("showmsg").innerHTML = "Can not delete";
                   console.log("not found here");
               }
           };
           const mydata = {sid: id};
           const data = JSON.stringify(mydata);
           xhr.send(data);
           
       } ); 
   }


}