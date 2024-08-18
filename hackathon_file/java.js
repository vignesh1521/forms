let img_selector = [
  "https://images.unsplash.com/photo-1610563166150-b34df4f3bcd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80",
  "https://images.unsplash.com/photo-1605379399642-870262d3d051?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
];
let i = 0;

let img_element = document.getElementById("img");
let body_element=document.getElementById("body");
let opener=document.getElementById("opener");
let content=document.getElementById("content");
let query=window.location.search;
let params=new URLSearchParams(query);
let re=params.get('re')
let menu_content=document.getElementById("menu_content");
let preloadImages = [];
for (let j = 0; j < img_selector.length; j++) {
  preloadImages[j] = new Image();
  preloadImages[j].src = img_selector[j];
}

let timer = setInterval(() => {
  if (img_element.style.opacity == 1 ) {
    img_element.style.opacity = 0;
    body_element.style.background="url('"+img_selector[i]+"')";
 
  } else if(img_element.style.opacity == 0){

    img_element.style.background = "url('"+img_selector[i]+"')";
    img_element.style.opacity = 1;

    if (i === 1) {
      i = 0;
    } else {
      i++;
    }
  }

    body_element.style.backgroundRepeat="no-repeat";
body_element.style.backgroundSize="cover";
  img_element.style.backgroundRepeat="no-repeat";
img_element.style.backgroundSize="cover";
img_element.style.backgroundPosition="centre"
}, 5000);

let menu_bar=setInterval(()=>{

    menu_content.style.opacity=1;
    clearInterval(menu_bar)

   },500)          
window.onload=function (){
let open=setInterval(()=>{
        opener.style.width="90%";
        let con =setInterval(()=>{
        content.style.opacity=1;
        clearInterval(con)
        },500)
        clearInterval(open)
},500)
}
