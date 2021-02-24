Vue.component('padre', {
    template:
    `
    <div class="p-5 bg-dark text-white">
        <h2>Componente Padre: {{numeroPadre}}</h2>
        <button class="btn btn-danger" @click="numeroPadre++">+</button>
        <hijo numero="5"></hijo>
        <hijo :numero="numeroPadre"></hijo>
        <hijo :numero="numeroPadre" @nombreHijo="nombrePadre = $event"></hijo>
        {{nombrePadre}}
    </div>
    `,
    // El componente Hijo queda dentro del componente Padre
    // También el padre le manda una "prop" como "numero = 5"
    // Después creo otro componente hijo, pero a este le paso un dato dinámico, no un integer normal (variable "numeroPadre")
    // En la linea 9 se tiene un ejemplo de comunicacion entre componentes. Cuando el evento del hijo llamado "nombreHijo" es emitido (at nombreHijo "@nombreHijo") a la variable de este componente padre llamada "nombrePadre" se le asignará el valor definido en el evento del componente hijo. En ese caso "Ignacio"
    data(){
        return {
            numeroPadre: 0,
            nombrePadre: ''
        }
    }
})
