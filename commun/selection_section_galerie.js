let section2 = document.getElementsByClassName('section_galerie');

for (let j = 0; j < section2.length; j++) {
    section2[j].addEventListener('dblclcik',function(){
        section2.style.transform = "translateZ(200px)";
    },false);
}