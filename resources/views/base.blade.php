<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<style>
    .form-control {
        margin-bottom: 10px;
    }
</style>
@php
    $session = new Symfony\Component\HttpFoundation\Session\Session();
@endphp

<body>
    <div class="container">
        @if ($session->get('user'))
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-11">
                        <b>Usuário: {{ $session->get('user')->email }}</b>
                    </div>
                    <div class="col-md-1">
                        <a class="pull-right btn-link" style="cursor:pointer;" onclick=sair(event)>Sair</a>
                    </div>
                </div>
            </div>
        @endif

        @yield('conteudo')
    </div>
</body>
<script type="text/javascript" defer>
    function sair(e) {
        e.preventDefault()

        fetch('/logout').then(res => {
            window.location.reload()
        })
    }
</script>

</html>
