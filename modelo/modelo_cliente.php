<?php


require_once "config/conexion.php";


function obtenerCliente($conexion)
{

    $sql = "select c.customer_id,
       c.store_id,
       c.first_name,
       c.last_name,
       concat(c.first_name, ' ', c.last_name) As name,
       c.email,
       c.address_id,
       c.create_date,
       DATE_FORMAT(C.create_date, '%d-%M-%Y %l %i %p')As fecha,
       a.address,
       
        case c.active when 1 then 'si' else 'no' end as active
        from customer AS c
        left join store AS s on c.store_id = s.store_id
        left join address AS a on c.address_id = a.address_id;";



    return $conexion->query($sql)->fetchAll();
}








