Vue.component('hijo', {
    template:
    `
    <div class="py-5 bg-success">
        <h4>Componente Hijo: {{numero}}</h4>
        <h5>Nombre: {{nombre}}</h5>
    </div>
    `,
    props: ['numero'],
    data(){
        return{
            nombre: 'Ignacio'
        }
    },
    mounted(){ // Esto hace parte del ciclo de vida de Vue, esto se ejecutará cuando el DOM esté completamente renderizado
        this.$emit('nombreHijo', this.nombre) // emitimos un evento llamado "nombreHijo". Se emitirá la variable "nombre" una vez que el DOM está completamente montado.
    }
})