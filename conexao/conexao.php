<?php 
      $servername = "localhost";
      $username = "seu-usuario";
      $password = "sua-senha";
      $dbname = "seu-banco-de-dados";
      
      $conn = new mysqli($servername, $username, $password, $dbname);
      
      if ($conn->connect_error) {
          die("Conexão falhou: " . $conn->connect_error);
      }
      
