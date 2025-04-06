/*
    HElo salkdjalsnda sd
    asdjaldskjsa
    dkjasjdlkajsdlksajd
    sakdljlsakjdlksa
*/
// simple array ...
const students = ['Hannan','Salman','Kanwal','Sumbal','Ibrahim','Musa']; // singular array ...
for (let index = 0; index < students.length; index++) {
   const name = students[index];
   const n = index + 1;
   console.log("On Position " + n + " Is " + name);
}
// single object ..
const student = {
    name:"Asad Mukhtar",
    email:"axad03213@gmail.com",
    gender:"Male",
    city:"Lahore"
}
console.log(student);
// object within array ...
const allstudents = [
    {
        name:"Asad Mukhtar",
        email:"axad03213@gmail.com",
        gender:"Male",
        city:"Lahore"

    },
    {
        name:"Hannan",
        email:"hannan03213@gmail.com",
        gender:"Male",
        city:"Lahore"

    },
    {
        name:"Sumbal",
        email:"sumbal03213@gmail.com",
        gender:"Female",
        city:"Lahore"

    },
    {
        name:"Salman",
        email:"salman000@gmail.com",
        gender:"Male",
        city:"Lahore"

    },
    {
        name:"Ibrahum",
        email:"ibrahim000@gmail.com",
        gender:"Male",
        city:"Lahore"

    },
]
console.log(allstudents.length);
for (let index = 0; index < allstudents.length; index++) {
    console.log("Student Name is " + allstudents[index].name + " Email is " + allstudents[index].email);
    
}
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
// Function Declaration
function result(){
    var previous_value = document.getElementById("result").value;
    if(previous_value != ""){
        document.getElementById("result").value = eval(previous_value);
    } else {
        alert("Value is required");
    }
}
//  Function Expression

const worker = function() {
    console.log('worker function is ready');
}
// arrow function ...
const result2 = () => {
    console.log('worker for result 2');
}
// Async Function
// async function result3(){
//     await 
// }
