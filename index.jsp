<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 09 - JSP</title>
</head>
<body>
    <h2>Formulario de Registro - JSP</h2>
    <form action="procesar.jsp" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <button type="submit">Enviar (JSP)</button>
    </form>
</body>
</html>