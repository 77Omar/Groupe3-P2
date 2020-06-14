  //Fonction Nbre de reponse
  let val=document.getElementById('valeur');
    let nbrRow=0;
  function onAddInput(){
    nbrRow++;
    
    let id_rep=document.getElementById('select');
    let divInput = document.getElementById('inputs');
    let newInput = document.createElement('div');
    newInput.setAttribute('class','form');
    newInput.setAttribute('id','row_'+nbrRow);
   if(id_rep.options[id_rep.selectedIndex].value==="choix_multiple"){
       newInput.innerHTML=`<div><label id='reponses'></label>
    <input class='reponse col-md-10' type='text' name='reponse${nbrRow}'/>
    <input class='checkbox' type='checkbox' name='checkbox${nbrRow}'/></div>
    <button type='button' class='delete'  onclick='onDeleteInput(${nbrRow})'><img src='images/ic-supprimer.png'></img></button>`;
  }
   
   else if(id_rep.options[id_rep.selectedIndex].value==="choix_simple"){
    newInput.innerHTML=`<div><label id='reponses'></label>
    <input class='reponse col-md-10' type='text' name='reponse${nbrRow}'/>
    <input class='checkbox' type='radio' name='radio' value="reponse${nbrRow}"/></div>
    <button type='button' class='delete' onclick='onDeleteInput(${nbrRow})' style="float-right;"><img src='images/ic-supprimer.png'></img></button>`;
   }
    divInput.appendChild(newInput);

   
       val.setAttribute("value",""+nbrRow+"");

}

function texte(){
  let id_rep=document.getElementById('select');
  if(id_rep.options[id_rep.selectedIndex].value==="Texte"){
    nbrRow++;
  let divInput = document.getElementById('inputs');
  let newInput = document.createElement('div');
  newInput.setAttribute('class','form');
  newInput.setAttribute('id','row_'+nbrRow);
  
    newInput.innerHTML=`<div><label id='reponses'></label>
    <input class='reponse col-lg-10' id="reponse" type='text' name='reponse${nbrRow}'/>
    <button type='button' class='deletes'  onclick='onDeleteInput(${nbrRow})'><img src='images/ic-supprimer.png'></img></button>`;
    val.setAttribute("value",""+nbrRow+"");
  
   divInput.appendChild(newInput);
  }
}

function onDeleteInput(n){
   let target = document.getElementById('row_'+n);
   setTimeout(function() {
       
    target.remove();
   },2000)
   fadeOut('row_'+n);
   nbrRow--;
}
function fadeOut(idTarget){
  let target = document.getElementById(idTarget);
  let effect = setInterval(function() {
    if (!target.style.opacity) {
         target.style.opacity = 1;
    }

    if (target.style.opacity>0) {
      target.style.opacity-=0.1;
    }else{
      clearInterval(effect);
    }
  },200)
}
