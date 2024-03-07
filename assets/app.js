/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
console.log("test");

//mettre le code js et le builder par un ficher dans "public" , pour faire build lancer ds le terminal "npm run watch" pour faire les modif en temps reel
//pour desactiver le cache, aller dans f12, network, cocher "disable cache"
//updater la bdd ds controller (ex tableau)
const elements= document.getElementsByClassName('elem');
Array.from(elements).forEach(element => {
    element.addEventListener("click", ()=> {
        fetch("http://127.0.0.1:8000/todo/543/updat-status")
    })
});