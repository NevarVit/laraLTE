<!DOCTYPE html>
<html lang="ru">
<head>
@include('layouts.lhead')
</head>

{{--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
--}}
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

    {{-- Main Header --}}
    <header class="main-header">
        @include('layouts.lhedermenu')

    </header>
    {{-- Left side column. contains the logo and sidebar --}}
    @include('layouts.lleftmenu')

    {{-- Content Wrapper. Contains page content --}}
    <div class="content-wrapper">
        {{-- Content Header (Page header) --}}
{{--        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>--}}

        {{-- Main content --}}
        <section class="content">

            {{-- Your Page Content Here --}}

            @yield('content')
        </section>{{-- /.content --}}
    </div>{{-- /.content-wrapper --}}

    {{-- Main Footer --}}
    @include('layouts.lfooter')

    {{-- Control Sidebar --}}
    @include('layouts.lrightmenu')


</div>{{-- ./wrapper --}}

{{-- REQUIRED JS SCRIPTS --}}
@include('layouts.js.ljs')
@include('layouts.js.tablejs')
</body>
</html>

