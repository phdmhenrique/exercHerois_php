<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício Herói com PHP</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
<body>
    <?php
        $universo = "Marvel";
        $heroi = "Thor";
        $repetidor = 0;

        if ($universo == "Marvel")
        {
            for ($repetidor = 0; $repetidor < 3; $repetidor++)
            {
                if ($heroi == "Hulk")
                {
                    echo '<p>O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b></p><br>';
                    echo '<img src="imgs/marvel/hulk.jpeg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Thor")
                {
                    echo '<p>O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b></p><br>';
                    echo '<img src="imgs/marvel/thor.jpg" /> <br><br>';
                }
            
                else if ($heroi == "Homem de Ferro")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/marvel/homem_de_ferro.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Capitão América")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/marvel/capitao_america.jpg" width="400" height="300" /> <br><br>';
                }
            
                else if ($heroi == "Doutor Estranho")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/marvel/dr_estranho.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Falcão")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/marvel/falcao.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Homem Aranha")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/marvel/homem_aranha.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Homem Formiga")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/marvel/homem_formiga.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Pantera Negra")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/marvel/pantera_negra.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Viuva Negra")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/marvel/viuva_negra.jpg" width="400" height="300" /> <br><br>';
                }

                else
                {   
                    echo 'O universo é: <b>' . $universo . '</b> mas o herói <b>não existe</b> nesse universo. <br>';
                }

            }
        }

        else if ($universo == "DC")
        {
            while ($repetidor < 3)
            {
                if ($heroi == "Arqueiro Verde")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/arqueiro_verde.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Batman")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/batman.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Caçador de Marte")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/cacador_de_marte.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Canário Negro")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/canario_negro.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Doutor Manhatan")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/dr_manhatan.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Flash")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/flash.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Lanterna Verde")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/lanterna_verde.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Mulher Maravilha")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/mulher_maravilha.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Robin")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/robin.jpg" width="400" height="300" /> <br><br>';
                }

                else if ($heroi == "Superman")
                {
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                    echo '<img src="imgs/dc/superman.jpg" width="400" height="300" /> <br><br>';
                }

                else
                {
                    echo 'O universo é: <b>' . $universo . '</b> mas o herói <b>não existe</b> nesse universo. <br>';
                }

                $repetidor++;
            }
        }

        else{
            echo 'Universo inválido!';
        }
?>
</body>
</html>