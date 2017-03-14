<?php
// OK
// The message
//$crlf = "\r\n";
 $fle_nam = $_POST['le_nam'];
 $fle_geo = $_POST['le_geo'];
 $fle_dir = $_POST['le_dir'];
 $fle_dis = $_POST['le_dis'];
 $fle_tel = $_POST['le_tel'];
 $fle_web = $_POST['le_web'];
 $lfe_mail = $_POST['le_mail'];
 $fle_cat = $_POST['le_cat'];
 $fle_tag = $_POST['le_tag'];
 $fle_pre = $_POST['le_pre'];
 $fle_est = $_POST['le_est'];


    $mensaje = "<html><body>";
    $mensaje .= "<table>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Nombre :</td>";
    $mensaje .= "<td>".$fle_nam."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Email :</td>";
    $mensaje .= "<td>".$fle_geo."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Teléfono :</td>";
    $mensaje .= "<td>".$le_dir."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Mensaje :</td>";
    $mensaje .= "<td>".$le_dis."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Nombre :</td>";
    $mensaje .= "<td>".$fle_tel."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Email :</td>";
    $mensaje .= "<td>".$fle_web."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Email :</td>";
    $mensaje .= "<td>".$lfe_mail."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Teléfono :</td>";
    $mensaje .= "<td>".$fle_cat."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Mensaje :</td>";
    $mensaje .= "<td>".$fle_tag."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Teléfono :</td>";
    $mensaje .= "<td>".$fle_pre."</td>";
    $mensaje .= "</tr>";
    $mensaje .= "<tr>";
    $mensaje .= "<td>Mensaje :</td>";
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