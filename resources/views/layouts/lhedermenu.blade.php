{{-- Logo --}}
<a href="{{ url('/home') }}" class="logo">
	{{-- mini logo for sidebar mini 50x50 pixels --}}
	<span class="logo-mini"><b>C</b>RM</span>
	{{-- logo for regular state and mobile devices --}}
	<span class="logo-lg"><b>Asgart </b>PRO</span>
</a>

{{-- Header Navbar --}}
<nav class="navbar navbar-static-top" role="navigation">
	{{-- Sidebar toggle button--}}
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>
	{{-- Navbar Right Menu --}}
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			{{-- Почта меню оповещения Messages: style can be found in dropdown.less--}}

			{{-- Menu toggle button --}}

			{{-- inner menu: contains the messages --}}

			{{-- start message --}}

			{{-- User Image --}}

			{{-- Message title and timestamp --}}

			{{-- end message --}}

			{{-- /.menu --}}

			{{-- /.messages-menu --}}

			{{-- Меню Оповещения Notifications Menu --}}

			{{-- Menu toggle button --}}

			{{-- Inner Menu: contains the notifications --}}

			{{-- start notification --}}

			{{-- end notification --}}

			{{-- Меню Задач Tasks Menu --}}

			{{-- Menu Toggle Button --}}

			{{-- Inner menu: contains the tasks --}}

			{{-- Task item --}}

			{{-- Task title and progress text --}}

			{{-- The progress bar --}}

			{{-- Change the css width attribute to simulate progress --}}

			{{-- end task item --}}

			{{-- User Account Menu --}}
			<li class="dropdown user user-menu">
				{{-- Menu Toggle Button --}}
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					{{-- The user image in the navbar--}}
					<img src="{{ asset('assets/img/logo.png') }}" class="user-image" alt="User Image">
					{{-- hidden-xs hides the username on small devices so only the image appears. --}}
					<span class="hidden-xs">{{ Auth::user()->name }}</span>
				</a>
				<ul class="dropdown-menu">
					{{-- The user image in the menu --}}
					<li class="user-header">
						<img src="{{ asset('assets/img/avatar04.png') }}" class="img-circle" alt="User Image">
						<p>
							{{ Auth::user()->name }}  {{ Auth::user()->lastname }}
							{{--Alexander Pierce - Web Developer--}}
							<small>Стаж работы с Апреля 2015</small>
						</p>
					</li>
					{{-- Меню пользователя Menu Body --}}
{{--					<li class="user-body">
						<div class="col-xs-4 text-center">
							<a href="#">Followers</a>
						</div>
						<div class="col-xs-4 text-center">
							<a href="#">Sales</a>
						</div>
						<div class="col-xs-4 text-center">
							<a href="#">Friends</a>
						</div>
					</li>--}}
					{{-- Menu Footer--}}
					<li class="user-footer">
						<div class="pull-left">
							<a href="#" class="btn btn-primary btn-flat">Профиль</a>
						</div>
						<div class="pull-right">
							<a href="{{ url('/logout') }}" class="btn btn-danger btn-flat">Выход</a>
						</div>
					</li>
				</ul>
			</li>
			{{-- Правое Меню Настроек кнопки Control Sidebar Toggle Button --}}
			{{--<li>
				<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
			</li>--}}
		</ul>
	</div>
</nav>