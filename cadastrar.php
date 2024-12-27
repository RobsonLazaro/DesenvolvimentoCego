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
            <h3 class="font-black text-3xl text-center">Bem-vindo!</h3>
            <h3 class="font-black text-3xl pt-6 text-center">Crie já a sua conta</h3>
            <div class="text-center pt-5 flex flex-col justify-center items-center">
                <p class="mt-2 text-2xl border rounded-3xl py-2 px-4"><a href="#user">Cadastre-se</a></p>
                <p class="pt-3">Já possui uma conta?<a href="login.php" class="btn text-blue-400"> Faça login</a></p>

            </div>
        </div>

        <div class="container border rounded-r-xl border-l-0 border-slate-700 max-w-96 text-black px-10">
            <img src="img/logo.svg" alt="Logo Sigma" class="w-36 h-36 m-auto">
            <h3 class="text-center text-xl pt-3">FAÇA SEU CADASTRO</h3>
            <form class="flex flex-col py-12" action="process_cadastro.php" method="post">
                <label class="py-1" for="user">Usuário:</label>
                <input class="p-2 text-black border rounded-lg border-slate-700" placeholder="Digite seu usuário" type="text" name="usuario" id="usuario" required>

                <label class="py-1" for="senha">Senha:</label>
                <input class="p-2 text-black border rounded-lg border-slate-700" placeholder="Digite sua senha" type="password" name="senha" id="senha" required>
                <div class="flex justify-center mt-7">
                    <button type="submit" class="bg-blue-500 p-3  text-center rounded w-24 text-white hover:bg-blue-400 cursor-pointer">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>