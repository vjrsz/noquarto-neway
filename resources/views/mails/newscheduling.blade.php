<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>
    <div style="width:500px">
        <table>
            <tr>
                <th style="width: 500px; background: #023F88; height: 100px;"><img src="{{asset('img/logo.png')}}"></th>
            </tr>
        </table>

        <table>
            <tr>
                <th>
                    <p
                        style="font-family: 'Arial'; margin-bottom: 5px; font-style: normal; font-weight: 700; font-size: 18px; line-height: 20px; /* identical to box height */ text-transform: uppercase; color: #FF7506;">
                        Informações agendamento</p>
                    <p
                        style="font-family: 'Arial';  float: left; text-align: initial;  font-weight: 400; font-size: 16px; line-height: 35px; color: #7B7B7B;">
                        Nome: {{$scheduling->name}}<br>
                        E-mail: {{$scheduling->email}}</p>
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th>
                    <p
                        style="font-family: 'Arial'; font-style: normal; font-weight: 600; font-size: 16px; line-height: 5px;     margin-bottom: 5px; color: #000000;">
                        Opções selecionadas:</p>
                    <p
                        style="font-family: 'Arial'; float: left; text-align: initial;  font-weight: 400; font-size: 16px; line-height: 35px; color: #7B7B7B;">
                        Formato: {{ $scheduling->format() }}
                        <br>Terá SPA: {{ $scheduling->spa() }}
                        <br>Azulejo: {{ $scheduling->azulejo() }}
                        <br>Borda: {{ $scheduling->border() }}
                        <br>Deck: {{ $scheduling->deck() }}
                        <br>Plaster: {{ $scheduling->plaster() }}
                    </p>
                </th>
            </tr>
        </table>

        <table>
            <tr>
                <th>
                    <p
                        style="font-family: 'Arial'; font-style: normal; text-align: initial; font-weight: 600; font-size: 16px; line-height: 5px;     margin-bottom: 5px; color: #000000;">
                        Data e hora:</p>
                    <p
                        style="font-family: 'Arial'; float: left; text-align: initial;  font-weight: 400; font-size: 16px; line-height: 35px; color: #7B7B7B;">
                        Data: {{date('d/m/Y', strtotime($scheduling->date))}}<br>
                        Horário: {{$scheduling->time}}</p>
                </th>
            </tr>
        </table>

        <hr>

        <table>
            <tr>
                <th>
                    <p
                        style="font-family: 'Arial'; text-align: center;  font-weight: 400; font-size: 16px; line-height: 35px; color: #7B7B7B;">
                        © Copyright 2022. Todos os direitos reservados</p>
                </th>
            </tr>
        </table>
    </div>
</body>

</html>
