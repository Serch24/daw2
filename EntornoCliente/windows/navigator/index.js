/* 
Hacer un programa que muestre las propiedades más usadas de navigator:

    - AppName
    - AppVersion
    - cpuClass
    - platform
    - etc. 
*/

for (const key in window.navigator) {
    console.log(key);
}