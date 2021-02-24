<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        
        <h1>{{titulo}}</h1>

        <label for="nuevoCarro">Nuevo Carro: </label>
        <span v-bind:title="boundMessageCarros"> <!-- Cuando se pasa el mouse sobre el elemento lanza una descripción que es contenida en la variable "boundMessageCarros" -->
            <input type="text" v-model="nuevoCarro" v-on:keyup.enter="agregarCarro">
        </span>
        <button v-on:click="metodoClick">click</button>
        <!-- Otra forma de captar el evento "click" -->
        <button @click="agregarCarro">Agregar</button>
        <br>
        <label for="nuevaFruta">Nueva Fruta: </label>
        <span v-bind:title="boundMessageFruta"> <!-- Cuando se pasa el mouse sobre el elemento lanza una descripción que es contenida en la variable "boundMessageFruta" -->
            <input type="text" v-model="nuevaFruta" @keyup.enter="agregarFruta">
        </span>
        <button @click="agregarFruta">Agregar</button>

        <span v-if="frutasExist">
            <ul>
                <li v-for="fruta of frutas">{{fruta}}</li>
            </ul>
        </span>
        <ul v-if="carrosExist">
            <li v-for="carro of carros">
                <input type="number" v-model.number="carro.cantidad"> <!-- Debo especificar "v-model.number", si especifico solo "v-model", todo lo que escriba va a ser tratado como String -->
                {{carro.nombre}}: {{carro.cantidad}}
                <span v-if="carro.cantidad == 0"> - Sin Stock</span>
            </li>
        </ul>
        <h4>ToTAL : {{sumarCarros}}</h4>
        <button @click="esconderMostrarCarros">Esconder/Mostar Carros</button>
        <button @click="esconderMostrarFrutas">Esconder/Mostar Frutas</button>
    </div>
</body>
<script src="index.js"></script>
</html>