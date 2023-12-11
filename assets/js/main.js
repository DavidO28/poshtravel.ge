let button = document.querySelector(".menu img");

button.addEventListener('click', function () {
    document.querySelector(".header-left ul").classList.toggle("active");
})
const btns = document.getElementsByClassName("btnhover");
for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("mouseover", ev => {
        let ripple = document.createElement
        ('div');
        ripple.classList = 'ripple';
        ripple.style.left =ev.offsetX + 'px';
        ripple.style.top =ev.offsetY + 'px';
        btns[i].appendChild(ripple);
        ripple.addEventListener 
        ('animationend', () => ripple.remove 
        ());
    });
}


// /// validacion

//     function validateForm() {
//         var name = document.getElementById('name');
//         var username = document.getElementById('username');
//         var email = document.getElementById('email');
//         var number = document.getElementById('number');

//         // Check if any of the fields is empty
//         if (name.value === "" || username.value === "" || email.value === "" || number.value === "") {
//             name.classList.add('error');
//             username.classList.add('error');
//             email.classList.add('error');
//             number.classList.add('error');

//             return false;
//         }
//         return true;
//     }

//     function removeErrorBorder(fieldId) {
//         document.getElementById(fieldId).classList.remove('error');
//     }


// // map zoom  ///


// var currentScale = 1.3;
//     var minScale = 1.3;  // Minimum scale factor
//     var maxScale = 2.5;  // Maximum scale factor

//     function zoomIn() {
//         currentScale = Math.min(currentScale + 0.1, maxScale);
//         updateImageScale();
//     }

//     function zoomOut() {
//         currentScale = Math.max(currentScale - 0.1, minScale);
//         updateImageScale();
//     }

//     function updateImageScale() {
//         var image = document.getElementById('zoomImage');
//         image.style.transform = 'scale(' + currentScale + ')';
//     }

//     // Add scroll zoom functionality
//     document.getElementById('zoomImage').addEventListener('wheel', function (e) {
//         if (e.deltaY < 0) {
//             zoomIn();
//         } else {
//             zoomOut();
//         }
//         e.preventDefault(); // Prevent the default scroll behavior
//     });