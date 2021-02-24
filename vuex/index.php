<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://unpkg.com/vuex@3.6.2/dist/vuex.js"></script>
</head>
<body>
    <div id="app">
        <titulo></titulo>
    </div>
    
</body>

<script src="component.js"></script>

<script>
    // Creo una Store, en donde puedo guardar todas las variables que pueden consumir todos mis componentes de Vue
    // Esto soluciona el problema del engorroso compartir entre componentes, el pasar "props"
    const store = new Vuex.Store({
        state: {
            numero: 10,
            cursos: []
        },
        mutations: {
            aumentar(){
                this.state.numero ++
            },
            disminuir(state){ // Esta es otra forma de hacerlo, para no tener que poner "this" al inicio del state
                state.numero --
            },
            disminuirVarios(state, n){
                state.numero -= n
            },
            llenarCursosDesdeActions_ObtenerCursos(state, cursosDesdeActions){
                state.cursos = cursosDesdeActions
            }
        },
        actions:{   // Las acciones se utilizan para comunicarse con el Backend y traer informacion desde el Backend para nuestros componentes
                    // En este ejemplo hacemos un ejemplo de simulación de consumo de una API, trayendo un JSON almacenado localmente
            
                obtenerCursos: async function ( {commit} ) { // Como parametro de la funcion debe haber un commit, puesto que antes de llamar una mutación, se debe commitear la data
                const data = await fetch('cursos.json')
                const cursos = await data.json()
                commit('llenarCursosDesdeActions_ObtenerCursos', cursos) // Hacemos commit, es decir, llamamos una mutación y le pasamos la data que nos dió el "fetch"
            }
        }
    })

    new Vue({
        el: '#app',
        store: store
    })
</script>

</html>