
	


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />

   

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    
     <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/landing-page.css"/>
     <script type='text/javascript' src='<?php echo base_url(); ?>assets/jquery.validate.js'></script>


     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"> </script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!-- Custom Fonts -->
    <script type="text/javascript">


    /*

         jQuery.validator.addMethod("cpf", function(value, element) {
           value = jQuery.trim(value);
            value = value.replace('.','');
            value = value.replace('.','');
            cpf = value.replace('-','');
            while(cpf.length < 11 ) cpf = "0"+ cpf;  
            var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
            var a = [];
            var b = new Number;
            var c = 11;
            for (i=0; i<11; i++){
                a[i] = cpf.charAt(i);
                if (i < 9) b += (a[i] * --c);
            }
            if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
            b = 0;
            c = 11;
            for (y=0; y<10; y++) b += (a[y] * c--);
            if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }

            var retorno = true;
            if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;

            return this.optional(element) || retorno;

        }, "Informe um CPF válido");


        $(document).ready(function(){

           $("#formH2H").validate({
              rules: {
                  cpf: {cpf: true, required: true}
              },
              messages: {
                 cpf: { cpf: 'CPF inválido'}
              }
              ,submitHandler:function(form) {
                 alert('Muito bem, as informações estão corretas.');
              }
           });
        });

*/
       $(document).ready(function() {

          $('#form-empresa').on('submit', function(e){
             var valido = false;

            // validações jquery aqui - atribua true para "valido" quando validar

            if(!valido) {
              e.preventDefault();
            }
          
          });

        });

    </script>
   
<!--  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css"/>
-->


</head>

<body>

  <?php
        include "menu_view.php";
        require "menu_view.php";
    ?>

    <br><br><br>


    <div class="row">
        <div class="col-md-9 col-md-offset-1"> 


      
            
         <div class="row">
                <div class="col-lg-10 ">
                   <h1 class="page-header">Cadastre-se</h1>
                </div>
                    <!-- /.col-lg-12 -->
          </div>
        


          <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                            Para se cadastrar preencha todos os campos! 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        
                                    <?php echo form_open('empresa/inserir', 'id="form-empresa"'); ?>
                                    <!--<form id="formularioContato" onSubmit="return validar(this);" action="" method="post">-->
                                    
                                        <div class="form-group">
                                            <label for="nome">Empresa</label>
                                            <input type="text" name="escola" class="form-control" placeholder="Empresa" >

                                            <div class="error"><?php echo form_error('escola'); ?></div>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Email" >

                                            <div class="error"><?php echo form_error('email'); ?></div>
                                        </div>


                                        <div class="form-group" for="senha">
                                           <label>Senha</label>
                                            <input type="text" name="senha" class="form-control" type="password" placeholder="Senha" >

                                            <div class="error"><?php echo form_error('senha '); ?></div>
                                        </div>

                                        
                                           <label class="checkbox-inline">
                                                <input type="checkbox">Aceitar Termos de Uso
                                            </label>
                                        
                                            <br><br>
                                            
                                            
                                            
                                                <input type="submit" class="btn btn-primary" name="cadastrar" value="Cadastrar" />
 

                                    <?php echo form_close(); ?>
                                     <!--</form> -->   
                                    


                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            
        </div>



         </div>
    </div>

    <br><br>

      <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                  
                </div>
            </div>
        </div>
    </footer>


   
         
    

  

 


  <!-- Lista de Empresas -->
<br><br><br>
  <div id="grid-pessoas">
        <ul>
        <?php foreach($empresas as $empresa): ?>
        <li>
            <a title="Deletar" href="<?php echo base_url() . 'empresa/deletar/' . $empresa->id; ?>" onclick="return confirm('Confirma a exclusão deste registro?')"> 
                <img src="<?php echo base_url(); ?>assets/img/lixo.png" /> </a>
            <span> - </span>
            <a title="Editar" href="<?php echo base_url() . 'empresa/editar/' . $empresa->id; ?>"><?php echo $empresa->escola; ?></a>
            <span> - </span>
            <span><?php echo $empresa->email; ?></span>
            <span><?php echo $empresa->senha; ?></span>
            
        </li>
        <?php endforeach ?>
        </ul>
    </div>


    
    
</body>


