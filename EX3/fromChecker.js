function Check(){
    let I1 = document.getElementById("input1").value;
    let I2 = document.getElementById("input2").value;
    let I3 = document.getElementById("input3").value;
    let u = document.getElementById("username").value;
    let p = document.getElementById("password").value;
    let s = document.getElementById("shipping").value;
    if (I1==0&&I2==0&&I3==0){
        alert("Please choose at least one item.")
        return false;
    }
    /*if(!s)
    {
        alert("Please choose a shipping method.")   
        return false;
    }*/
    if (u==""||p==""){
        alert("Please enter your username or password.")
        return false;
    }  
    /*if(u!=""&&p=="")
    {
        let a = "Your account number is "+ u + ", you don't have a Password. ";
    alert(a);
    }*/

    let b = "Your account number is "+ u + ", Password is " + p;
    alert(b);
}