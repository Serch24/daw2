const f = document.forms[0]
const bn = document.querySelector('.bn')

bn.addEventListener('click', (e)=>{
        e.preventDefault()
        f.submit()
})
