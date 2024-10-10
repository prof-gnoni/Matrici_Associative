<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella PHP con Matrici Associative</title>
    <style>
        /* faremo un fogli a parte per questo stile */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body> <?php /* CORPO */ ?>

<h2>Elenco degli Studenti</h2>

<?php
// Matrice associativa che rappresenta gli studenti e i loro dati
$studenti = [
    [
        "nome" => "Marco Rossi",
        "eta" => 17,
        "classe" => "3A",
        "media_voti" => 8.5
    ],
    [
        "nome" => "Giulia Bianchi",
        "eta" => 16,
        "classe" => "3B",
        "media_voti" => 9.1
    ],
    [
        "nome" => "Luca Verdi",
        "eta" => 17,
        "classe" => "3C",
        "media_voti" => 7.8
    ],
    [
        "nome" => "Francesca Neri",
        "eta" => 16,
        "classe" => "3A",
        "media_voti" => 9.4
    ]
];
?>

<table>
    <thead>
    <tr>
        <th>Nome</th>
        <th>Età</th>
        <th>Classe</th>
        <th>Media Voti</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($studenti as $studente) { ?>
        <tr>
            <td><?php echo $studente["nome"]; ?></td>
            <td><?php echo $studente["eta"]; ?></td>
            <td><?php echo $studente["classe"]; ?></td>
            <td><?php echo $studente["media_voti"]; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>