<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Php Snacks b1 </title>
</head>
<body>
    <main class="main-cont" id="app">
        <div class="img-cont">
            <div class="cards" v-for="card in cars">
                    <h3>{{card.id}}</h3>
                    <h4>{{card.casa}}</h4>
                    <p>{{card.data}}</p>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>