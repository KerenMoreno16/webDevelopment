<?php

if (isset($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $numPag = addslashes($_POST['numPag']);
    $autor = addslashes($_POST['autor']);
    $numEdicao = addslashes($_POST['numEdicao']);
    $ano = addslashes($_POST['ano_publicacao']); 
    $editora = addslashes($_POST['editora']);
   
    /* verificar se esta preenchido */
    if (!empty($nome) && !empty($numPag) && !empty($autor) && !empty($numEdicao) && !empty($ano) && !empty($editora)) {
        /* Conecta o BD */
        require_once 'conexaoBD.php';
        
   /* verifica se o cliente ja está cadastrado no BD */
   $sql = $conexao->prepare("SELECT cpf FROM pessoa WHERE cpf = :c");
   $sql->bindValue(":c", $cpf);                    
   $sql->execute();
   if ($sql->rowCount() == 0) {
           /* Se não está cadastrada no BD (=0), efetua o cadastro */
           $sql2 = $conexao->prepare("INSERT INTO livro (nome, numPag, autor, numEdicao, ano_publicacao, editora) VALUES (:n, :nmp, :a, :nme, :ano, :edt)");
           $sql2->bindValue(":n", $nome);
           $sql2->bindValue(":nmp", $numPag);
           $sql2->bindValue(":a", $autor);
           $sql2->bindValue(":nme",$numEdicao);
           $sql2->bindValue(":ano", $ano);
           $sql2->bindValue(":edt", $editora);
           $sql2->execute();

           /* Criar estrutura de verificação para saber se o cadastro foi realmente efetuado*/ 
           echo "<script>alert('Livro cadastrado com sucesso!');</script>";
   } 
   else {
           echo "<script>alert('Livro já cadastrado.'); history.back();</script>";   
   } 
}
else {
   echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
} 
}

?>