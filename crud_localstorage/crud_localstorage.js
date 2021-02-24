const app = new Vue({
    el: '#app',
    data: {
        titulo: 'GYM con VUE',
        tareas: [],
        nuevaTarea: ''
    },
    methods: {
        agregarTarea: function(){
            this.tareas.push({
                nombre: this.nuevaTarea,
                estado: false
            })
            console.log(this.tareas)
            this.nuevaTarea = ''

            localStorage.setItem('gym-vue', JSON.stringify(this.tareas))
        },
        editarTarea: function(index){
            this.tareas[index].estado = true
            localStorage.setItem('gym-vue', JSON.stringify(this.tareas))
        },
        eliminarTarea: function(index){
            this.tareas.splice(index, 1) // Remuevo un elemento desde el index anunciado del array
            localStorage.setItem('gym-vue', JSON.stringify(this.tareas))
        }
    },
    created: function(){
        let datosDB = JSON.parse(localStorage.getItem('gym-vue'))
        if(datosDB === null){
            this.tareas = []
        } else{
            this.tareas = datosDB
        }
    }
})