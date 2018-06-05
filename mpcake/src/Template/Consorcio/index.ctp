<div class="container">
	<div class="col-md-12 consorcio">
		<h2></h2>
		<div class="col-md-4">
		<label>tipo de ficha</label>
		<select id="options"onchange="optionCheck()">
			<option value="selected" selected>Escolher</option>
			<option value="show">Pessoa Física</option>
			<option value="goto">Pessoa Jurídica</option>

		</select>
	</div>

		<div class="col-md-12 retira-padding pessoafisica" id="invisivel">

			<h2>Dados pessoa fisíca</h2>
			<div class="row">
				<div class="col-md-4">
					<label>Nome</label>
				<input type="text" name="">
				</div>
				<div class="col-md-4">
					<label>CPF</label>
				<input type="text" name="">
				</div>
				<div class="col-md-4">
					<label>RG</label>
				<input type="text" name="">
				</div>

			</div>
			<div class="row">
				<div class="col-md-1">

				<label>Emissor</label>
		<select>
			<option>Ac</option>
			<option>Al</option>
			<option>Ap</option>
			<option>Am</option>
			<option>Ba</option>
			<option>Ce</option>
			<option>DF</option>
			<option>ES</option>
			<option>Go</option>
			<option>MA</option>
			<option>Mt</option>
			<option>MS</option>
			<option>MG</option>
			<option>Pa</option>
			<option>Pb</option>
			<option>Pr</option>
			<option>Pe</option>
			<option>Pi</option>
			<option>RJ</option>
			<option>RN</option>
			<option>RS</option>
			<option>Ro</option>
			<option>Rr</option>
			<option>SC</option>
			<option>SP</option>
			<option>Se</option>
			<option>To</option>

		</select>

				</div>
				<div class="col-md-2">
					<label>Data Emissao</label>
				<input type="text" name="">

				</div>
				<div class="col-md-2">

					<label>Data Nascimento</label>
				<input type="text" name="">

				</div>
				<div class="col-md-2">
					<input type="radio" id="masculino"
     name="masculino" value="masculino">
    <label for="masculino">Masc</label>

    <input type="radio" id="feminino"
     name="feminino" value="feminino">
    <label for="feminino">Fem</label>

				</div>
				<div class="col-md-5">

					<input type="radio" id="solteiro"
     name="solteiro" value="solteiro">
    <label for="solteiro">Solteiro(a)</label>

    <input type="radio" id="casado"
     name="casado" value="casado">
    <label for="casado">casado(a)</label>

    <input type="radio" id="divorciado"
     name="divorciado" value="divorciado">
    <label for="divorciado">divorciado(a)</label>

    <input type="radio" id="viuvo"
     name="viuvo" value="viuvo">
    <label for="viuvo">viuvo(a)</label>

    <input type="radio" id="outro"
     name="outro" value="outro">
    <label for="outro">Outro</label>

				</div>

			</div>
			<div class="row">
				<div class="col-md-3">

					<label>Naturalidade</label>
				<input type="text" name="">

				</div>
				<div class="col-md-1">

					<label>UF</label>
		<select>
			<option>Ac</option>
			<option>Al</option>
			<option>Ap</option>
			<option>Am</option>
			<option>Ba</option>
			<option>Ce</option>
			<option>DF</option>
			<option>ES</option>
			<option>Go</option>
			<option>MA</option>
			<option>Mt</option>
			<option>MS</option>
			<option>MG</option>
			<option>Pa</option>
			<option>Pb</option>
			<option>Pr</option>
			<option>Pe</option>
			<option>Pi</option>
			<option>RJ</option>
			<option>RN</option>
			<option>RS</option>
			<option>Ro</option>
			<option>Rr</option>
			<option>SC</option>
			<option>SP</option>
			<option>Se</option>
			<option>To</option>

		</select>

				</div>
				<div class="col-md-2">
					<input type="radio" id="brasileiro"
     name="brasileiro" value="brasileiro">
    <label for="brasileiro">BR</label>

    <input type="radio" id="estrangeiro"
     name="estrangeiro" value="estrangeiro">
    <label for="estrangeiro">outro</label>
				</div>
				<div class="col-md-3">

					<label>Pai</label>
				<input type="text" name="">

				</div>
				<div class="col-md-3">
					<label>Mãe</label>
				<input type="text" name="">
				</div>

			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Email</label>
				<input type="text" name="">

				</div>
				<div class="col-md-4">
					<label>Fone</label>
				<input type="text" name="">

				</div>
				<div class="col-md-4">
					<label>Celular</label>
				<input type="text" name="">

				</div>

			</div>


		</div>
		<div class="col-md-12 retira-padding dados-profissionais">
			<h2>Dados profissionais</h2>
			<div class="row">
			<div class="col-md-6">
				<label>Empresa</label>
				<input type="text" name="">
			</div>
			<div class="col-md-6">
				<label>CNPJ</label>
				<input type="text" name="">
			</div>

		</div>
		<div class="row">

			<div class="col-md-6">
				<input type="radio" id="assalariado"
     name="assalariado" value="assalariado">
    <label for="assalariado">assalariado(a)</label>

    <input type="radio" id="empresario"
     name="empresario" value="empresario">
    <label for="empresario">empresario(a)</label>

    <input type="radio" id="autonomo"
     name="autonomo" value="autonomo">
    <label for="autonomo">autonomo(a)</label>

    <input type="radio" id="liberal"
     name="liberal" value="liberal">
    <label for="liberal">liberal</label>

    <input type="radio" id="outro"
     name="outro" value="outro">
    <label for="outro">Outro</label>
			</div>
			<div class="col-md-3">
				]<label>Cargo</label>
				<input type="text" name="">
			</div>
			<div class="col-md-3">
				<label>tempo</label>
				<input type="text" name="">
			</div>
		</div>

		<div class="row">
				<div class="col-md-12">
				<label>Endereço, nº, bairro</label>
				<input type="text" name="">
			</div>
		</div>

			<div class="row">
				<div class="col-md-3">
					<label>CEP</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<label>Cidade</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<label>Estado</label>
		<select>
			<option>Acre</option>
			<option>Alagoas</option>
			<option>Amapá</option>
			<option>Amazonas</option>
			<option>Bahia</option>
			<option>Ceará</option>
			<option>Distrito Federal</option>
			<option>Espiríto Santo</option>
			<option>Goiás</option>
			<option>Maranhão</option>
			<option>Mato Grosso</option>
			<option>Mato Grosso do Sul</option>
			<option>Minas Gerais</option>
			<option>Pará</option>
			<option>Paraíba</option>
			<option>Paraná</option>
			<option>Pernambuco</option>
			<option>Piauí</option>
			<option>Rio de Janeiro</option>
			<option>Rio Grande do Norte</option>
			<option>Rio Grande do Sul</option>
			<option>Rondônia</option>
			<option>Roraima</option>
			<option>Santa Catarina</option>
			<option>São Paulo</option>
			<option>Sergipe</option>
			<option>Tocantins</option>

		</select>
				</div>
				<div class="col-md-3">
					<label>Fone</label>
				<input type="text" name="">
				</div>


			</div>


		</div>

		<div class="col-md-12 retira-padding dados-conjuge">

			<h2>Dados conjugê</h2>
			<div class="row">
				<div class="col-md-4">
					<label>Nome</label>
				<input type="text" name="">
				</div>
				<div class="col-md-4">
					<label>CPF</label>
				<input type="text" name="">
				</div>
				<div class="col-md-4">
					<label>RG</label>
				<input type="text" name="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label>Emissor</label>
		<select>
			<option>Ac</option>
			<option>Al</option>
			<option>Ap</option>
			<option>Am</option>
			<option>Ba</option>
			<option>Ce</option>
			<option>DF</option>
			<option>ES</option>
			<option>Go</option>
			<option>MA</option>
			<option>Mt</option>
			<option>MS</option>
			<option>MG</option>
			<option>Pa</option>
			<option>Pb</option>
			<option>Pr</option>
			<option>Pe</option>
			<option>Pi</option>
			<option>RJ</option>
			<option>RN</option>
			<option>RS</option>
			<option>Ro</option>
			<option>Rr</option>
			<option>SC</option>
			<option>SP</option>
			<option>Se</option>
			<option>To</option>

		</select>
				</div>
				<div class="col-md-3">
					<label>Data Emissão</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<label>Data Nascimento</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<input type="radio" id="masculino"
     name="masculino" value="masculino">
    <label for="masculino">Masc</label>

    <input type="radio" id="feminino"
     name="feminino" value="feminino">
    <label for="feminino">Fem</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">

					<label>Naturalidade</label>
				<input type="text" name="">

				</div>
				<div class="col-md-1">

					<label>UF</label>
		<select>
			<option>Ac</option>
			<option>Al</option>
			<option>Ap</option>
			<option>Am</option>
			<option>Ba</option>
			<option>Ce</option>
			<option>DF</option>
			<option>ES</option>
			<option>Go</option>
			<option>MA</option>
			<option>Mt</option>
			<option>MS</option>
			<option>MG</option>
			<option>Pa</option>
			<option>Pb</option>
			<option>Pr</option>
			<option>Pe</option>
			<option>Pi</option>
			<option>RJ</option>
			<option>RN</option>
			<option>RS</option>
			<option>Ro</option>
			<option>Rr</option>
			<option>SC</option>
			<option>SP</option>
			<option>Se</option>
			<option>To</option>

		</select>

				</div>
				<div class="col-md-2">
					<input type="radio" id="brasileiro"
     name="brasileiro" value="brasileiro">
    <label for="brasileiro">BR</label>

    <input type="radio" id="estrangeiro"
     name="estrangeiro" value="estrangeiro">
    <label for="estrangeiro">outro</label>
				</div>
				<div class="col-md-3">

					<label>Fone</label>
				<input type="text" name="">

				</div>
				<div class="col-md-3">
					<label>Celular</label>
				<input type="text" name="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Empresa</label>
				<input type="text" name="">
				</div>
				<div class="col-md-6">
					<label>CNPJ</label>
				<input type="text" name="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
				<input type="radio" id="assalariado"
     name="assalariado" value="assalariado">
    <label for="assalariado">assalariado(a)</label>

    <input type="radio" id="empresario"
     name="empresario" value="empresario">
    <label for="empresario">empresario(a)</label>

    <input type="radio" id="autonomo"
     name="autonomo" value="autonomo">
    <label for="autonomo">autonomo(a)</label>

    <input type="radio" id="liberal"
     name="liberal" value="liberal">
    <label for="liberal">liberal</label>

    <input type="radio" id="outro"
     name="outro" value="outro">
    <label for="outro">Outro</label>
			</div>
			<div class="col-md-3">
				]<label>Cargo</label>
				<input type="text" name="">
			</div>
			<div class="col-md-3">
				<label>tempo</label>
				<input type="text" name="">
			</div>

			</div>
			<div class="row">

				<div class="col-md-12">
				<label>Endereço, nº, bairro</label>
				<input type="text" name="">
			</div>

			</div>
			<div class="row">
				<div class="col-md-3">
					<label>CEP</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<label>Cidade</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<label>Estado</label>
		<select>
			<option>Acre</option>
			<option>Alagoas</option>
			<option>Amapá</option>
			<option>Amazonas</option>
			<option>Bahia</option>
			<option>Ceará</option>
			<option>Distrito Federal</option>
			<option>Espiríto Santo</option>
			<option>Goiás</option>
			<option>Maranhão</option>
			<option>Mato Grosso</option>
			<option>Mato Grosso do Sul</option>
			<option>Minas Gerais</option>
			<option>Pará</option>
			<option>Paraíba</option>
			<option>Paraná</option>
			<option>Pernambuco</option>
			<option>Piauí</option>
			<option>Rio de Janeiro</option>
			<option>Rio Grande do Norte</option>
			<option>Rio Grande do Sul</option>
			<option>Rondônia</option>
			<option>Roraima</option>
			<option>Santa Catarina</option>
			<option>São Paulo</option>
			<option>Sergipe</option>
			<option>Tocantins</option>

		</select>
				</div>
				<div class="col-md-3">
					<label>Fone</label>
				<input type="text" name="">
				</div>
			</div>

		</div>

		<div class="col-md-12 retira-padding pessoajuridica">

				<h2>Dados pessoa jurídica</h2>
			<div class="row">
				<div class="col-md-4">
				<label>Razão Social</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Data Fundação</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>CNPJ</label>
				<input type="text" name="">
				
			</div>
			</div>

			<div class="row">
				<div class="col-md-4">
				<label>Inscrição Estadual</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Seu nome</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Cargo</label>
				<input type="text" name="">
				
			</div>
			</div>

			<div class="row">
				<div class="col-md-4">
				<label>Email</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Fone</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Fone do contador</label>
				<input type="text" name="">
				
			</div>
			</div>
			



		</div>

		<div class="col-md-12 retira-padding veiculo-consorcio">
			<h2>Veículo</h2>
			<div class="row">
				<div class="col-md-4">
				<label>Marca</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Modelo</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				
				<input type="radio" id="seminovo"
     name="seminovo" value="Seminovo">
    <label for="seminovo">Seminovo</label>

    <input type="radio" id="novo"
     name="novo" value="0Km">
    <label for="novo">0 Km</label>
			</div>
			</div>
			<div class="row">
					<div class="col-md-4">
				<label>Ano</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Valor do veículo</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Valor da entrada</label>
				<input type="text" name="">
			</div>
			</div>

		</div>
		<div class="col-md-12 retira-padding endereco-consorcio">


				<h2>Endereço</h2>
			<div class="row">
				<div class="col-md-12">
				<label>Endereço, nº, bairro</label>
				<input type="text" name="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>CEP</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Cidade</label>
				<input type="text" name="">
				
			</div>
			<div class="col-md-4">
				<label>Estado</label>
		<select>
			<option>Acre</option>
			<option>Alagoas</option>
			<option>Amapá</option>
			<option>Amazonas</option>
			<option>Bahia</option>
			<option>Ceará</option>
			<option>Distrito Federal</option>
			<option>Espiríto Santo</option>
			<option>Goiás</option>
			<option>Maranhão</option>
			<option>Mato Grosso</option>
			<option>Mato Grosso do Sul</option>
			<option>Minas Gerais</option>
			<option>Pará</option>
			<option>Paraíba</option>
			<option>Paraná</option>
			<option>Pernambuco</option>
			<option>Piauí</option>
			<option>Rio de Janeiro</option>
			<option>Rio Grande do Norte</option>
			<option>Rio Grande do Sul</option>
			<option>Rondônia</option>
			<option>Roraima</option>
			<option>Santa Catarina</option>
			<option>São Paulo</option>
			<option>Sergipe</option>
			<option>Tocantins</option>

		</select>
			</div>



			</div>

			<div class="row">
				<div class="col-md-4">
				<label>Tempo no local</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<label>Valor (se própria)</label>
				<input type="text" name="">
			</div>
			<div class="col-md-4">
				<input type="radio" id="proprio"
     name="proprio" value="Proprio">
    <label for="proprio">Próprio</label>

    <input type="radio" id="financiado"
     name="financiado" value="Financiado">
    <label for="financiado">Financiado</label>

    <input type="radio" id="alugado"
     name="alugado" value="Alugado">
    <label for="alugado">Alugado</label>
				
			</div>
			</div>
		</div>
		<div class="col-md-12 retira-padding bens-consorcio">
			<h2>Outros Bens</h2>
			<div class="row">
				<div class="col-md-4">
					<label>Veículo</label>
				<input type="text" name="">
				</div>
				<div class="col-md-4">
<label>Ano</label>
				<input type="text" name="">
				</div>
				<div class="col-md-4">
					<input type="radio" id="foifinanciado"
     name="foifinanciado" value="foifinanciado">
    <label for="foifinanciado">Foi Financiado</label>

    <input type="radio" id="naofinanciado"
     name="naofinanciado" value="naofinanciado">
    <label for="naofinanciado">Não Financiado</label>
				</div>


			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Financeira</label>
				<input type="text" name="">

				</div>
				<div class="col-md-6">
					<label>Valor</label>
				<input type="text" name="">

				</div>
			</div>


		</div>
		<div class="col-md-12 retira-padding referencias">
			<h2>Referências</h2>
			<div class="row">
				<div class="col-md-6">
					<label>Nome</label>
				<input type="text" name="">
				</div>
				<div class="col-md-6">
					<label>Fone</label>
				<input type="text" name="">
				</div>

			</div>
			<div class="row">

				<div class="col-md-6">
					<label>Nome2</label>
				<input type="text" name="">
				</div>
				<div class="col-md-6">
					<label>Fone2</label>
				<input type="text" name="">
				</div>

			</div>
			<div class="row">
				<div class="col-md-3">
					<label>Banco</label>
				<input type="text" name="">
				</div>
				<div class="col-md-2">
					<label>Agência</label>
				<input type="text" name="">
				</div>
				<div class="col-md-2">
					<label>Conta</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<input type="radio" id="comum"
     name="comum" value="comum">
    <label for="comum">Comum</label>

    <input type="radio" id="especial"
     name="especial" value="especial">
    <label for="especial">Especial</label>

				</div>
				<div class="col-md-2">
					<label>Tempo</label>
				<input type="text" name="">
				</div>


			</div>
			<div class="row">

				<div class="col-md-3">
					<label>Banco 2</label>
				<input type="text" name="">
				</div>
				<div class="col-md-2">
					<label>Agência</label>
				<input type="text" name="">
				</div>
				<div class="col-md-2">
					<label>Conta</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<input type="radio" id="comum"
     name="comum" value="comum">
    <label for="comum">Comum</label>

    <input type="radio" id="especial"
     name="especial" value="especial">
    <label for="especial">Especial</label>

				</div>
				<div class="col-md-2">
					<label>Tempo</label>
				<input type="text" name="">
				</div>


			</div>


		</div>
		<div class="col-md-12 retira-padding rendimentos">
			<div class="row">
				<div class="col-md-3">
					<label>Renda mensal</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<label>Renda Cônjuge</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<label>Outros rendimentos</label>
				<input type="text" name="">
				</div>
				<div class="col-md-3">
					<label>Total dos rendimentos</label>
				<input type="text" name="">
				</div>

			</div>

		</div>
		<div class="col-md-12 retira-padding observacoes">
			<div class="col-md-12">
				<textarea rows="5"></textarea>
			</div>
		</div>

		<div class="col-md-4">
			<button type='submit'>Enviar</button>
		</div>

	</div>


</div>







<!--<select id="options" onchange="optionCheck()">


<option value="show">Mostra Div</option>
<option value="goto">Vai para o Google</option>

</select>

<div id="hiddenDiv" style="height:100px;width:300px;border:1px;visibility:hidden;">
Eu estou visível agora!
</div>-->

<script type="text/javascript">
    function optionCheck(){
        var option = document.getElementById("options").value;
        if(option == "show"){
            document.getElementById("invisivel").style.display ="initial";
        }
        if(option == "goto"){
            window.location = "http://google.com";
        }
    }
</script>