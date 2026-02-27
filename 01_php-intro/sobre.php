<!-- 01_php-intro/sobre.php -->
<?php
$nome        = "Profe. Berssa";
$pagina_atual = "sobre";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre — <?php echo $nome; ?></title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;">

  <?php include 'includes/cabecalho.php'; ?>

  <div style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
    <h1 style="color: #3b579d;">👤 Sobre mim</h1>
    <p>Olá! Sou <strong><?php echo $nome; ?></strong>, Professor do curso Técnico em Informática no IFPR de Ponta Grossa.</p>
    <p>Professor de Ensino Básico, Técnico e Tecnológico no Instituto Federal do Paraná (IFPR), campus Telêmaco Borba, onde ministro disciplinas nos cursos de pós-graduação, superiores e técnicos, abrangendo temas relacionados à Programação de Computadores e ao processo de Ensino e Aprendizagem.Doutor em Ensino de Ciência e Tecnologia pela Universidade Tecnológica Federal do Paraná (UTFPR) em 2021 e Mestre na mesma área desde 2016.Especialista em Docência da Educação Profissional Técnica e Tecnológica pelo IFPR (2017) e em Gestão de Pessoas pelo INSEP (2012).Graduado em Tecnologia em Processamento de Dados pela UNOPAR (2003).</p>
    <a href="index.php"
       style="color: #3b579d; font-weight: bold;">← Voltar ao início</a>
  </div>

  <?php include 'includes/rodape.php'; ?>

</body>
</html>