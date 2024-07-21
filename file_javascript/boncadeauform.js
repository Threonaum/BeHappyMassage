// function disableOtherSelects(selectedId) {
//     const selects = ['prestation', 'duree', 'valeur'];
//     selects.forEach(id => {
//         if (id !== selectedId) {
//             document.getElementById(id).disabled = true;
//             document.getElementById(id).selectedIndex = 0;
//         }
//     });
// }

// function enableAllSelects() {
//     const selects = ['prestation', 'duree', 'valeur'];
//     selects.forEach(id => {
//         document.getElementById(id).disabled = false;
//     });
// }

// document.addEventListener('DOMContentLoaded', () => {
//     const selects = ['prestation', 'duree', 'valeur'];
//     selects.forEach(id => {
//         document.getElementById(id).addEventListener('change', () => {
//             if (document.getElementById(id).selectedIndex === 0) {
//                 enableAllSelects();
//             }
//         });
//     });
// });

