@extends('layouts.public')

@section('content')
      
<div class='container'>


      <!-- INÍCIO DA PROPOSTA COM O NOME DO CORRETOR -->
<div class='container'  style='padding:6% 0% 3% 0%'>
    <div class='div-second-dark-green'>
        <div class='row'>
            <div class='col-md-12'>
                <p class='text-color' style='padding:2% 3% 0% 3%'>
                <strong>Nome do corretor</strong><br>Segue abaixo a proposta de seu Cliente</p>
            </div>

        </div>
    </div>
</div>
<!-- =============================================================================== -->




        <!-- DIV PERSONALIZADA DE ACORDO COM AS PREFERÊNCIAS DO CLIENTE -->
<div class='container'  style='padding:0% 0% 3% 0%'>
    <div class='div-second-gray'>
        <div class='row'>
            <div class='col-md-12'>
                <p class='' style='padding:2% 3% 0% 3%'>
                <strong>Oi João, percebemos sua preocupação com o futuro da família</strong>
                <br>Por isso, conheça a proposta de Previdência que preparamos para você.</p>
                <br>
                <div style='padding:2% 3% 0% 3%'>
                    <p>O plano ideal para você é:<br>
                        <h1><strong id='planoSugerido'>VGBL</strong></h1>
                    </p>
                </div>
            </div>
        </div>
        <!-- ====================================================================== -->




            <!-- CAMPOS COM OS RESULTADOS DE CALCULOS DA CORRETORA -->
        <div class='div-second-gray'>
            <div class='col-md-12'>
                <div class='div-total' style='padding:2% 2% 0% 2%'>
                    <p class='dark-gray' style='padding:2% 2% 2% 2%'>
                    <strong>Total Acumulado</strong>
                    <br><strong id='totalAcumulado'>R$18000</strong></p>
                </div>
            </div>
        </div>
        <div class='div-second-gray'>
            <div class='col-md-12'>
                <div class='' style='padding:2% 2% 0% 2%'>
                    <strong>Renda Mensal Bruta Estimada</strong>
                    <br><input type='text' class='input-second' name='mensalBruta' value='R$ 112,37'>
                </div>
            </div>
        </div>
        <div class='div-second-gray'>
            <div class='col-md-12'>
                <div class='' style='padding:2% 2% 0% 2%'>
                    <strong>Começar a receber aos</strong>
                    <br><input type='text' class='input-second' name='comecaRecebe' value='55 anos'>
                </div>
            </div>
        </div>
        <div class='div-second-gray'>
            <div class='col-md-12'>
                <div class='' style='padding:2% 2% 0% 2%'>
                    <strong>Contribuição Mensal</strong>
                    <br><input type='text' class='input-second' name='contribMensal' value='R$ 50,00'>
                </div>
            </div>
        </div>
        <div class='div-second-gray'>
            <div class='col-md-12'>
                <div class='' style='padding:2% 2% 0% 2%'>
                    <strong>Investimento Inicial</strong>
                    <br><input type='text' class='input-second' name='aporte' value='R$ 0,00'>
                </div>
            </div>
        </div>
        <div class='row' style='padding:0% 20% 5% 20%'>

                <div  class='col-md-5 text-left dark-gray'>
                    <div style='margin-top:5%'>
                        <strong>Total Acumulado</strong>
                        <br>R$<input type='text' class='input-second' name='totAcumulado' value='25.442,41'>
                    </div>
                </div>
                <div class='col-md-2'style="min-height: 20px;"></div>
                <div class='col-md-5 text-left dark-gray'>
                    <div style='margin-top:5%'>
                        <strong>Total Investido</strong>
                        <br>R$<input type='text' class='input-second' name='totInvest' value='25.442,41'>
                    </div>
                </div>

        </div>
<!-- ================================================================================================================ -->



            <!-- BUTTON PARA CONTRATAÇÃO DO CLIENTE -->
        <div class='container text-center'>
					<div class='row text-center' style='padding: 6% 6% 3% 40%;'>
						<button class='text-color last-text-radio-send'>Tenho interesse</button>
					</div>
        </div>
<!-- ====================================================================== -->


        <hr style='width:90%'>
        <div class='container' style='padding:5% 5% 5% 5%'>
            <div class='row'>
                <div class='col-md-1'></div>
                <div class='col-md-10' style='font-size:10px;'>Os valores informados são meramente exemplificativos, não constituindo 
                    obrigação contratual da Seguradora. Para essa simulação foi considerada Tábua Biométrica 
                    (M/F) e taxa de juros de 0% a.a. após a concessão do benefício. A renda apresentada no 
                    simulador é uma estimativa. O valor efetivo somente será calculado no momento da solicitação 
                    do recebimento, com base no valor de reserva acumulado no período e na tábua e taxa de juros 
                    do plano contratado. O valor da renda apresentado não está líquido de Imposto de Renda. A 
                    rentabilidade anual estimada não é uma garantia, pois dependerá da performance do fundo 
                    escolhido do seu Plano.</div>
                <div class='col-md-1'></div>
            </div>
        </div>

</div>
</div>
@endsection