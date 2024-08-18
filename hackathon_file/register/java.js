let img_selector = [
  "https://images.unsplash.com/photo-1610563166150-b34df4f3bcd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80",
  "https://images.unsplash.com/photo-1605379399642-870262d3d051?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
];
let i = 0;

let img_element = document.getElementById("img");
let body_element=document.getElementById("body");
let login_form=document.getElementById('login_form');
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
let login_open=setInterval(()=>{
login_form.style.opacity=1;

},400)

