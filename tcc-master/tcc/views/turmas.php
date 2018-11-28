<html>
<head>
    <style type="text/css">@import url(../css/style_turmas.css); </style>

</head>
<body>
<h1>Selecione sua turma (47 turmas)</h1>


    <?php foreach ($turmas as $turma): ?>
<div id="turmas" >
    <h2 href=""><?= $turma->nome?></h2>
</div>

    <?php endforeach; ?>
</body>
</html>