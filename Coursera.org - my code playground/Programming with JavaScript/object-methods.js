var car = {};
car.color = "red";
car.mileage = 113560;
console.log(car);

car.turnKey = function() {
    console.log('Engine Running.');
}

car.lightsOn = function(){
    console.log('Lights ON');
}

console.log(car);
car.turnKey();
car.lightsOn();
