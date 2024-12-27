<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGMA</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen ">
    <div class="items-stetch justify-center flex w-full">
        <div class="container rounded-l-xl border-r-0 bg-slate-700 max-w-2xl text-white px-10">
            <img src="img/logo.svg" alt="Logo Sigma" class="w-60 h-60 m-auto">
            <h3 class="font-black text-3xl pt-6 text-center">Bem-vindo de volta!</h3>
            <div class="text-center pt-8 content-end ">
                <p class="pt-10">Acesse sua conta agora mesmo.</p>
                <p class="mt-2 underline"><a href="./index.php">Esqueceu a senha?</a></p>
            </div>
        </div>

        <div class="container border rounded-r-xl border-l-0 border-slate-700 max-w-96 text-black px-10">
            <img src="img/logo.svg" alt="Logo Sigma" class="w-36 h-36 m-auto">
            <h3 class="text-center text-xl pt-3">FAÇA LOGIN NA SUA CONTA</h3>
            <form class="flex flex-col pt-10" action="session.php" method="post">
                <label class="py-1" for="usuario">Usuário:</label>
                <input class="p-2 text-black border rounded-lg border-slate-700" placeholder="Digite seu usuário" type="text" name="usuario" id="usuario" required>

                <label class="py-1" for="senha">Senha:</label>
                <input class="p-2 text-black border rounded-lg border-slate-700" placeholder="Digite sua senha" type="password" name="senha" id="senha" required>
                
                <div class="flex justify-around py-10 items-center ">
                    <button class="bg-green-500 text-center rounded w-24 py-3 text-white hover:bg-green-400 cursor-pointer" type="submit">Entrar</button>
                    <a href="cadastrar.php" class="bg-blue-500 rounded w-24 text-white hover:bg-blue-400 text-center p-3 cursor-pointer" >Cadastrar</a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>