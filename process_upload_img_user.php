<?php
    if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
            $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
            $nome = $_FILES[ 'arquivo' ][ 'name' ];
    
            $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
            $extensao = strtolower ( $extensao );
            if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
                $novoNome = uniqid ( time () ) . '.' . $extensao;
                $destino = 'uploads/' . $novoNome;
         
                move_uploaded_file( $arquivo_tmp, $destino);
            }
        }
        
        $img_url = 'http://localhost/chathaus-site/'.$destino;    
        // Falta terminar!!
?>