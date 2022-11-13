<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{str_replace('_', ' ', env("APP_NAME"))}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{--todo head links--}}
    <x-v1.link.headlink></x-v1.link.headlink>
    {{--todo section style--}}
    @yield('styles')
</head>

<body>
{{--todo  nav bar--}}
<x-v1.bar.navbar></x-v1.bar.navbar>
{{--todo side bar--}}
<x-v1.bar.sidebar :items="$sidebar"></x-v1.bar.sidebar>


<main id="main" class="main">
    <x-v1.breadcumb.breadcumb :routeName="$routeName"></x-v1.breadcumb.breadcumb>

    @yield('content')

</main>
{{--todo footer--}}
{{--<x-v1.bar.bottom-bar></x-v1.bar.bottom-bar>--}}


{{--todo script links--}}
<x-v1.link.scriptlink></x-v1.link.scriptlink>
{{--todo section scripts--}}
@yield('scripts')
</body>

</html>

