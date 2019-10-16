function checkpass()
{
    //store the password field objects into variables
    var pass1= document.getElementById('pass');
    var pass2= document.getElementById('CPass');
    //store confirmation message
    var message= document.getElementById('confirmmessage');
    //set colors 
    var goodcolor = "#66cc66";
    var badcolor = "#ff6666";

    //compare the variables 1&2
    if (pass1.value==pass2.value){
        //set good color
        pass2.style.backgroundColor=goodcolor;
        message.style.color=goodcolor;
        message.innerHTML="password match";
    }
    else{
        pass2.style.backgroundColor=badcolor;
        message.style.backgroundColor=badcolor;
        message.innerHTML="passwords do not match";
    }

}
