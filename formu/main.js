

let target = document.querySelectorAll('[data-target]')

let conten = document.querySelectorAll('[data-content]')


target.forEach(target=>{

target.addEventListener("click", ()=>{

conten.forEach(c=>{

c.classList.remove("active")
})

let t=document.querySelector(target.dataset.target)

t.classList.add("active")

})

})