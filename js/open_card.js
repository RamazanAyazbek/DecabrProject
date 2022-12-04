
let cards=document.querySelectorAll('.card')
let scroll_open_card=document.getElementsByClassName('open_card_page')
let closePopUp3=document.getElementById('pop_up_close_card1')
let opens=document.getElementById('open_card1')
cards.forEach(card=>{
    card.addEventListener('click',()=>{
        opens.classList.add('activemodal')
        // document.body.style.position = 'fixed';
      // scroll_open_card.style.overflow='auto'
      console.log("clicked")
      opens.style.zIndex=120; 

    })
})
closePopUp3.addEventListener('click', ()=>{
    opens.classList.remove('activemodal')
    
})
