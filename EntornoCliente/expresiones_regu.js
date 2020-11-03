var a = new RegExp(/^(91|92)[0-9]{7,8}$/g);
var b = new RegExp(/[@].com$/g);

console.log(b.test('as@hotmail.com'));