<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>{{ trans('calc::messages.title') }}</title>
</head>

<body class="card p-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                {{-- <p>{{ app()->currentLocale() }}</p>

                <select class="form-control" onchange="changeLang(this.value)">
                    <option value="en">English</option>
                    <option value="de">German</option>
                </select> --}}

                <h1 id="lang" class="alert alert-primary text-center">{{ trans('calc::messages.welcome') }}</h1>
                <button id="calculator" class="btn btn-success float-right">Calculator</button>
                <table class="table table-striped table-dark">
                    <tr>
                        <th>#</th>
                        <th>Result</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        @forelse ($calculations as $key => $calculation)
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $calculation['result'] }}</td>
                            <td>{{ $calculation['action'] }}</td>
                        @empty
                            <td>No Data Found..!</td>
                        @endforelse
                    </tr>
                </table>

            </div>
        </div>
    </div>
    <div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script>
        function changeLang(value) {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    if (xmlHttp.responseText) {
                        location.reload();
                    }
                }
            }
            xmlHttp.open("get", "http://practice.test/lang?locale=" + value);
            xmlHttp.send();
        }

        $(document).ready(function() {
            $("#calculator").click(function() {
                $.ajax({
                    method: "POST",
                    url: "http://practice.test/calculation",
                    data: {
                        name: "John",
                        location: "Boston"
                    },
                    success: function(response) {
                        console.log(response);
                    }
                })
            });
        });
    </script>
</body>

</html>
