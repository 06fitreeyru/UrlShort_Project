<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URL Shortener</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body>
    
    <div class="page-wrapper chiller-theme toggled">

        <main class="page-content" style="margin-top:50px ">
            <div class='dashboard-app'>

                <div class='dashboard-content'>
                    <div class='container text-center'>
                        <h1>URL Shortener</h1>
                        <form method="POST" action="{{ route('shorten') }}">
                            @csrf
                            <div class="input-group">

                                <input type="text" name="url" class="form-control" placeholder="Enter URL"
                                    required />

                                <button type="submit" class="btn btn-success">Generate</button>
                            </div><br>
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            @if (session('shortened'))
                                <div class="mb-3">
                                    
                                    <h1>URL Short: </h1>
                                    <input type="text" id="myInput" class="form-control"
                                        value="{{ route('redirect', session('shortened')) }}" readonly>
                                    <br>
                                    <button class="btn btn-secondary" onclick="copyText()">คัดลอก</button>
                                </div><br>
                                <div class="mb-3">
                                    <div class="alert alert-warning">
                                        <p>URL นี้จะมีอายุใช้งาน 7 วัน</p>
                                    </div>
                                </div>
                            @endif


                        </form>

                        {{-- <a href="{{ route('login')}}" class="btn btn-primary">go</a> --}}
                    </div>
                </div>
            </div>

        </main>
    </div>
</body>
<script>
    function copyText() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        document.execCommand("copy");
        alert("คัดลอกไปยังคลิปบอร์ดแล้ว! ");

    }
</script>

</html>
