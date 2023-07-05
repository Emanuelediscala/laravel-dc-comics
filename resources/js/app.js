//Vecchio import del "bootstrap" di Laravel
//Non si tratta del framework CSS ma del "bootstrap" cioè delle istruzioni iniziali
//In pratica importa le librerie lodash e axios
import './bootstrap';

//Importo il nostro sass
import '~resources/scss/app.scss'

//Importo il JS di Bootstrap
import * as bootstrap from 'bootstrap'

//Informo Vite di processare le immagini presenti in /resources/img
//Documentazione: https://laravel.com/docs/9.x/vite#blade-processing-static-assets
// import.meta.glob(['../img/**'])

document.getElementById("deleteInput").addEventListener("click", confermaCancellazione);

function confermaCancellazione() {
    if (confirm("Sei sicuro di voler eliminare questo elemento?")) {
          return "l' utente ha confermato la cancellazione"
    } else {
        return "L'utente ha annullato la cancellazione"
    }
}