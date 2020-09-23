
<form class="total" action="../js/mail.php" method="POST">
    <h5 class="mt-1">Venha trabalhar conosco</h5>
    <div class="form-row">
        <div class="form-group col-md-7">
            <label for="nome-completo">Nome Completo</label>
            <input type="text" class="form-control" name="nome-completo" id="nome-completo">
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-7">
            <label for="rua-avenida">Rua / Avenida</label>
            <input type="text" class="form-control" name="rua-avenida" id="rua-avenida">
        </div>
        <div class="form-group col-md-2">
            <label for="numero">Número</label>
            <input type="text" class="form-control" name="numero" id="numero">
        </div>
        <div class="form-group col-md-3">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="bairro">Bairro </label>
            <input type="text" class="form-control" name="bairro" id="bairro">
        </div>
        <div class="form-group col-md-4">
            <label for="complemento">Complemento </label>
            <input type="text" class="form-control" name="complemento" id="complemento">
        </div>
        <div class="form-group col-md-3">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade">
        </div>
        <div class="form-group col-md-1">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado">
        </div>
    </div>
    <div class="dropdown-divider mt-3 mb-3"></div>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="tel-cel">Telefone Celular </label>
            <input type="tel-cel" class="form-control" name="tel-cel" id="tel-cel">
        </div>
        <div class="form-group col-md-2">
            <label for="tel-fixo">Telefone Fixo </label>
            <input type="tel" class="form-control" name="tel-fixo" id="tel-fixo">
        </div>
        <div class="form-group col-md-2">
            <label for="tel-recados">Telefone Recados</label>
            <input type="tel" class="form-control" name="tel-recados" id="tel-recados">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="chk-whatss">
        <label class="form-check-label" for="chk-whatss">
          Aceito receber mensagem no WhassApp
        </label>
    </div>
    <div class="dropdown-divider mt-3 mb-4"></div>
   <div class="form-row mt-3">
       <div class="form-group col-md-2">
        <label for="rg">RG</label>
        <input type="text" class="form-control" name="rg" id="rg"> 
       </div>
       <div class="form-group col-md-2">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf"> 
       </div>
       <div class="form-group col-md-2">
        <label for="cnh-yn">Possui CNH?</label>
        <select name="possui-cnh" class="form-control">
            <option>Selecione...</option>
            <option value="1">Sim</option>
            <option value="2">Não</option>
          </select> 
       </div>
       <div class="form-group col-md-2">
        <label for="cnh">CNH</label>
        <input type="text" class="form-control" name="cnh" id="cnh"> 
       </div>
       <div class="form-group col-md-2">
        <label for="ctps">Carteira de Trabalho</label>
        <input type="text" class="form-control" name="ctps" id="ctps"> 
       </div>
       <div class="form-group col-md-2">
        <label for="serie">Série</label>
        <input type="text" class="form-control" name="serie" id="serie"> 
       </div>
   </div>
   <div class="form-row mt-3">
    <div class="form-group col-md-4">
     <label for="formacao">Formação</label>
     <select name="formacao" class="form-control">
        <option>Selecione...</option>
        <option value="1">Ensino Fundamental Completo</option>
        <option value="2">Ensino Fundamental Imcompleto</option>
        <option value="3">Ensino Médio Completo</option>
        <option value="4">Ensino Médio Incompleto</option>
        <option value="5">Ensino Superior Completo</option>
        <option value="6">Ensino Superior Incompleto</option>
      </select>
    </div>
    <div class="form-group col-md-2">
     <label for="estado-civil">Estado Civil</label>
     <select name="estado-civil" class="form-control">
        <option>Selecione...</option>
        <option value="1">Solteiro</option>
        <option value="2">Casado</option>
        <option value="2">Outros</option>
      </select>
    </div>
    <div class="form-group col-md-2">
     <label for="dependentes">Possui Dependentes?</label>
     <select name="dependentes" class="form-control">
         <option>Selecione...</option>
         <option value="1">Sim</option>
         <option value="2">Não</option>
       </select> 
    </div>
    <div class="form-group col-md-2">
     <label for="quantos-dep">Quantos?</label>
     <input type="text" class="form-control" name="quantos-dep" id="quantos-dep"> 
    </div>
    
</div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    <button type="reset" class="btn btn-secondary mt-4">Limpar Dados</button>
</form>