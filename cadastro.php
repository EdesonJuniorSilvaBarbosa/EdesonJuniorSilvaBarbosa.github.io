<!Doctype html>
<html>

	<head>
        
        <link rel="icon" href="imagens do sistema/Icon/iconSite.png">

	</head>
    
    <body>

        <?php

            require_once 'topo.php';

        ?>
        
        
               <div class="formulario">
        
            	<br><br>
            
                <fieldset>
            
                <legend>Motorista</legend>
            
                <form name="for_mot" action="processaCad_mot.php" method="POST" enctype="multipart/form-data">
                
                <label for="NOME">Nome:</label>
                <input type="text" id="nomeId" name="nome" placeholder="Digite seu nome" required/>
                
                
                <label for="SOBRENOME">Sobrenome:</label>
                <input type="text" id="sobrenomeId" name="sobrenome" placeholder="Digite seu sobrenome" required/>
                
                <br><br>
                <label for="DATA NASCIMENTO">Data Nascimento:</label>
                <input type="date" id="data_nascId" name="date_nascimento" 
                required maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="01-01-1950" max="31-12-2017"/>

                <span id="CPF">
                <label>CPF:</label>
                <input type="text" name="cpf" id="cpfId" size="14" maxlength="14" placeholder="Digite seu CPF!" required>
                <script type="text/javascript">
                <!--
                           var CPF = new Spry.Widget.ValidationTextField("CPF", "custom", {pattern:"000.000.000-00", validateOn:["blur"], useCharacterMasking:true});
                //-->
                    </script></span>
                    

                <br><br>
                <label for="CARRO">Carro:</label>
                <select name="carro" id="carroId" required>
                <option></option>
                <option value="VOLKSWAGEN GOL">VOLKSWAGEN GOL</option>
                <option value="FIAT SIENA">FIAT SIENA</option>
                <option value="VOLKSWAGEN FOX">VOLKSWAGEN FOX</option>
                <option value="FIAT UNO">FIAT UNO</option>
                <option value="FORD FIESTA">FORD FIESTA</option>
                <option value="RENAULT SANDERO">RENAULT SANDERO</option>
                <option value="HYUNDAI HB20">HYUNDAI HB20</option>
                <option value="CITROËN C3">CITROËN C3</option>
                <option value="CHEVROLET CELTA">CHEVROLET CELTA</option>
                <option value="CHEVROLET ONIX">CHEVROLET ONIX</option>
                <option value="FIAT PALIO">FIAT PALIO</option>
                <option value="FORD KA">FORD KA</option>
                <option value="TOYOTA COROLLA">TOYOTA COROLLA</option>
                <option value="AUDI A3">AUDI A3</option>
                <option value="VOLKSWAGEN UPVOLKSWAGEN UP">VOLKSWAGEN UPVOLKSWAGEN UP</option>
                <option value="HONDA CIVIC">HONDA CIVIC</option>
                <option value="JEEP RENEGADE">JEEP RENEGADE</option>
                <option value="TOYOTA ETIOS">TOYOTA ETIOS</option>
                <option value="CHEVROLET PRISMA">CHEVROLET PRISMA</option>
                <option value="HONDA HR-V">HONDA HR-V</option>
                <option value="CHEVROLET CLASSIC">CHEVROLET CLASSIC</option>
                <option value="RENAULT LOGAN">RENAULT LOGAN</option>
                <option value="RENAULT CLIO">RENAULT CLIO</option>
                <option value="RENAULT DUSTER">RENAULT DUSTER</option>
                <option value="HYUNDAI I30">HYUNDAI I30</option>
                <option value="SPACEFOX"> SPACEFOX</option>
                </select>                
                
                <br><br>
                <label>Status:</label>
                <input type="radio" id="statusId" name="rd_status" required value="ATIVO">Ativar
             
                <br><br>
                <label for="SEXO">Sexo:</label>
                <input type="radio" id="sexoId" name="rd_sexo" required value="Feminino">Feminino
                <input type="radio" id="sexoId" name="rd_sexo" required value="Masculino">Masculino
                
                
                <br><br>
                <label for="imagem">Imagem:</label>
                <input type="file" name="foto" />
                
                <br><br>  
                <label>E-mail:</label>
                <input type="text" name="txt_login" id="form_ususario"
                placeholder="Informe seu e-mail" required>
                
                
                <br><br>
                <label>Senha:</label>
                <td><input type="password" id="txtPass" name="txt_senha" 
                placeholder="*********" required autocomplete="off"/>
                </td>
                             
                <br><br>
                <button type="submit" value="Cadastrar">Cadastrar</button>               
                </form>
                    
                </fieldset>
                   
                <br><br>    
        
        		<!----------PASSAGEIRO------------>
            
            	<hr style="height:5px; border:none; background-color:#FFF; margin-bottom: 0px;" width="100%" />
				<br><br>
                
             <fieldset>
                
                <legend>Passageiro</legend>
                <form name="form_pas" action="processaCad_pass.php" method="POST" enctype="multipart/form-data"> 
                
                <label for="NOME">Nome:</label>
                <input type="text" id="nomeId" name="nome" 
                placeholder="Informe seu Nome" required>
                
                
                <label for="SOBRENOME">Sobrenome:</label>
                <input type="text" id="sobrenomeId"  name="sobrenome" 
                placeholder="Informe seu Sobrenome" required>
                
                
                <br><br>
                <label for="DATANASCIMENTO">Data Nascimento:</label>
                <input type="date" id="datanascId" name="datanasc" 
                required="required" maxlength="10" name="date" 
                pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"
                min="1950-01-01" max="2017-12-31" />
                
                
                
                <span id="CPF">
                <label>CPF:</label>
                <input type="text" name="cpf" id="cpfId" size="14" maxlength="14" placeholder="Digite seu CPF!" required>
                <script type="text/javascript">
                <!--
                           var CPF = new Spry.Widget.ValidationTextField("CPF", "custom", {pattern:"000.000.000-00", validateOn:["blur"], useCharacterMasking:true});
                //-->
                    </script></span>
                    
            
                <br><br>
                <label for="SEXO">Sexo:</label>
                <input type="radio" id="sexoId" name="rd_sexo" value="Feminino">Feminino
                <input type="radio" id="sexoId" name="rd_sexo" value="Masculino">Masculino
                
                
                <br><br>
                <label for="imagem">Imagem:</label>
                <input type="file" name="foto" required/>
                
                <br><br>
                <label>E-mail: </label>
                <input type="email" name="txt_login" id="form_ususario" 
                placeholder="Informe seu E-mail" required>
               
                
                <br><br>
                <label>Senha:</label>
                <td><input type="password" id="txtPass" name="txt_senha" 
                placeholder="*********" autocomplete="off" /></td>

                <br><br>
                
                <button type="submit" value="Cadastrar">Cadastrar</button>
                    
                </form>
                
                </fieldset>
                <br><br> 
                </div>
        
                <br><br>      


              <?php 

                require_once 'rodape.php';

              ?>
    
    </body>

</html>
