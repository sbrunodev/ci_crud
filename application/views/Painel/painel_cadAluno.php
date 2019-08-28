<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $titulo; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/assets-painel/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/assets-painel/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/assets-painel/css/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/assets-painel/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   

</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
       
       <?php
            include "painel_inicio.php"
       ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> <?php echo $empresa; ?> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
  
			<div class="row">
	           


                 <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Informações do Aluno
                          
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        
                                    <?php echo form_open('painel/atualizar', 'id="form-empresa"'); ?>


                                        <div class="form-group">
                                            <label for="Escola">Empresa</label>
                                            <input type="text" name="escola" class="form-control" value="" placeholder="Empresa">

                                            <div class="error"><?php echo form_error('escola'); ?></div>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Email" value=""  >

                                            <div class="error"><?php echo form_error('email'); ?></div>
                                        </div>


                                        <div class="form-group" for="senha">
                                            <label>Senha</label>
                                            <input type="text" name="senha" type="password" class="form-control" value=""  placeholder="Senha">
        
                                            <div class="error"><?php echo form_error('senha '); ?></div>
                                        </div>

                                        
                                           
                                            
                                            
                                            
                                                <input type="submit" class="btn btn-primary" name="cadastrar" value="Salvar" />
 

                                     <?php echo form_close(); ?>

                                    


                                </div>
                            </div>
                        </div>  
                    </div>
                </div>












            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/assets-painel/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/assets-painel/js/bootstrap.minn.js"></script>

  

  



</body>

</html>
