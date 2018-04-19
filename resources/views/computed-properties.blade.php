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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Computed Properties
                </div>
                <div id="app">
                    <h2>All Tasks</h2>
                    <ul>
                        <li v-for="task in tasks" v-text="task.description"></li>
                    </ul>
                    <h2>Incomplete Tasks</h2>
                    <ul>
                        <li v-for="task in incompleteTasks" v-text="task.description"></li>
                    </ul>
                </div>
            </div>
        </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
      new Vue({
        el: '#app',
        data: {
          tasks: [
            { description: 'Take the dog out', completed: true },
            { description: 'Wash the dishes', completed: true },
            { description: 'Finish this lesson', completed: false },
            { description: 'Cook the dinner', completed: false }
          ]
        },
        computed: {
          incompleteTasks() {
            return this.tasks.filter(task => ! task.completed);
          }
        }
      });
    </script>
    </body>
</html>
