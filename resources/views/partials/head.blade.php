<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="{{asset('assets/logo.jpeg')}}" sizes="any">
<link rel="icon" href="{{asset('assets/logo.jpeg')}}" type="image/svg+xml">
<link rel="apple-touch-icon" href="{{asset('assets/logo.jpeg')}}">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
{{-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script> --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
@stack('css')
