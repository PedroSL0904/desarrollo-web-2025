<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Formulario</title>
</head>
<body>
    <h2>Datos Recibidos del Formulario</h2>
    
    <?php
    // Determinar qué método se usó
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<p><strong>Método:</strong> POST</p>";
        $fname = $_POST['fname'] ?? 'No recibido';
        $lname = $_POST['lname'] ?? 'No recibido';
    } else {
        echo "<p><strong>Método:</strong> GET</p>";
        $fname = $_GET['fname'] ?? 'No recibido';
        $lname = $_GET['lname'] ?? 'No recibido';
    }
    
    echo "<h3>Valores recibidos:</h3>";
    echo "<p><strong>First Name:</strong> " . htmlspecialchars($fname) . "</p>";
    echo "<p><strong>Last Name:</strong> " . htmlspecialchars($lname) . "</p>";
    ?>
    
    <br>
    <a href="javascript:history.back()">Volver al formulario</a>
</body>
</html>