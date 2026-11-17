<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap-grid.min.css" integrity="sha512-dOjUSaLkr6G2pwQ7ry9juX+iXw5602zg1kg8yH+guR3uSEidGyCnOEQnGlr7xwu/8WE+pVm1ZNqaIs5ETTIJQg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



</head>
<body>
    <div class="container">
        <h2> Acelere seu sonho! </h2>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Motor</th>
                <th scope="col">Ano</th>
                <th scope="col">Valor</th>
                <th scope="col">Km</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach($listaDeCarros as $item):
                ?>
                <tr>
                    <td scope="row"><?=$item['id'];?></td>
                    <td><?=$item['marca'];?></td>
                    <td><?=$item['modelo'];?></td>
                    <td><?=$item['motor'];?></td>
                    <td><?=$item['ano'];?></td>
                    <td><?=$item['valor'];?></td>
                    <td><?=$item['km'];?></td>
                    <td>
                        <div class="d-flex gap-2">
                            <a class="btn btn-sm btn-outline-primary" href="#"> Editar</a>
                            <a class="btn btn-sm btn-outline-danger" href="#"> Delete</a>
                        </div>
                    </td>
                </tr>
                <?php
                    endforeach
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>