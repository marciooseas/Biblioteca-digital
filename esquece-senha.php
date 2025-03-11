
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Esqueceu sua senha?</title>
</head>
<body>

<div class="container">
        <div class="form-container login">
            <form action="esquece-senha.php" method="POST">
                <h2>Esqueceu a sua Senha</h2>
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="email" placeholder="Insira o seu Email" required>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="senha" placeholder="Digite sua nova Senha" required>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="senha" placeholder="Confirme a sua nova Senha" required>
                </div>
          
                <input type="submit" name="submit" id="submit" value="Redifinir">

            </form>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    background: black;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(90deg,   #0c1b29,rgb(1, 6, 8) );
}
.container {
    position: relative;
    width: 450px;
    height: 500px;
    background: linear-gradient(90deg , #1e354d, rgb(1, 6, 8) );
    border-radius: 50px;
    box-shadow: 0 0 60px rgba(0, 0, 0, .8);
    padding: 60px;
    display: flex;
    align-items: center;
    overflow: hidden;
}
.container .text-right {
    position: absolute;
    top: 60px;
    right: 180px;
    color: #f2f2f2;
    text-shadow: 0 0 20px rgb(255, 250, 250);
    font-size: 50px;
    user-select: none;
    font-family: 'Parisienne', cursive;
}
.container .text-right::before {
    content: 'Back';
    position: absolute;
    top: 60px;
    right: -50px;
}
h2 {
    font-size: 2em; /*Tamanho do  text Login*/
    text-align: center;
    color:rgb(255, 255, 255);
}
.input-box { /*Caixa de texto*/
    position: relative;
    width: 320px; /*Largura da caixa*/
    margin: 30px 0; /*Distância entre as caixinhas*/
}
.input-box input { /*Caixa de Texto*/
    width: 100%;
    height: 50px;
    background: transparent;
    border: 2px solid #ffffff;
    color: white;
    outline: none;
    border-radius: 40px;
    font-size: 1em;
    padding: 0 20px 0 40px;
}
#submit{
  width: 100%;
 height: 45px;
 background: #f2f2f2;
 border: none;
 outline: none;
 border-radius: 40px;
 cursor: pointer;
 font-size: 1em;
 color: #000000;
 font-weight: 500;
}
 #submit:hover{
  background: rgb(9, 53, 85);
  transition: .5s;
  cursor:pointer;
}
.input-box input::placeholder { /*Cor das letras do email e senh*/
    color: rgba(255, 255, 255, 0.53);
}
.input-box .icon {
    position: absolute;
    left: 15px;
    color: #f2f2f2;
    font-size: 1.2em;
    line-height: 55px;
}

.esqueceu-pass {
    margin: -15px 0 15px 15px;
}
.esqueceu-pass a {
    color: #f2f2f2;
    font-size: .9em;
    text-decoration: none;
}
.esqueceu-pass a:hover {
    text-decoration: underline;
}
button {
    width: 100%;
    height: 45px;
    background: #f2f2f2;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #000000;
    font-weight: 500;
}
button:hover{
    background: rgb(9, 53, 85);
    transition: .5s;
    cursor:pointer;
}
.sign-link {
    font-size: .9em;
    text-align: center;
    margin: 25px 0;
}
.sign-link p {
    color: #f2f2f2;
}
.sign-link p a {
    color: #f2f2f2;
    text-decoration: none;
    font-weight: 600;
}
.sign-link p a:hover {
    text-decoration: underline;
}
</style>
</body>
</html>