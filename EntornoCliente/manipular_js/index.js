function cambiar() {
    for (let i = 0; i < 900;i++) {
        setTimeout(()=>{
            let rand = Math.floor(Math.random()*2)+1;
            console.log(rand);
            document.getElementById('mifoto').style.width=i+"px";
            document.getElementById('mifoto').src=rand+".jpg";
        },i * 100);        
    }
}
