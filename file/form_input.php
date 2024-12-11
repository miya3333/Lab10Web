<?php
//program memanfaatkan program 10.2 untuk membuat form inputan sederhana//

include "form.php";

echo "<html>
<head>
    <title>Mahasiswa</title>
    <style>
        body {
            display: flex;
            justify-content: left; 
        }
        .form-container {
            width: 10%;
        }
    </style>
</head>
<body>
<div class='form-container'>
    <h4>Silahkan isi form berikut ini :</h4>";
$form = new Form("", "Simpan Data");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
$form->displayForm();
echo "</div>
</body></html>";

?>