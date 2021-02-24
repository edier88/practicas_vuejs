<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://kit.fontawesome.com/d6e2fe2a12.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div id="app" class="container mt-5">
        <div class="bg-danger" :class="'p-3'"> <!-- En Vue.js las clases dinámicas van así ":class", en este caso le pongo un padding de 3, es decir, un margen de 3 al cuadro -->
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorem voluptate repellat consequuntur eaque animi
            ratione cumque, aut autem quos aliquid odit eos numquam repudiandae, ex temporibus corporis quae architecto.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorem voluptate repellat consequuntur eaque animi
            ratione cumque, aut autem quos aliquid odit eos numquam repudiandae, ex temporibus corporis quae architecto.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorem voluptate repellat consequuntur eaque animi
            ratione cumque, aut autem quos aliquid odit eos numquam repudiandae, ex temporibus corporis quae architecto.</p>
        </div>
        <br>
        <div :class="['p-3','text-white',fondo]"> <!-- En Vue.js las clases dinámicas van así ":class", en este caso le pongo un padding de 3, es decir, un margen de 3 al cuadro; texto blanco; y otra propiedad que viene de la variable "fondo" -->
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorem voluptate repellat consequuntur eaque animi
            ratione cumque, aut autem quos aliquid odit eos numquam repudiandae, ex temporibus corporis quae architecto.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorem voluptate repellat consequuntur eaque animi
            ratione cumque, aut autem quos aliquid odit eos numquam repudiandae, ex temporibus corporis quae architecto.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorem voluptate repellat consequuntur eaque animi
            ratione cumque, aut autem quos aliquid odit eos numquam repudiandae, ex temporibus corporis quae architecto.</p>
        </div>
        <input type="text" class="form-control my-3" v-model="fondo">

        <div class="text-white p-3" :class="{'bg-info' : color, 'bg-success' : !color}"> <!-- si la variable "color" es true el color será "bg-info", cuando la variable "color" sea false, el color será "bg-success" -->
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorem voluptate repellat consequuntur eaque animi
            ratione cumque, aut autem quos aliquid odit eos numquam repudiandae, ex temporibus corporis quae architecto.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorem voluptate repellat consequuntur eaque animi
            ratione cumque, aut autem quos aliquid odit eos numquam repudiandae, ex temporibus corporis quae architecto.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorem voluptate repellat consequuntur eaque animi
            ratione cumque, aut autem quos aliquid odit eos numquam repudiandae, ex temporibus corporis quae architecto.</p>
        </div>

        <button class="btn btn-primary" @click="color = !color">Cambiar color</button> <!-- Lo que hay dentro del evento "@click" es código Javascript puro -->
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="bootstrap.js"></script>
</html>