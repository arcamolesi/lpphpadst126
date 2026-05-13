<?php
   namespace DAL; 
   
   include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/DAL/conexao.php";  
   include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/MODEL/agricultor.php";



   Class Agricultor{
         public function Select() {
            $sql = "Select * from agricultor;";
            $con = Conexao::conectar(); 
            $registros = $con->query($sql);
            $con = Conexao::desconectar();
            //$registros equivale a um recordset(tabela) de banco de dados
            //$linha é uma linha da tabela 

            foreach($registros as $linha){
                $agricultor = new \MODEL\Agricultor(); 
                $agricultor->setId($linha['id']); 
                $agricultor->setNome($linha['nome']);
                $agricultor->setCidade($linha['cidade']);
                $agricultor->setBairro($linha['bairro']);
                $agricultor->setIdade($linha['idade']);

                $lstAgricultor [] = $agricultor; 

            }

            return $lstAgricultor; 

         }

   }

?>