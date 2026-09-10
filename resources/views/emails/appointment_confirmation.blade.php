@php
    $practice = config('booking.practice');
    $tzLabel  = config('booking.timezone_label');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your appointment with {{ $ctx['provider']['name'] }}</title>
</head>
<body style="margin:0; padding:0; background-color:#f0f3f3; font-family:Helvetica,Arial,sans-serif; color:#333333;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f0f3f3; padding:24px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:560px; background-color:#ffffff; border-radius:8px; padding:32px;">
                    <tr>
                        <td align="center" style="padding-bottom:24px;">
                            <img src="{{ rtrim(config('app.url'), '/') }}/img/logo.png"
                                 alt="Redmond Medical &amp; Mental Health"
                                 width="220" style="max-width:220px; height:auto;">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:18px; font-weight:bold; padding-bottom:12px;">
                            {{ $ctx['patient']['first_name'] }},
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:16px; line-height:1.6; padding-bottom:16px;">
                            Your appointment with {{ $ctx['provider']['name'] }} is:
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:20px; font-weight:bold; padding-bottom:8px;">
                            {{ $ctx['slot']->format('D M j, Y') }} at {{ strtolower($ctx['slot']->format('g:ia')) }} {{ $tzLabel }}
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:14px; color:#666666; padding-bottom:24px;">
                            {{ $ctx['reasonLabel'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:15px; line-height:2; padding-bottom:24px;">
                            &#128197;&nbsp; The calendar invite is attached to this email.<br>
                            &#128203;&nbsp; <span style="color:#666666;">Check-in opens closer to your visit.</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-top:1px solid #e5e5e5; padding-top:20px; font-size:14px; line-height:1.7; color:#555555;">
                            <strong>{{ $practice['name'] }}</strong><br>
                            {{ $practice['address'] }}<br>
                            <a href="tel:{{ $practice['phone_link'] }}" style="color:#D2123A;">{{ $practice['phone'] }}</a><br>
                            <a href="mailto:{{ $practice['email'] }}" style="color:#D2123A;">{{ $practice['email'] }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:20px; font-size:13px; color:#888888; font-style:italic;">
                            Need to cancel or reschedule? Call or text us at {{ $practice['phone'] }}.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
