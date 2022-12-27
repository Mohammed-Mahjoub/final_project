
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>error Page</title>
    {{-- Fonts  --}}
    <link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
    {{-- style --}}
    
    <!-- Scripts -->
    <script src="{{ asset('js/error.js') }}" defer></script>

    {{-- style --}}
    <link href="{{ asset('css/error.css') }}  " rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="iron-man">
        <img src="http://www.feralinteractive.com/data/games/legomarvelsavengers/images/characters/full/iron_man.png" alt="ỉronman">
      </div>
      
      <div class="notify">
        <h3>404!</h3>
        <p>الصفحة التي تبحث عنها غير موجودة.</p>
        <a href="{{ route('index') }}"> 
        <button > رجوع الى الصفحة الرئيسية !   </button>
    </a>
      </div>

</body>
</html>