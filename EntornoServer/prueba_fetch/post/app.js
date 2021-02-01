const url = "http://localhost:3111/";
/*const url = 'https://httpbin.org/post';*/
const bt = document.querySelector(".bt");
const miform= new FormData(document.querySelector('.form'));
bt.addEventListener("click", (e) => {
        e.preventDefault();
        fetch(url, {
                method: 'POST',
                /*mode: 'cors',*/
                body: miform,
                /*headers: { 'Content-Type': 'text/plain' },*/
        })
                .then((res) => res.text())
                /*.then((res) => console.log(res))*/
                .then((json) => console.log(json));
        /*.catch((e) => console.log("error"));*/
});
