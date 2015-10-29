<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto PHP OO - Code.Education</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>

        <?php require_once "Cliente.php"; ?>
        <?php require_once "array_clientes.php"; ?>
        <div class="container">
            <h1>Hello World</h1>
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                </thead>
                <tbody>
                    <?php for($i = 0; $clientes[$i] > 0; $i++) { ?>
                    <tr>
                        <td><?php echo $clientes[$i]->nome; ?></td>
                        <td><?php echo $clientes[$i]->cpf; ?></td>
                        <td><?php echo $clientes[$i]->endereco; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


    </body>
</html>