<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UrlShort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        < script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" >
    </script>

    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


</head>

<body>
    @include('layout.sidebar')

    <main class="page-content" style="margin-top:50px ">
        <div class="container bg-white">
            <div>
                <h1>UrlShort</h1>

            </div>

            <div class="container text-center">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="main-box clearfix">
                            <div class="table-responsive ">
                                <table class="table table-bordered table-striped" id="example">
                                    <tr>
                                        <th scope="col" class=" text-center">#</th>
                                        <th scope="col" class=" text-center">original_url</th>
                                        <th scope="col" class=" text-center">short_code</th>
                                    </tr>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($URL as $urls)
                                        <tr>

                                            <td>{{ $i++ }}</td>
                                            <td>{{ $urls->original_url }}</td>
                                            <td>{{ $urls->short_code }}</td>


                                        </tr>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


</body>

</html>
