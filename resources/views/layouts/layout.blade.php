<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/ui-style.css') }}">
</head>

<body class="antialiased">
    <div class="container">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#report').hide()
            $('#showReport').click(function() {
                $('#showReport').toggleClass('selected')
                if ($('#report').css('display') == "none") {
                    $.ajax({
                        url: '{{ url("/api/report") }}',
                        method: 'GET',
                        dataType: 'json',
                        data: {
                            createJSON: 1
                        },
                        success: function(r) {
                            let output = "<ul>"
                            r.forEach(function(value) {
                                output += "<li>" + value + "</li>"
                            })
                            output += "</ul>"
                            $('#report').html(output)
                            $('#report').slideDown(400)
                        }
                    })
                } else {
                    $('#report').slideUp(400)
                }
            })
        })
    </script>
    <script src="{{ asset('/js/three.js') }}" type="module"></script>
</body>

</html>