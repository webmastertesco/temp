<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/adminlte.min.css"> <!-- Ajuste o caminho -->
</head>
<body>
    <div class="container mt-5">
        <h2>Login</h2>
        <form action="/auth/dologin" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <a href="/auth/reset_password">Esqueceu sua senha?</a>
    </div>
</body>
</html>