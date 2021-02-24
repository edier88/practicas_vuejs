<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://kit.fontawesome.com/d6e2fe2a12.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app" class="container mt-5">

        <h3>{{titulo}}</h3>
        <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea"> <!-- "my-3" un margen arriba y abajo de 3 -->
        <button class="btn btn-primary" @click="agregarTarea">Agregar</button>

        <div class="mt-3" v-for="(tarea, index) of tareas"> <!-- De esta manera vamos a tener el elemento del array pero también su index en cada interación -->
            <!-- <div class="mt-3"> -->
                <!-- <div class="alert alert-primary" role="alert"> -->
                <div :class="['alert', tarea.estado ? 'alert-success' : 'alert-danger']" role="alert">
                <div class="d-flex justify-content-between"> <!-- leer "d-flex" de bootstrap -->
                    <div>
                        {{index}}. {{tarea.nombre}} - {{tarea.estado}}
                    </div>
                    <div>
                        <button class="btn btn-success btn-sm" @click="editarTarea(index)">Activar</button> <!-- "btn-sm" botones pequeños -->
                        <button class="btn btn-danger btn-sm" @click="eliminarTarea(index)">X</button>
                    </div>
                </div>
                </div>
            <!-- </div> -->
        </div>
        
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="crud_localstorage.js"></script>
</html>