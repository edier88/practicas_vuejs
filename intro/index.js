const vm = new Vue({ // Asocio el elemento con ID "app" a Vue, para ponerle elementos, metodos, etc.
    el: '#app',
    data: {
        titulo: 'Hola mundo con Vue',
        frutas: ['pera', 'banano', 'manzana'],
        carros: [
            {
                nombre: 'mazda',
                cantidad: 10
            }, {
                nombre: 'chevrolet',
                cantidad: 13
            }, {
                nombre: 'renault',
                cantidad: 2
            }, {
                nombre: 'kia',
                cantidad: 0
            }
        ],
        nuevoCarro: '',
        nuevaFruta: '',
        total: 0,
        boundMessageCarros: 'Ponga la marca de un carro',
        boundMessageFruta: 'Ponga una fruta',
        carrosExist: true,
        frutasExist: true
    },
    methods: { // "methods" es palabra reservada en Vue para crear metodos de un elemento
        metodoClick(){
            console.log("diste click")
        },
        agregarCarro(){ // Metodo para agregar otro objeto "carro" al array "carros"
            this.carros.push({ // Cada vez que invoque este método, generaré otro objeto en el Array "carros"
                nombre: this.nuevoCarro, // Guardo en nombre lo que haya en la variable "nuevoCarro", asociada a un input tipo text en el HTML
                cantidad: 0
            })
            this.nuevoCarro = '' // Después de agregar el objeto al array, reinicializamos la variable en ceros, así el input tipo text se limpiará también
        },
        agregarFruta(){ // Metodo para agregar otro elemento "fruta" al array "frutas"
            this.frutas.push(
                this.nuevaFruta
            )
            this.nuevaFruta = ''
        },
        esconderMostrarCarros(){
            this.carrosExist = !this.carrosExist
        },
        esconderMostrarFrutas(){
            this.frutasExist = !this.frutasExist
            //console.log("fxdhdgj")
        }
    },
    computed: {
        sumarCarros(){
            this.total = 0
            for(carro of this.carros){
                this.total += carro.cantidad
                //console.log(carro.cantidad)
            }
            return this.total
        }
    }
})