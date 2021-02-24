<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/d6e2fe2a12.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        <saludo></saludo>
        <despido></despido>
        <!-- Si ponemos dos componentes, Vue es capáz de captar que los dos son diferentes -->
        <contador></contador>
        <contador></contador>

        <!-- Aquí simulamos la transferencia de datos de componente a componente: -->
        <padre></padre>
        <!-- <hijo></hijo> -->
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<script src="component_saludo.js"></script>
<script src="component_contador.js"></script>

<script src="component_padre.js"></script>
<script src="component_hijo.js"></script>

<script>
// En caso de tener varios archivos con componentes, creamos una instancia general en este archivo HTML
// En caso de tener un sólo archivo con todos los componentes, se crea una instancia depués de todos los componentes, es decir, abajo de todos los componentes (al final del código Javascript)
    const vm = new Vue({ 
        el: "#app"
    })
</script>

</html>


