let boord = [
["_","_","_"],
["_","_","_"],
["_","_","_"]
];
let pleyer = "x"

while (true) {
    

let boordStr = boord[0].join("   ") + 
"\n" +
 boord[1].join("   ")+
 "\n" +
 boord[2].join("   ");

let row = +prompt("Dear uzer, pleas provider the value for the row \n \n" +boordStr);
let column = +prompt("Dear uzer, pleas provider the value for the column \n \n" +boordStr);

if(boord[row][column] !== "_"){
 alert("not a ledal move, you lose!")
 break;
}

boord[row][column] = pleyer;
if(pleyer === "x"){
    pleyer = "o";
} else {
    pleyer = "x";
}

break;
}
//alert("barev \ndzez");\n patwuhanin tpum e nor toxic 

//let x = [5,2,6]
//alert(x.join("||||"));//join kpcnum e irar mejtexwum avelacnum , storaket karox enq avelacnel parametr(||||)