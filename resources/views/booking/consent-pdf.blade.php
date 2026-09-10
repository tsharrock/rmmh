<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Consent forms — {{ $signature['name'] }}</title>
    <style>
        @page { margin: 24mm 18mm; }
        body { font-family: DejaVu Sans, sans-serif; font-size: 10pt; line-height: 1.5; color: #222; }
        h1 { font-size: 15pt; margin: 0 0 2mm; }
        h2 { font-size: 12pt; margin: 6mm 0 2mm; border-bottom: 0.5pt solid #999; padding-bottom: 1mm; }
        h3 { font-size: 11pt; margin: 4mm 0 1mm; }
        h4 { font-size: 10pt; margin: 3mm 0 1mm; }
        p, li { margin: 0 0 2mm; }
        ul { margin: 0 0 2mm 5mm; padding: 0; }
        .masthead { border-bottom: 1pt solid #D2123A; padding-bottom: 3mm; margin-bottom: 5mm; }
        .masthead .practice { font-size: 9pt; color: #555; }
        .sig { margin-top: 8mm; border: 0.75pt solid #333; padding: 4mm; }
        .sig h3 { margin-top: 0; }
        .sig table { width: 100%; border-collapse: collapse; font-size: 9.5pt; }
        .sig td { padding: 1.2mm 0; vertical-align: top; }
        .sig td.k { width: 42mm; color: #555; }
        .typed { font-family: DejaVu Serif, serif; font-size: 13pt; }
        .meta { margin-top: 4mm; font-size: 8pt; color: #666; }
    </style>
</head>
<body>
    <div class="masthead">
        <h1>{{ $practice['name'] }}</h1>
        <div class="practice">
            {{ $practice['address'] }} &nbsp;·&nbsp; {{ $practice['phone'] }} &nbsp;·&nbsp; {{ $practice['email'] }}
        </div>
    </div>

    @include('booking.consent-text')

    <div class="sig">
        <h3>Signature</h3>

        <table>
            <tr>
                <td class="k">Signed by</td>
                <td class="typed">{{ $signature['name'] }}</td>
            </tr>
            <tr>
                <td class="k">Date of birth</td>
                <td>{{ $signature['dob'] }}</td>
            </tr>
            <tr>
                <td class="k">Agreed</td>
                <td>{{ $signature['agreed_at']->format('l, j F Y \a\t g:ia T') }}</td>
            </tr>
            @if (! empty($signature['authorized_contacts']))
                <tr>
                    <td class="k">Authorized contacts</td>
                    <td>{{ $signature['authorized_contacts'] }}</td>
                </tr>
            @endif
        </table>

        <div class="meta">
            Signed electronically during online booking. Consent version {{ $signature['version'] }}.
            @if (! empty($signature['ip']))
                Submitted from {{ $signature['ip'] }}.
            @endif
        </div>
    </div>
</body>
</html>
