

// let progressCirculer = document.querySelector('.progress-circuler');
// let btn = document.querySelector('button');
// let input = document.querySelector('input');
// let value = document.querySelector('.value');
// let start = 0;

// btn.addEventListener("click",bar)

// function bar() {
//     let progress = setInterval(() => {
//         if(start < input.value){
//         start++;
//         progressEND();
//         }else{
//             start--;
//             progressEND();
//         }
//        function progressEND(){
//         value.textContent = `${start}%`;
//         progressCirculer.style.background = `conic-gradient(#2ecc71 ${start}%, #e74c3c ${start}% 100%)`;
       
//         if (start == input.value) {
//             clearInterval(progress);
//             input.value = "";
//         }
//        }
//     } , 100);
// }


// Path: script.js
 let progressCirculer = document.querySelector('.progress-circuler');
 let value = document.querySelector('.value');
 let start = 0;
 function bar() {   
    let progress = setInterval(() => {
        start++;
        value.textContent = `${start}%`;
        progressCirculer.style.background = `conic-gradient(#2ecc71 ${start}%, #e74c3c ${start}% 100%)`;
        if (start == 100) {
            clearInterval(progress);
        }
    } , 100);
 }