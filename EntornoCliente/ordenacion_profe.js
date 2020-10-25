                var enteros = new Array(2, 5, 27, 13, 52, 23, 46, 22, 4, 32, 34, 564, 76, 94, 11);
                var i;
                var j;
                for (i = 0; i < enteros.length - 1; i++) { //enteros<7
                    for (j = i + 1; j < enteros.length; j++) { //enteros<8
                        if (enteros[i] > enteros[j]) {
                            var auxiliar = enteros[i];
                            enteros[i] = enteros[j];
                            enteros[j] = auxiliar;

                        }
                    }
                }
                var k;
                console.log(enteros.reverse());