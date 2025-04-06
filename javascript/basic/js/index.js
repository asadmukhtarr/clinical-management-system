/*
    HElo salkdjalsnda sd
    asdjaldskjsa
    dkjasjdlkajsdlksajd
    sakdljlsakjdlksa
*/
function abc(){
    var frist = 1; // first value ..
    var second = 2; // second value ..
    let z = frist + second;
    const r = z;
    alert(r);
}
function calculate(c){
    if( c == "c"){
        document.getElementById("result").value = null;
    } else {
        var previous_value = document.getElementById("result").value;
        var final_value = previous_value + c;
        document.getElementById("result").value = final_value;
    }
}
function result(){
    var previous_value = document.getElementById("result").value;
    if(previous_value != ""){
        document.getElementById("result").value = eval(previous_value);
    } else {
        alert("Value is required");
    }
}
