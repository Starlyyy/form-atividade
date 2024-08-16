<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   // Recebe os dados do formulário
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $data_nascimento = $_POST['data_nascimento'];
   $habilidades = $_POST['habilidades'];
   $pais = $_POST['pais'];
   $comentarios = $_POST['comentarios'];

   // Validação básica (opcional)
   if (empty($nome) || empty($email) || empty($data_nascimento) || empty($habilidades) || empty($pais)){
  
       echo "Todos os campos são obrigatórios!";
  
   } else {
       // Processa os dados (por exemplo, salva no banco de dados)
       echo "Nome: " . htmlspecialchars($nome) . "<br>";
       echo "Email: " . htmlspecialchars($email) . "<br>";
       echo "Data de Nascimento: " . htmlspecialchars($data_nascimento) . "<br>";
       echo "Habilidades: " . htmlspecialchars($habilidades) . "<br>";
       echo "País: " . htmlspecialchars($pais) . "<br>";
       echo "Comentátios: " . htmlspecialchars($email) . "<br>";
   }
}
