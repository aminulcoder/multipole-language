<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <h2>Multipul Language website laravel 9</h2>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <strong>select language :</strong>
                <select class="form-control lang-change">
                    <option value="en" {{session()->get('lang_code')=='en' ? 'selected' : ''}}>English</option>
                    <option value="sp" {{session()->get('lang_code')=='sp' ? 'selected' : ''}}>Spanish</option>
                    <option value="bn" {{session()->get('lang_code')=='bn' ? 'selected' : ''}}>Bangla</option>
                </select>
            </div>
        </div>
        <h4 class="mt-5">{{__('text.content')}}</h4>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
      var url = "{{route('lang.change')}}";
        $('.lang-change').change(function () {
            let lang_code = $(this).val();
            window.location.herf = url +'?lang' + lang_code ;
        });

    </script>
</body>

</html>
