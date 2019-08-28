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
                    <h1 class="page-header"> <?php echo $empresa."| Disciplinas"; ?> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
  
			<div class="row">
	           
                    

                 <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <?php 
                                if($modo=="inserir")
                                  echo "Adicionar Disciplina";
                                else
                                   echo "Alterar Disciplina";
                            ?>
                            
                          
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                         
                                   <?php echo form_open('Disciplina/'.$modo, 'id="form-inserir"'); ?>
                                        
                                        <?php if($modo=="inserir"){ ?>

                                                <div class="form-group">
                                                    <label for="nome">Disciplina</label>
                                                    <input type="text" name="nome" class="form-control" value="" placeholder="Informe o nome da Disciplina">

                                                    <div class="error"><?php echo form_error('nome'); ?></div>
                                                </div>

												

											    <div class="form-group">
											        <label for="seriecurso">Curso/Serie</label>
											        <br>
											        <div >
											            <select class="form-control" name="series-cursos">
														<option value=""></option>
														<?php foreach ($series as $serie ) : ?>
														
											                <option value="<?php echo $serie->id; ?>"><?php echo $serie->nome; ?></option>

														
														<?php endforeach ?>

											               

											            </select>
											        </div>
											        
											    </div>




                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                                <input type="hidden" name="id" value="<?php echo $dados_disc[0]->id; ?>"/>

                                                <div class="form-group">
                                                    <label for="nome">Serie/Curso</label>
                                                    <input type="text" name="nome" class="form-control" value="<?php echo $dados_disc[0]->nome_disciplina; ?>" placeholder="Informe o Numero da Serie ou Nome do Curso">

                                                    <div class="error"><?php echo form_error('nome'); ?></div>
                                                </div>

                                                
                                                <div class="form-group">
                                                    <label for="seriecurso">Curso/Serie</label>
                                                    <br>
                                                    <div >
                                                        <select class="form-control" name="series-cursos" >
                                                        <option value=""></option>
                                                        <?php foreach ($series as $serie ) : ?>
                                                        
                                                            <option value="<?php echo $serie->id; ?>"  <?php if( $serie->id == $dados_disc[0]->idcursoserie ){echo "selected";} ?> > <?php echo $serie->nome; ?></option>

                                                        
                                                        <?php endforeach ?>

                                                           

                                                        </select>
                                                    </div>
                                                    
                                                </div>

                                        
                                        <?php }?>
                                        
                                      
                                        
                                        <input type="submit" class="btn btn-primary" name="cadastrar" value="Salvar" />
                                        
                                    <?php echo form_close(); ?>
                                      <?php if($modo!="inserir"){ ?>
                                          

                                           <input type="submit" class="btn btn-primary"  onclick="location.href='<?php echo base_url();?>Series/index'" value="Cancelar2" />
                                        <?php } ?>


                                </div>
                            </div>
                        </div>  
                    </div>
                </div>

                
                 <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de Series/Curso
                          
                        </div>
                        <div class="panel-body">
                            <div class="well">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Disciplina</th>
                                    <th>Serie/Curso</th>
                                    </tr>
                                </thead>
                                       <tbody>
                                            <?php foreach($disciplinas as $disc): ?>
                                            <tr>
                                            <td><?php echo $disc->id; ?></td>
                                            <td><?php echo $disc->nome_disciplina; ?></td>
                                            <td><?php echo $disc->idcursoserie; ?></td>
                                            <td>
                                                
                                               <a title="Editar" href="<?php echo base_url() . 'disciplina/editar/' . $disc->id; ?>">
                                               <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>  
                                               <a title="Deletar" href="<?php echo base_url() . 'disciplina/deletar/' . $disc->id; ?>" onclick="return confirm('Confirma a exclusão deste registro?')"> 
                                               <i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </td>
                                            </tr>
                                            <?php endforeach ?>
                                     
                                        </tbody>
                                </table>
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
