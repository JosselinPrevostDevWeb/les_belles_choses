let section = document.getElementsByClassName('section_galerie');

for (let i = 0; i < section.length; i++) {
        let fleche_gauche = section[i].querySelector('.reculer_carrousel_galerie');
        let fleche_droite = section[i].querySelector('.avancer_carrousel_galerie');
        let carrousel = section[i].querySelector('.carrousel_galerie');   
        let numberItems = section[i].getElementsByTagName('img');    
        let regulC = 0;
        let indexC = 90;
        
        function mooveC(){          
            regulC = indexC % numberItems.length;
            let posX = regulC * 301;
            carrousel.style.transform = "translatex(-" + posX + "px)";
        };

        fleche_droite.addEventListener('click',function(){
            indexC ++;
            mooveC();
        },false);
        
        fleche_gauche.addEventListener('click',function(){   
            if (indexC <= 0){
                return false;
            }
            indexC --;
            mooveC();
        },false);
}