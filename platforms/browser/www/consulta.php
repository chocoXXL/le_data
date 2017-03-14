<?php
// OK
// The message
//$crlf = "\r\n";
 $fle_nam = $_POST['lo_nam'];
 $fle_geo = $_POST['lo_geo'];
 $fle_dir = $_POST['lo_dir'];
 $fle_dis = $_POST['lo_dis'];
 $fle_tel = $_POST['lo_tel'];
 $fle_web = $_POST['lo_web'];
 $fle_mail = $_POST['lo_mail'];
 $fle_cat = $_POST['lo_cat'];
 $fle_tag = $_POST['lo_tag'];
 $fle_pre = $_POST['lo_pre'];
 $fle_est = $_POST['lo_est'];

    $mensaje = "<html><body>";
    $mensaje .= "<table>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Nombre :</td>";
    $mensaje .= "<td>".$fle_nam."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Geolocalización :</td>";
    $mensaje .= "<td>".$fle_geo."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Dirección :</td>";
    $mensaje .= "<td>".$fle_dir."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Distrito :</td>";
    $mensaje .= "<td>".$fle_dis."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Teléfono :</td>";
    $mensaje .= "<td>".$fle_tel."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Web :</td>";
    $mensaje .= "<td>".$fle_web."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Email :</td>";
    $mensaje .= "<td>".$fle_mail."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Categoría :</td>";
    $mensaje .= "<td>".$fle_cat."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Tags :</td>";
    $mensaje .= "<td>".$fle_tag."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Precio :</td>";
    $mensaje .= "<td>".$fle_pre."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Estrellas :</td>";
    $mensaje .= "<td>".$fle_est."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "</table>";
    $mensaje .= "</body></html>";

    $email_ec  = 'onecoldplayer@gmail.com';
    //$email_ec  = 'onecoldplayer@hotmail.com . ', '; // note the comma
    //$email_ec .= $email;
    $encabezado = "Un nuevo Local";
    
//Setup Email
    $headers = 'From: ' . $fname  . "\r\n" .
               'Reply-To: ' . $email  . "\r\n" .
               'Cc:' .  $email  . "\r\n" .
               'Content-Type: text/html; charset=UTF-8' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

// Send
mail($email_ec, $encabezado, $mensaje, $headers);

?>

<?php 

?>