<?php

    foreach ($todos_mis_contactos as $fila)
    {
            foreach ($fila as $campo => $valor) 
            {
                echo "$campo: $valor <br><br>";
            }
    }