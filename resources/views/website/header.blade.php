<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if(app()->getLocale() == "ar")
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/website/website/css/styleAr.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/website/website/css/wow.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/website/website/css/bootstrapAr.css">

        <link rel="stylesheet" href="{{url('/')}}/design/adminlte/dist/css/rtl/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="{{url('/')}}/design/adminlte/dist/css/rtl/rtl.css">
    @else
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/website/website/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/website/website/css/style.css">
    @endif
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/website/website/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-inverse navbar-inverse navbar-fixed-top shadow-sm navbar-expand-md">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
<div class="logo" >
        <a class="navbar-brand" href="{{url('/home')}}"><img class="image-logo" src="{{asset('storage/image/log1.png')}}"></a>
</div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li><a href="{{url('/home')}}">{{trans('admin.home')}}</a></li>
                <li><a href="{{url('about_us')}}">{{trans('admin.about_us')}}</a></li>
                <li><a href="{{url('contact')}}">{{trans('admin.Contact')}}</a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{trans('admin.logout')}}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ LaravelLocalization::getCurrentLocaleNative() }}
                    </a>
                    <div class="dropdown-menu dropdown dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <!-- Message Start -->
                                <div class="media">
                                    <div class="media-body">
                                        <P class="dropdown-item-title">
                                            <i class="fa fa-flag"></i>
                                            {{ $properties['native'] }}
                                        </P>

                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                        @endforeach
                    </div>

                </li>
            </ul>
        </div><!-- /.navbar-inverse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- start header -->
