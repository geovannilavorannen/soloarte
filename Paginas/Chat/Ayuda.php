<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <?php include '../../Layout/estilos.php'?>
    <?php include '../../Layout/navbarU.php'?>
    <style>
        /* Estilos generales */
        .container {
            max-width: 100%;
            padding: 0 20px;
        }
        
        .chatbox {
            background: #111111;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .header h4 {
            margin: 0;
        }
        
        .body {
            height: 500px;
            overflow-y: auto;
            margin-bottom: 20px;
        }
        
        .scroller {
            height: 100%;
        }
        
        .chat {
            display: flex;
            justify-content: space-between;
        }
        
        .chat input[type="text"],
        .chat input[type="submit"] {
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            border: none;
        }
        
        .chat input[type="text"] {
            flex-grow: 1;
            margin-right: 10px;
        }
        
        .chat input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        
        /* Estilos responsivos */
        @media (max-width: 768px) {
            .chatbox {
                padding: 10px;
            }
        
            .body {
                height: 200px;
            }
        
            .chat input[type="text"],
            .chat input[type="submit"] {
                font-size: 12px;
            }
        }
    </style>
</head>

<body style="background-image: url('../../Images/Chat/fondo.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">>
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <h4> <img src='../../Images/quetzal.jpg' class='imgRedonda'/> Quetzbotl </h4>
            </div>
            <div class="body" id="chatbody">
                <p class="alicia">Hola! soy Quetzal, Estoy para responder preguntas relacionadas con Solo Arte, nuestra pagina. Espero poder ayudarte.</p>
                <div class="scroller"></div>
            </div>
            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Preguntale algo">
                </div>
                <div>
                    <input type="submit" value="Enviar" id="btn">
                </div>
            </form>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>
