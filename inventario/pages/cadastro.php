<?php
session_start();
if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
    header('Location: login.php');
    exit;
}

// Verifica se foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novo_item = trim($_POST['nome'] ?? '');
    $quantidade = (int) trim($_POST['quantidade']);
    
    if (!empty($novo_item) && $quantidade > 0) {
        $arquivo = '../data/inventario.txt';
        $itens = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $novoInventario = [];
        $itemExiste = false;

        foreach ($itens as $linha) {
            list($itemNome, $itemQuantidade) = explode('|', $linha) + [1 => 1];
            if ($itemNome === $novo_item) {
                $itemQuantidade += $quantidade;
                $itemExiste = true;
            }
            $novoInventario[] = "$itemNome|$itemQuantidade";
        }

        if (!$itemExiste) {
            $novoInventario[] = "$novo_item|$quantidade";
        }

        file_put_contents($arquivo, implode("\n", $novoInventario) . "\n");
        header('Location: inventario.php');
        exit;
    } else {
        $erro = "Preencha todos os campos corretamente!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Item</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: url('../assets/img/w1.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Minecraft', sans-serif;
        }
        .container {
            max-width: 400px;
            margin-top: 100px;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastro de Item</h2>
        <?php if (isset($erro)): ?>
            <div class="alert alert-danger"> <?= $erro; ?> </div>
        <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Item:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" min="1" required>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="inventario.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
