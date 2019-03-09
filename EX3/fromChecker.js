
var plus=document.getElementsByClassName('plus');
var minus=document.getElementsByClassName('minus');
for(i=0;i<plus.length;i++){
    plus[i].onclick=function(){
        var outer=this.parentNode;
        var inner=outer.children;
        inner[1].value++;
    }
    minus[i].onclick=function(){
        var outer=this.parentNode;
        var inner=outer.children;
        if(inner[1].value>0){
            --inner[1].value;
        }                   
    }                   
}   

function Check(){
    let I1 = document.getElementById("input1").value;
    let I2 = document.getElementById("input2").value;
    let I3 = document.getElementById("input3").value;
    let x = document.getElementById("username").value;
    let y = document.getElementById("password").value;
    let s = document.getElementById("shipping").value;
    if (I1==0&&I2==0&&I3==0){
        alert("Please choose at least one item.")
        return false;
    }
    if (x==""||y==""){
        alert("Please enter your username or password.")
        return false;
    }  
    let a = "Your account number is "+ x + ", Password is " + y;
    alert(a);
}