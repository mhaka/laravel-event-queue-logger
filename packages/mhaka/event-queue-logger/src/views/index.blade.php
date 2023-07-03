<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Queue Logger</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    Event Queue Logger
    <div class="container">
        {{-- @dump($events) --}}

        <div id="app">
            <queues></queues>
            <events></events>
        </div>
    </div>
    <script src="{{ mix('mhaka/event-queue-logger/src/resources/js/app.js') }}"></script>
</body>

</html>
