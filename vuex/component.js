Vue.component('titulo', {
    template:
    `
    <div>
        <h1>Uso de mi Store en el padre:</h1>
        <h2>numero {{ numero }}</h2>

        <button @click="obtenerCursos">Obtener Cursos Json</button>
        <ul v-for="curso of cursos">
            <li>{{curso.nombre}}</li>
        </ul>

        <hijo></hijo>

    </div>
    `,
    computed:{ // Esta es otra forma de llamar nuestra variable "numero" de nuestro Store. Recordar que otra forma de hacerlo se detalla en el componente "hijo" / Posteriormente se llamó la variable "cursos"
        ...Vuex.mapState(['numero', 'cursos']) // Importamos "mapState" de "Vuex", para mapear nuestro estado,  y dado que nos devuelve un objeto, lo iteramos con "spread operator". Esto se hace poniendo los tres puntos suspensivos al inicio (...)
    },
    methods: {
        ...Vuex.mapActions(['obtenerCursos'])
    }
})

Vue.component('hijo', {
    template:
    `
    <div>
        <hr>
        <button @click="aumentar">+</button>
        <button @click="$store.commit('disminuir')">-</button>
        <button @click="disminuirVarios(2)">--</button>
        <h1>Uso de mi Store en el hijo:</h1>
        <h2>numero {{ $store.state.numero }}</h2>
    </div>
    `,
    /*  Para llamar una variable de nuestro Store hacia nuestro componente, la llamamos con "$store.state.numero". 
        Aunque hay otra forma de hacerlo, y se detalla en el componente "titulo"
    */
    methods:{ // Lo mismo se hace para las mutaciones de nuestro Store (lo que hace cambiar nuestras variables de nuestros estados). En este caso le pasamos todas las mutaciones disponibles
        ...Vuex.mapMutations(['aumentar', 'disminuir', 'disminuirVarios']) // Esto es para que no haya necesidad de poner en el template "$store.commit('<nombre_de_la_mutacion>')"
        // En el template se dejará un ejemplo. Se dejará que el primer y último botón aproveche este mapeo y el segundo botón que no aproveche este mapeo y llame directamente a las mutación de la forma: "$store.commit('<nombre_de_la_mutacion>')"
    }
})