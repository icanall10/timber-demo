<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Simple Transactional Email</title>
        <link rel="stylesheet" type="text/css" href="{{ url('css/mail.css') }}">
    </head>
    <body>
        <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
            <tr>
                <td>&nbsp;</td>
                <td class="container">
                    <div class="content">

                        <!-- START CENTERED WHITE CONTAINER -->
                        <table role="presentation" class="main">

                            <!-- START MAIN CONTENT AREA -->
                            <tr>
                                <td class="wrapper">
                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                @yield('content')
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- END MAIN CONTENT AREA -->
                        </table>
                        <!-- END CENTERED WHITE CONTAINER -->

                        <!-- START FOOTER -->
                        <div class="footer">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-block">
                                        <p>{{ config('app.name') }}</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- END FOOTER -->

                    </div>
                </td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </body>
</html>