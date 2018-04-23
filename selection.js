var results;
var workArea = document.getElementById('workArea');
var workAreaEvent = workArea.addEventListener("change", getWorkArea);

//Civil
var civil = document.getElementById("civilian");

//Structural 
var struct = document.getElementById("structural");

//Admin
var admin = document.getElementById("admin");

function getWorkArea() {
 x = workArea.value;
    //1 is civil 
    //2 is struct
    //3 is admin
 switch (x) {
        case "1":
            civil.style.display = '';
            break;
        case "2":
            struct.style.display = '';
            break;
        case "3":
            admin.style.display = '';
            break;
        default:
            console.log("Oops nothing here");
            break;
    }
}