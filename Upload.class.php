<?php

  class Upload{

    /*Declaração dos atributos da classe*/
    private $arquivo;
    private $altura;
    private $largura;
    private $pasta;

    /*Construtor da classe que configura os valores dos atributo no
    momento da criação do objeto de upload.*/
    function __construct($arquivo, $altura, $largura, $pasta){

      $this->arquivo = $arquivo;
      $this->altura = $altura;
      $this->largura = $largura;
      $this->pasta = $pasta;

    }

    /*Método que retorna a extensão do arquivo.*/
private function getExtensao(){

      /*
      strtolower - Converte uma string em minusculas.
      end - Faz o ponteiro interno do array apontar para o último elemento.
      explode - divide uma string em um array.
      */
      return $extensao = strtolower(end(explode('.', $this->arquivo['name'])));
	  
/*	  $arr = explode('.', $this->arquivo['name']);
       return $extensao = strtolower(end($arr));*/
	

    }

    /*Método que verifica se o arquivo é uma imagem o parametro "$extensao"
    deve conter a extensão do arquivo que será usado no upload.*/
    private function ehImagem($extensao){

      $extensoes = array('gif', 'jpeg', 'jpg', 'png');

      /*verifica se o array de extensões possui um dos tipos de arquivos
      permitidos*/
      /*
      in_array - verifica se um ou mais valores exitem em um array
      */
      if(in_array($extensao, $extensoes)){

          return true;

      }

    }

    /*Método que trata do redimensionamento da imagem.*/
    private function redimensionar($imgLarg, $imgAlt, $tipo, $img_localizazao){

      /*Redimensiona a imagem sem perder a proporção*/
      #Verififica se a largura é maior que a altura:
      if($imgLarg > $imgAlt){//A largura é maior que a altura.

        $novaLarg = $this->largura;
        /*
        round - arredonda um numero de a á 4 para baixo de 5 á 9 para cima.
        */
        $novaAlt = round(($novaLarg / $imgLarg) * $imgAlt);

      }else if($imgAlt > $imgLarg){//A altura é maior que a largura.

        $novaAlt = $this->altura;
        $novaLarg = round(($novaAlt / $imgAlt) * $imgLarg);

      }else{//Altura e lagura são iguais.

        /*
        max - localiza o maior valor.
        */
        $novaAltura = $novaLargura = max($this->largura, $this->altura);

      }

      /*Cria uma nova imagem com os novos valores de altura e largura*/
      /*
      imagecreatetruecolor - Cria uma nova imagem no padrão "true color".
      */
      $novaImagem = imagecreatetruecolor($novaLarg, $novaAlt);

      switch ($tipo) {
        case 1://GIF
          /*
          imagecreatefromgif - Cria uma nova imagem no formato gif a partir de uma imagem ou de uma URL.
          */
          $origem = imagecreatefromgif($img_localizazao);
          /*
          imagecopyresampled - redimensiona uma imagem.
          */
          imagecopyresampled($novaImagem, $origem, 0, 0, 0, 0, $novaLarg, $novaAlt, $imgLarg, $imgAlt);
          /*
          imagegif - Envia uma imagem no formato gif para um navegador ou para uma pasta.
          */
          imagegif($novaImagem, $img_localizazao);
          break;

        case 2://JPG
          $origem = imagecreatefromjpeg($img_localizazao);
          imagecopyresampled($novaImagem, $origem, 0, 0, 0, 0, $novaLarg, $novaAlt, $imgLarg, $imgAlt);
          imagejpeg($novaImagem, $img_localizazao);
          break;

        case 3://PNG
          $origem = imagecreatefrompng($img_localizazao);
          imagecopyresampled($novaImagem, $origem, 0, 0, 0, 0, $novaLarg, $novaAlt, $imgLarg, $imgAlt);
          imagepng($novaImagem, $img_localizazao);
          break;

      }

      /*Destroi as imagens criadas para manipulação via código*/
      imagedestroy($novaImagem);
      imagedestroy($origem);

    }

    public function salvar(){

      $extensao = $this->getExtensao();

      /*Gera umm nome único para a imagem utilizando a função "time"*/
      /*
      time - retorna o tempo no formato "timestamp" padrão Unix.
      */
      $novo_nome = time() . '.' . $extensao;

      /*Configura a string que vai representar a localização fisica do arquivo no disco rigido*/
      $destino = $this->pasta . $novo_nome;

      /*Move o arquivo da memória RAM para o disco rigido*/
      if (!move_uploaded_file($this->arquivo['tmp_name'], $destino)) {

          if($this->arquivo['error']===1){

            return 'Tamanho excede o permitido.';

          }else{

            return "Erro " . $this->arquivo['error'];

          }

      }

      if ($this->ehImagem($extensao)) {

        /*Recupera a largura, altura, tipo e atributo da imagem*/
        /*
        list - Cria variáveis como se fossem arrays.
        getimagesize - Obtem o tamanho de uma imagem.
        */
        list($largura, $altura, $tipo, $atributo) = getimagesize($destino);

        //Verifica se é preciso redimencionar a imagem.
        if (($largura > $this->largura) || ($altura > $this->altura)) {

          $this->redimensionar($largura, $altura, $tipo, $destino);

        }

        return $this->pasta . $novo_nome;

      }
	      

    }  

  }

?>
