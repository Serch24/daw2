function leerCookie(la_cookie) {
    const cookies = "nombre=sergio;apellido=yaccelga;edad=20";
    if (la_cookie.length==0) {
        return null;
    }
    let spliteado = new RegExp(";",'g')
    console.log(spliteado)
    let a = cookies.split(spliteado);
    console.log(a)
    // for (let i = 0; i < a.length; i++) {
    //     console.log(la_cookie[i])
    // }
}

leerCookie("nombre");