<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagination app</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> 

        <!-- Styles -->
        <style>
            html, body{
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height{
                height: 100vh;
            }

            .flex-center{
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref{
                position: relative;
            }

            .top-right{
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content{
                text-align: center;
            }

            .title{
                font-size: 84px;
            }

            .Links-u{
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                border-spacing: 1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md{
                margin-bottom: px;
            }
        </style>


        <!-- @livewireStyles -->
    </head>
    <body>
        <h1 class="mt-5 text-center">Étudiants</h1>

        <main role="main" class="container">
            <div class="table-responsive">
                <table class="table table-dark table-striped"">
                    <thead>
                        <tr >
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Adult ?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$student ->id}}</td>
                            <td>{{$student ->name}}</td>
                            <td>{{$student ->email}}</td>
                            <td>{{$student ->is_an_adult ? '✅' : '❎'}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

        <!-- @livewireScripts -->
    </body>
</html>
