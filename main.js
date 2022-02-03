let imgs = document.querySelectorAll('img');
let lastIMG;
function toggleImg(e){

  if(lastIMG != e.target){
    try{
    lastIMG.classList = "";
    }catch(e){
    }
    lastIMG = e.target;
  }
  
  e.target.classList =   e.target.classList.length ?  "" : "viewimg";  
}
imgs.forEach(i=>{
  i.addEventListener('click',toggleImg);
})
