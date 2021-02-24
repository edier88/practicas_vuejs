Vue.component('saludo', {
    template:
    `
    <div>
        <h1>{{saludo}}</h1>
        <h3>dgfgh</h3>
    </div>
    `,
    data(){
        return {
            saludo: "Hola componente saludo"
        }
    }
})

Vue.component('despido', {
    template:
    `
    <div>
        <h1>{{despido}}</h1>
        <h3>dgfgh</h3>
    </div>
    `,
    data(){
        return {
            despido: "chao pescao"
        }
    }
})