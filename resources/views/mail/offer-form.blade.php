<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapytanie ofertowe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0px;
            font-size: 24px;
            color: rgb(230, 125, 80);
        }

        .content {
            margin-bottom: 20px;
        }

        .content p {
            margin: 0px 0px 10px;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Zapytanie ofertowe</h1>
        </div>

        <div class="content">
            <p><strong>Imię i nazwisko</strong> {{ $senderName }}</p>
            <p><strong>Email:</strong> {{ $senderAddress }}</p>
            <p><strong>Miasto:</strong> {{ $senderCity }}</p>
            <p><strong>Nr telefonu:</strong> {{ $senderPhoneNr }}</p>
            <hr>
            <table cellspacing='0' cellpadding='7' width='100%'>
                @foreach ($fields as $name => $value)
                    <tr style='background-color:{{ $loop->index % 2 == 0 ? '#eee' : '#fff' }};'>
                        <td align='left'><strong>{{ $name }}:</strong></td>
                        <td align='left'>{{ $value }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="footer">
            <p>Czas to pieniądz!</p>
        </div>
    </div>
</body>

</html>
