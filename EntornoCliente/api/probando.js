fetch('https://httpbin.org/ip'
).then((res)=>{
        /*console.log(res)*/
        return res.arrayBuffer()
}).then(data =>{
        console.log(data)
})
        .catch((err)=>{
        console.log(err)
})
