<?

    # alterar a variavel abaixo colocando o seu email

    $destinatario = "eu@wagnerlima.net";

    $camisa = "Camisa Nascimento das Lendas Feminina";
    $modelo = $_REQUEST['modelo'];
    $tamanho = $_REQUEST['tamanho'];
    $quantidade = $_REQUEST['quantidade'];
    $email = "ideias@wagnerlima.net";
    $mensagem = $_REQUEST['mensagem'];
    $assunto = "KADOSH TSHIRTS";
    
     // monta o e-mail na variavel $body

    $body = "Gostaria de encomendar " . $quantidade . " unidades da " . $camisa . ", modelo " . $modelo . " e tamanho " . $tamanho . "." . "\n";
    $body = $body . "" . "\n";
    $body = $body . "===================================" . "\n";
    $body = $body . "Estampa: " . $camisa . ";" . "\n";
    $body = $body . "Quantidade: " .$quantidade . " unidades;" . "\n";
    $body = $body . "Modelo: " . $modelo . ";" . "\n";
    $body = $body . "Tamanho: " .$tamanho . "." . "\n";
    $body = $body . "===================================" . "\n";

    // envia o email
    mail($destinatario, $assunto , $body, "From: $camisa\r\n");
    

    // redireciona para a página de obrigado
    header( "Location: https://pag.ae/7-7e8prHN" );

    ?>
