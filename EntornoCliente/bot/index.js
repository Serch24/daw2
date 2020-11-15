const teleg = require('telegraf');
const TOKEN = "1435307955:AAHwalCLtxUSbEzhy2qwkQXG7xcUtQ4qsow";

const bot = new teleg.Telegraf(TOKEN);

bot.start((ctx)=>{
    ctx.reply(`Hola mi rey ${ctx.from.username} estoy viendo todo qwq`);
});

bot.help((ctx)=>{
    ctx.reply('¿En que te ayudo papi?');
});

//crear mi propio comando
bot.command(['sergio','hola','no'],(ctx)=>{
    ctx.reply('comando nuevo uwu');
});

//escucha y funciona cuando ve 'pc'
bot.hears('pc',(ctx)=>{
    ctx.reply('escribiste pc');
});

//siempre que se escriba algo responderá lo mismo.
bot.on('text',(ctx)=>{
    ctx.reply('estas escribiendo')
});

bot.on('sticker',(ctx)=>{
    ctx.reply('nice sticker!');
})

bot.launch();
