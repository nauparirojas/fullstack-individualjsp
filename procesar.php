<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%!
    // Método auxiliar para prevenir XSS de forma nativa sin librerías externas
    private String escaparHTML(String str) {
        if (str == null) return "";
        return str.replace("&", "&amp;")
                  .replace("<", "&lt;")
                  .replace(">", "&gt;")
                  .replace("\"", "&quot;")
                  .replace("'", "&#x27;");
    }
%>
<%
    // Recuperar parámetros enviados por método POST
    String nombre = request.getParameter("nombre");
    String email = request.getParameter("email");

    // Validación básica de nulos
    if (nombre == null || email == null || nombre.trim().isEmpty()) {
        response.sendError(HttpServletResponse.SC_BAD_REQUEST, "Parámetros incompletos.");
        return;
    }

    // Manejo de sesiones en Java (HttpSession)
    session.setAttribute("usuarioJSP", nombre);
%>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado JSP</title>
</head>
<body>
    <h2>Procesamiento exitoso en JSP</h2>
    <p>Bienvenido, <strong><%= escaparHTML(nombre) %></strong>.</p>
    <p>Tu correo registrado es: <%= escaparHTML(email) %></p>
    <p>ID de Sesión HTTP: <%= session.getId() %></p>
    <br><a href="index.jsp">Volver</a>
</body>
</html>