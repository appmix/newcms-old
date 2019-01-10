<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sections
                </div>

                <div class="links">
                  <a href="/template/bootstrap_grid_basic">BS4 Grid Basic</a>
                  <a href="/template/bootstrap_typography">BS4 Typography</a>
                  <a href="/template/bootstrap_colors">BS4 Colors</a>
                  <a href="/template/bootstrap_tables">BS4 Tables</a>
                  <a href="/template/bootstrap_images">BS4 Images</a>
                  <a href="/template/bootstrap_jumbotron">BS4 Jumbotron</a>
                  <a href="/template/bootstrap_alerts">BS4 Alerts</a>
                  <a href="/template/bootstrap_buttons">BS4 Buttons</a>
                  <a href="/template/bootstrap_button_groups">BS4 Button Groups</a>
                  <a href="/template/bootstrap_badges">BS4 Badges</a>
                  <a href="/template/bootstrap_progressbars">BS4 Progress Bars</a>
                  <a href="/template/bootstrap_pagination">BS4 Pagination</a>
                  <a href="/template/bootstrap_list_groups">BS4 List Groups</a>
                  <a href="/template/bootstrap_cards">BS4 Cards</a>
                  <a href="/template/bootstrap_dropdowns">BS4 Dropdowns</a>
                  <a href="/template/bootstrap_collapse">BS4 Collapse</a>
                  <a href="/template/bootstrap_navs">BS4 Navs</a>
                  <a href="/template/bootstrap_navbar">BS4 Navbar</a>
                  <a href="/template/bootstrap_navbar_fixed">BS4 Navbar</a>
                  <a href="/template/bootstrap_navbar_sticky">BS4 Navbar</a>
                  <a href="/template/bootstrap_forms">BS4 Forms</a>
                  <a href="/template/bootstrap_forms_inputs">BS4 Inputs</a>
                  <a href="/template/bootstrap_forms_input_group">BS4 Input Groups</a>
                  <a href="/template/bootstrap_forms_custom">BS4 Custom Forms</a>
                  <a href="/template/bootstrap_carousel">BS4 Carousel</a>
                  <a href="/template/bootstrap_modal">BS4 Modal</a>
                  <a href="/template/bootstrap_tooltip">BS4 Tooltip</a>
                  <a href="/template/bootstrap_popover">BS4 Popover</a>
                  <a href="/template/bootstrap_scrollspy">BS4 Scrollspy</a>
                  <a href="/template/bootstrap_utilities">BS4 Utilities</a>
                  <a href="/template/bootstrap_flex">BS4 Flex</a>
                  <a href="/template/bootstrap_media_objects">BS4 Media Objects</a>
                  <a href="/template/bootstrap_filters">BS4 Filters</a>
                  <br>

                  <h2 class="left">Bootstrap 4 Grid</h2>
                  <a href="/template/bootstrap_grid_system">BS4 Grid System</a>
                  <a href="/template/bootstrap_grid_stacked_to_horizontal">BS4 Stacked/Horizontal</a>
                  <a href="/template/bootstrap_grid_xsmall">BS4 Grid XSmall</a>
                  <a href="/template/bootstrap_grid_small">BS4 Grid Small</a>
                  <a href="/template/bootstrap_grid_medium">BS4 Grid Medium</a>
                  <a href="/template/bootstrap_grid_large">BS4 Grid Large</a>
                  <a href="/template/bootstrap_grid_xlarge">BS4 Grid XLarge</a>
                  <a href="/template/bootstrap_grid_examples">BS4 Grid Examples</a>
                  <br>

                  <h2>Bootstrap 4 Ref</h2>
                  <a href="/template/bootstrap_ref_all_classes">All Classes</a>
                  <a href="/template/bootstrap_ref_js_alert">JS Alert</a>
                  <a href="/template/bootstrap_ref_js_button">JS Button</a>
                  <a href="/template/bootstrap_ref_js_carousel">JS Carousel</a>
                  <a href="/template/bootstrap_ref_js_collapse">JS Collapse</a>
                  <a href="/template/bootstrap_ref_js_dropdown">JS Dropdown</a>
                  <a href="/template/bootstrap_ref_js_modal">JS Modal</a>
                  <a href="/template/bootstrap_ref_js_popover">JS Popover</a>
                  <a href="/template/bootstrap_ref_js_scrollspy">JS Scrollspy</a>
                  <a href="/template/bootstrap_ref_js_tab">JS Tab</a>
                  <a href="/template/bootstrap_ref_js_tooltip">JS Tooltip</a>
                </div>
            </div>
        </div>
    </body>
</html>
