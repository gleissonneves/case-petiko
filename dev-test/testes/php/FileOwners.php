<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Implemente uma função que ao receber um array associativo contendo arquivos e donos, retorne os arquivos agrupados por dono. 

Por exempolo, um array ["Input.txt" => "Jose", "Code.py" => "Joao", "Output.txt" => "Jose"] a função groupByOwners deveria retornar ["Jose" => ["Input.txt", "Output.txt"], "Joao" => ["Code.py"]].


*/

class FileOwners
{
    public static function groupByOwners($files)
    {
          $fileOwner = [];
          foreach ($files as $key => $value) {
                if (array_key_exists($value, $fileOwner)) {
                    array_push($fileOwner[$value], $key);
                } else {
                    $fileOwner[$value] = [$key];
                }
            }

          return $fileOwner;
    }
}

$files = array
(
    "Input.txt" => "Jose",
    "Code.py" => "Joao",
    "Output.txt" => "Jose",
    "Click.js" => "Maria",
    "Out.php" => "maria",
);

echo "<pre>";
var_dump(FileOwners::groupByOwners($files));
