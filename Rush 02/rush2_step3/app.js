const drop = document.querySelector('.champ-drag');
// chercher d'autre queryselector par type
drop.addEventListener('dragover', (event)=>{
    event.preventDefault();
})

drop.addEventListener('drop', (event)=>{
    // console.log(event.dataTransfer.files[0].name);
    event.preventDefault();
    let file = event.dataTransfer.files[0].name;
    document.getElementById('Add-li').innerHTML += "<li>" + file + "</li>";
    // console.log(file);
    
})

// creer un addEventlistener qui va ajouter un li dans un ul mettre le nom du fichier dans le li 
