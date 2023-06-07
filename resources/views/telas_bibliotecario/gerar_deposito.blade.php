<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            margin-left: 2.29cm;
            margin-top: 0.50cm;
            margin-right: 2.03cm;
            margin-bottom: 0.49cm;
        }
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 15px;
            line-height: 20px;
        }
        .header {
            text-align: center;
            font-weight: bold;
        }
        .header p {
            text-align: center;
            font-size: 15px;
            margin: 0;
            padding: 0;
        }
        .header .doc {
            margin-top: 100px;
            text-decoration: underline;
            font-size: 18px;
        }
        .logo-ufape {
            height: 1.27in;
            margin-bottom: 5px;
        }
        .logo-sib {
            float: right;
            width: 2.35cm;
            height: 2.13cm;
        }
        .corpo {
            text-align: justify;
            margin-top: 5rem;
            text-indent: 50px;
        }
        .assinatura {
            margin-top: 8cm;
            width: 100%;
            display: flex;
            text-align: center;
            justify-content: center;
            font-weight: bold;
        }
        .bg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.2;
            width: 11.95cm;
        }
    </style>
</head>

<body>
    <img src="{{public_path('images/sib.png')}}" alt="" class="bg">
    <div class="header">
        <img class="logo-ufape" src="{{public_path('images/a) Proposta de Brasão_0.png')}}" alt="">
        <p>UNIVERSIDADE FEDERAL DO AGRESTE DE PERNAMBUCO</p>
        <p>REITORIA DA UFAPE</p>
        <p>SISTEMA INTEGRADO DE BIBLIOTECAS</p>
        <p class="doc">DECLARAÇÃO DE DEPÓSITO DO TRABALHO <br> ACADÊMICO E NADA CONSTA</p>
    </div>
    <div class="corpo">
        Declaramos que o(a) Discente <strong>{{$discente}}</strong>, portador(a) do CPF <strong>{{$cpf}}</strong>, regularmente matriculado(a) no curso de <strong>{{$curso}}</strong> da <b>Universidade Federal do Agreste de Pernambuco - UFAPE</b> realizou  o depósito do seu trabalho de conclusão de curso, cujo título é: "<b>{{$tcc}}</b>", bem como a entrega do Termo de Autorização para o depósito no Repositório Institucional, cumprindo todos os requisitos necessários. Portanto, não constando pendências com este setor. <br> <br>
    <div class="assinatura">
        <div id="linha">_________________________________________________________________</div>
        <div style="text-align: center;">Direção SIB/UFAPE</div>
    </div>
</body>

</html>
