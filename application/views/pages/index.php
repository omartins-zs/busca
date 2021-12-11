<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Code Igniter Busca</title>
</head>

<body>
    <div class="container">
        <h1>Usuários</h1>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
            </tr>
            <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['idade'] ?></td>
                <td><?= $usuario['sexo'] ?></td>
            </tr>
            <?php endforeach; ?>

            <h1>Buscar</h1>
            <form action="<?= base_url('home/resultado/') ?>" method="post">
                <label for="busca">Pesquisa</label>
                <input type="text" name="busca" id="busca" class="form-control">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </table>
    </div>
</body>

</html>