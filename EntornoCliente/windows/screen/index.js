let ventana = window.open("https://www.google.com/", "");
setTimeout(() => {
    ventana.resizeTo(screen.width / 2, screen.height / 2);
}, 2000);