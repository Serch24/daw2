const url = "http://localhost:4222";
const bt = document.querySelector(".bt"); 
const miform = document.querySelector("form");
const form = new FormData(miform);

bt.addEventListener('click', (e)=>{
        e.preventDefault();
        console.log("detenido uwu");

        const init = {
                method: miform.method,
                body: form
        }


        fetch(miform.action,init).then((res)=>{
                if(res.ok){
                        /*console.log(res.json());*/
                        let tmp = res.json();
                        console.log(tmp)
                }else{
                        throw new Error(res.statusText);
                }
        }).catch((err)=>{
                console.log("Ocurrió algo",err);
        })
})
