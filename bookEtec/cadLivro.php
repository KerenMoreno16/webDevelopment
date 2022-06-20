<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
  src = "js/jquery.min.js"
  </script>
  <script>
  src = "js/jquery.mask.min.js"
  </script>
  <script>
  src = "js/bootstrap.min.js"
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estiloCad.css">

  <title>Cadastrar Dados do Livro</title>
</head>

<body>

  <header> Trazer um header padrão com opção de sair, usuario logado nome do sistema, etc...? </header>

  <h1>Cadastro do Livro</h1>

  <form method="POST" name="dadosLivro" action="cadLivroAction.php">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-8">
          <label for="autoSizingInput">Nome do Livro</label>
          <input type="text" class="form-control" name="nome" id="nome" maxlenght="80"
            placeholder="Meu Pé de Laranjeira...">
        </div>

        <div class="col-md-3">
          <label for="autoSizingInput">ISBN:</label>
          <input type="text" class="form-control" name="isbn" id="isbn" maxlenght="13" placeholder="0000000000000">
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-md-5">
          <label for="autoSizingInput">Autor</label>
          <input type="text" class="form-control" name="autor" id="autor" maxlenght="80"
            placeholder="xxxxxxxxxxxxxxxxxx...">
        </div>

        <div class="col-md-2">
          <label for="autoSizingInput">Ano de Publicação</label>
          <input type="date" class="form-control" name="ano" id="ano_publicacao" maxlenght="10">
        </div>

        <div class="col-md-3">
          <label for="autoSizingInput">Categoria:</label>
          <input type="text" class="form-control" name="categoria" id="categoria" maxlenght="50"
            placeholder="Romance/Educacional...">
        </div>

        <div class="row align-items-center">
          <div class="col-md-5">
            <label for="autoSizingInput">Editora</label>
            <input type="text" class="form-control" name="editora" id="editora" maxlenght="20"
              placeholder="xxxxxxxxxxxxxxx...">
          </div>

          <div class="col-md-2">
            <label for="autoSizingInput">Número da Edição</label>
            <input type="text" class="form-control" name="numEdicao" id="numEdicao" maxlenght="5" placeholder="xxxxx">
          </div>

          <div class="col-md-2">
            <label for="autoSizingInput">Número de páginas</label>
            <input type="text" class="form-control" name="numPag" id="numPag" maxlenght="5" placeholder="xxxxx">
          </div>

          <div class="row divBtn">
            <div class="col-md-2">
              <input type="submit" name="btnSalvar" value="Salvar">
            </div>

            <div class="col-md-2">
              <a href="home.php"><input type="button" value="Cancelar"></a>
            </div>
          </div>

        </div>
  </form>

</body>

</html>