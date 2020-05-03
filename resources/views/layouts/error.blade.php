<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{asset('assets/icons/default/error.svg')}}">
        <title>{{ $error['message'] }}</title>
        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{asset('css/codebase.min.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>    
    
    <body>
        <div id="page-container" class="main-content-boxed">
            <main id="main-container">
                <div class="hero" style="background:url({{asset('assets/icons/default/error.svg')}}) no-repeat center;">
                    <div class="hero-inner">
                        <div class="content content-full">
                            <div class="py-30 text-center">
                                <div class="display-3 bg-gd-flat text-white">
                                    <i class="fa fa-warning warning-icon"></i> 
                                    {{$error['code']}}
                                </div>
                                <div class="p-5" style="background-color: rgba(255,255,255,0.8);">
                                    <h1 class="h2 font-w700 mt-30 mb-10">Oops.. You just found an error page..</h1>
                                    <h2 class="h3 font-w400 text-muted mb-50">{{$error['description'] ?? 
                                    ''}}</h2>
                                </div>
                                @if(isset($url))
                                    <a class="btn btn-hero btn-rounded btn-alt-secondary" href="be_pages_error_all.html">
                                        <i class="fa fa-arrow-left mr-10"></i> Back to all Errors
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
