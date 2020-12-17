const path = require('path')
const expresss = require('express')
const app = expresss()

/*Empieza el servidor!*/
app.set('port', process.env.PORT || 2017)

app.use(expresss.static(path.join(__dirname, 'inicio')))

const server = app.listen(app.get('port'), () => {
    console.log('funcionando...')

})

const socketIO = require('socket.io')
const io = socketIO(server)

io.on('connection', (socket) => {
    console.log(io.sockets)

    socket.on(("mensaje"), (data) => {
        console.log(data)
            /* La funcion de abajo se muestra a todos menos al que lo envia. */
            /* socket.broadcast.emit('mensaje', data) */
        io.sockets.emit('mensaje', data)

    })

})