<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .is-loading {
                opacity: .3;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Message Component
                </div>
                <div id="app" class="container">
                    <message title="With watermelons drink vinegar!" body="When cutting salty chickpeas, be sure they are room temperature."></message>
                    <message title="Futility, afterlife and a simple state of purpose." body="Our calm awareness for suffering is to hear others theosophically."></message>
                    <message title="Cum decor favere, omnes tataes transferre mirabilis, alter ususes." body="Cum cursus ridetis, omnes hilotaees quaestio noster, clemens exsules."></message>
                    <message title="Cold, heavy-hearted peglegs cowardly crush an evil, warm ale." body="Scrawny, wet shipmates cowardly drink a misty, stormy comrade."></message>
                    <message title="Harvest wihtout pressure, and we won’t avoid an admiral." body="Strange, gravimetric klingons cunningly attack a senior, dead c-beam."></message>
                </div>
            </div>
        </div>
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
