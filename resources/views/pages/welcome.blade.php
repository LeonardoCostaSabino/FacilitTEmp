@extends('layouts.public')

@section('content')
<section class='bg-img'>
<div class='container'> 
		<div class='row text-color' style='min-height: 100vh;'>
      <div class='col-md-5'>
        <h1 class='vertical-text'>Sua plataforma otimizada para venda de 
          <strong>
            <br>Previdência Privada
          </strong>
        </h1>
        <div class='div-options-white text-center' style='border-radius:15px; margin-top:5vh'>
          <h5 style='color: #1ABC9C; padding: 3%;'>FAÇA SIMULAÇÃO DE PROPOSTA SIMPLIFICADA</h5>
        </div>
      </div>
    
		</div>
</div>
</section>
		<div class='col-md-12 div-options-white'>
      <br>

      <!-- DIV PARA POSSÍVEIS ERROS DURANTE O PREENCHIMENTO -->
			<div class='container'>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div><br />
        @endif
      <form name='form' method='post' action="/add">
        @csrf
<!-- ====================================================================== -->


          <!-- PRIMEIRA PARTE DO FORMULÁRIO -->
        <h3 class='text-h3' style='padding-top:4%;'>Perfil<img style='float:right;width:3%' src='{{asset("images/Lapis1.png")}}'></h3>
        
          <div class='row text-center' style='padding: 2% 0% 6% 0%;'>
            
            <div class='col-md-6 text-left'>Nome do Cliente<br><input class='input-perfil-idade' type='text' name='nome'></div>
            <div class='col-md-2 text-left'>Idade<br><input id="idade" class='input-perfil-idade' type='text' name='idade'></div>
            <div class='col-md-4 text-left'>Sexo<br><input type='hidden' name='sexo' value=''><input id='h' type='button' onclick='funcao1()' value='Masculino' class='text-radio'><input id='m' type='button' onclick='funcao2()' value='Feminino' class='text-radio'></div>
              
              

              <!-- JAVASCRIPT PARA ENVIAR O SEXO COM O FORM -->
              <script>
                var inputH = document.getElementById('h');
                var inputM = document.getElementById('m');
                var form = document.form.sexo;
                
                function funcao1(){
                  if(inputM.classList.contains('text-radio_active'))
                    inputM.classList.remove('text-radio_active');
                  form.value='M';
                  inputH.classList.add('text-radio_active');
                }

                function funcao2(){
                  if(inputH.classList.contains('text-radio_active'))
                    inputH.classList.remove('text-radio_active');
                  form.value='F';
                  inputM.classList.add('text-radio_active');
                }
              </script>
              <!-- ========================================== -->
              
						
					</div>
			</div>
    </div>
<!-- =============================================================================== -->




                <!-- PREENCHIMENTOS ESPECÍFICOS DO PERFIL DO CLIENTE -->
    <div class='col-md-12 div-options-green'>
			<br>
			<div class='container'>
				<h3 class='text-h3 text-color'>Objetivos do Cliente</h3>
					<div class='row text-center' style='padding: 3% 3% 3% 3%;'>
          
                <input type='hidden' name='perfil' value=>

              <div class='col-md-4 col-sm-4'><input onclick='ffuncao1()' type='button' name='bt1' class='button3'></div>
              <div class='col-md-4 col-sm-4'><input onclick='ffuncao2()' type='button' name='bt2' class='button3'></div>
              <div class='col-md-4 col-sm-4'><input onclick='ffuncao3()' type='button' name='bt3' class='button3'></div>
            



              <!-- JAVASCRIPT PARA ENVIAR O PERFIL COM O FORM -->
              <script>
                  var final = document.form.perfil;
                  var escolhaPerfil1 = document.form.bt1;
                  var escolhaPerfil2 = document.form.bt2;
                  var escolhaPerfil3 = document.form.bt3;

                  function ffuncao1(){
                    if(escolhaPerfil2.classList.contains('button3_active'))
                      escolhaPerfil2.classList.remove('button3_active');
                    else if(escolhaPerfil3.classList.contains('button3_active'))
                      escolhaPerfil3.classList.remove('button3_active');

                      escolhaPerfil1.classList.add('button3_active');
                      final.value="perfil1";
                  }

                  function ffuncao2(){
                    if(escolhaPerfil1.classList.contains('button3_active'))
                      escolhaPerfil1.classList.remove('button3_active');
                    else if(escolhaPerfil3.classList.contains('button3_active'))
                      escolhaPerfil3.classList.remove('button3_active');

                      escolhaPerfil2.classList.add('button3_active');
                      final.value="perfil2";
                  }

                  function ffuncao3(){
                    if(escolhaPerfil1.classList.contains('button3_active'))
                      escolhaPerfil1.classList.remove('button3_active');
                    else if(escolhaPerfil2.classList.contains('button3_active'))
                      escolhaPerfil2.classList.remove('button3_active');

                      escolhaPerfil3.classList.add('button3_active');
                      final.value="perfil3";
                  }
                </script>
                <!-- ===================================================================== -->


					</div>
			</div>
    </div>
<!-- ========================================================================================== -->

                <!-- PREENCHIMENTO DOS CAMPOS COM RELAÇÃO DIRETA COM OS VALORES -->
    <div class='col-md-12 div-options-white'>
			<br>
			<div class='container'>
				<h3 class='text-h3' style='padding-top:3%'>Dados para calculo<img style='float:right;width:3%' src='{{asset("images/Lapis2.png")}}'></h3>
					<div class='row text-center' style='padding: 3% 0% 6% 0%;'>
						
              <div class='col-md-3 text-left'>Tábua Aturial na Compra de Renda<br><input class='input-perfil-plano' type='text' name='tabulaAtur' value='AT-2000'></div>
              <div class='col-md-3 text-left'>Taxa de Juros na Compra de Renda<br><input class='input-perfil-plano' type='text' name='jurosCompra' value='0%'></div>
              <div class='col-md-3 text-left'>Rentabilidade Anual Estimada<br><input class='input-perfil-plano' type='text' name='rentAnualEst' value='4%'></div>
              <div class='col-md-3 text-left'>Idade de Aposentadoria<br><input id="idade_F" class='input-perfil-plano' type='text' name='idade_aposentado'></div>
						
					</div>
			</div>
    </div>
    <div class='col-md-12 div-options-green'>
			<br>
			<div class='container'>
				<h3 class='text-h3' style='padding-top:3%'>Composição da reserva<img style='float:right;width:3%' src='{{asset("images/Lapis1.png")}}'></h3>
					<div class='row text-center' style='padding: 3% 0% 6% 0%;'>
						
              <div id='1' class='col-md-4 text-left'>Contribuição Mensal<br><input id='contribuicao_mensal' onclick='esconderContribuicao_mensal()' class='input-perfil-reserva' type='number' name='contribuicao_mensal'></div>
              <div id='2' class='col-md-4 text-left'>Quanto receber por mês<br><input id='valor_mensal' onclick='esconderValor_mensal()' class='input-perfil-reserva' type='text' name='valor_mensal'></div>
              <div id='3' class='col-md-4 text-left'>Valor Acumulado<br><input id='final_desejado' onclick='esconderFinal_desejado()' class='input-perfil-reserva' type='text' name='valor_acumulado'></div>
              <input class='text-radio-send' type='button' onclick='limpaOpcao()' name='limpa' value='Limpar'>
              <div class='col-md-12 text-left' style='padding-top:8%'>Reserva Estimada<br><input class='input-perfil-reserva' type='text' name='reservaEst' value=''></div>
            
              <script>

                function calcula(){
               var c = document.getElementById('contribuicao_mensal').value;
              //  alert(c);
               var i = 4;
               var t = document.getElementById('idade_F').value - document.getElementById('idade').value;

               var result = c*((1+i)^t);
               
               document.form.reservaEst.value = result;

            
                }
              </script>
						
					</div>
			</div>
    </div>
    
<!-- ================================================================================================== -->

                <!-- BUTTON SUBMIT -->
    <div class='col-md-12 div-options-white'  onclick='calcula()'>
			<div class='container'>
					<div class='row text-center' style='padding: 6% 0% 6% 0%;'>
						<button class='text-radio-send'>Fazer Simulação</button>
					</div>
			</div>
		</div>
    <!-- ================================================================= -->
    </form>


    <!-- JAVASCRIP BLOQUEIA OS CAMPOS QUE SÃO EXCLUDENTES -->
    <script>
      var divcontribuicao_mensal = document.getElementById('1');
      var divvalorMensal = document.getElementById('2');
      var divfinal_desejado = document.getElementById('3');
      var contribuicao_mensal = document.form.contribuicao_mensal;
      var valorMensal = document.form.valor_mensal;
      var final_desejado = document.form.valor_acumulado;
      var limpar = document.form.limpa;

      function limpaOpcao(){
        divvalorMensal.style.display = "";
        divfinal_desejado.style.display = "";
        divcontribuicao_mensal.style.display = "";
        contribuicao_mensal.value='';
        valorMensal.value='';
        final_desejado.value='';
      }

      function esconderContribuicao_mensal() {
        divvalorMensal.style.display = "none";
        divfinal_desejado.style.display = "none";
        valorMensal.value="0";
        final_desejado.value="0";
      }

      function esconderValor_mensal() {
        divcontribuicao_mensal.style.display = "none";
        divfinal_desejado.style.display = "none";
        contribuicao_mensal.value="0";
        final_desejado.value="0";
      }

      function esconderFinal_desejado() {
        divcontribuicao_mensal.style.display = "none";
        divvalorMensal.style.display = "none";
        contribuicao_mensal.value="0";
      valorMensal.value="0";
      }
</script>	
<!-- ========================================================== -->


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@stop