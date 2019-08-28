<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css"/>
</head>
<body>
	<?php echo form_open('empresa/atualizar', 'id="form-empresa"'); ?>
 
	<input type="hidden" name="id" value="<?php echo $dados_empresa[0]->id; ?>"/>
 



	<label for="Escola">Escola:</label><br/>
	<input type="text" name="escola" value="<?php echo $dados_empresa[0]->escola; ?>"/>
	<div class="error"><?php echo form_error('escola'); ?></div>
 



	<label for="email">Email:</label><br/>
	<input type="text" name="email" value="<?php echo $dados_empresa[0]->email; ?>"/>
	<div class="error"><?php echo form_error('email'); ?></div>




	<label for="senha">Senha:</label><br/>
	<input type="text" name="senha" value="<?php echo $dados_empresa[0]->senha; ?>"/>
	<div class="error"><?php echo form_error('senha'); ?></div>
 


 
	<input type="submit" name="atualizar" value="Atualizar" />
 
	<?php echo form_close(); ?>
</body>
</html>