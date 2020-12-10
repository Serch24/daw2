const fetchData = async () =>{
    try{
        const res = await fetch('https://api.brawlstars.com/v1/players/%98Q9YJ8C2')
                    /*Con json convierte la api*/
        const data = await res.json()
        console.log(data)
        /*const poke = {
            imagen:data.sprites.other.dream_world.front_default,
            nombre:data.name
       }     
        colocarCosasEnElDOM(poke)*/
    }catch(e){
        console.log(e)

    }

}
fetchData();
