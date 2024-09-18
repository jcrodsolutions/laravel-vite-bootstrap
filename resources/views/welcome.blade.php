<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config("app.name") }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <d class="row text-center">
            <d class="col"><img src="https://jcrodsolutions.com/resources/img/logo.png" alt="JCRodSolutions"></d>
        </d>
        <div class="row text-center py-2">
            <div class="col border border-end-0 text-uppercase">
                <i class="fas fa-user-shield fa-pull-left fa-beat text-info"></i>
                @lang("Hello")
            </div>
            <div class="col-1 border-bottom border-danger"></div>
            <div class="col border border-start-0 text-primary fw-bold">@lang("WORLD")</div>
        </div>
        <div class="row text-center py-2">
            <div class="col bg-secondary text-white rounded-start-pill">@lang("How's it")</div>
            <div class="col-1 border-top border-warning"></div>
            <div class="col bg-primary text-white rounded-end-pill">@lang("Going?")</div>
        </div>
        <div class="row text-center py-3">
            <div class="col col-offset-2 text-center ">
                <button class="btn btn-primary btn-lg"><i class="fa-solid fa-arrow-right fa-pull-left fa-border"></i>GO!</button>
            </div>
        </div>
    </div>
</body>

</html>