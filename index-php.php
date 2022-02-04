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
                    <h2>{{card.casa}} {{card.modello}}</h3>
                    <ul>
                        <li>Tipo: {{card.tipo}}</li>
                        <li>Prezzo: {{card.prezzo}}</li>
                        <li>Colore: {{card.colore}}</li>
                        <li>Segmento: {{card.segmento}}</li>
                        <li>Immatricolazione: {{card.immatricolazione}}</li>
                        <li>Km: {{card.km}}</li>
                        <li>Cavalli: {{card.cavalli}}</li>
                        <li>Posti: {{card.posti}}</li>
                        <li>Cambio: {{card.cambio}}</li>
                        <li>Cilindrata: {{card.cilindrata}}</li>
                        <li>Carburante: {{card.carburante}}</li>
                        <li>Dotazioni: {{card.dotazioni}}</li>
                        <li>Descrizione: {{card.descrizione}}</li>
                    </ul>
                   
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>