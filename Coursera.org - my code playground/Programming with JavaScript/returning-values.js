// // how to return variable value

// function consoleLog(val) {
//     console.log(val);
//     return val;
// }

// consoleLog(10);

function doubleIt(num){
    return num* 2;
}

function objectMaker(val){
    return {
        prop: val 
    };
}

objectMaker(20);

console.log(objectMaker(doubleIt(100)));
