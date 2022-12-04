let btn=document.getElementById("buttun_tarau")
let topics=document.getElementById("topics")
topics.style.display="none"
btn.addEventListener('click', ()=>{
  // console.log("Hello you clicked ")
  
  if(topics.style.display!="none"){
    topics.style.display="none"
  } else{
    topics.style.display="block"
  }
})
