Guía de despliegue para tu proyecto PHP “AmbuAlert”
Esta guía te va a llevar paso a paso desde tus archivos locales hasta tu página viva y rugiendo en internet.

Requisitos previos
Servidor con PHP 7.0+ y MySQL 5.7+ (o MariaDB)

Acceso al panel de hosting (cPanel, Plesk, etc.) o VPS configurado

Cliente FTP o acceso por SSH para subir archivos

Dominio (opcional, pero recomendado para no andar con IPs feos)

Paso 1: Prepara tu proyecto localmente
Verifica que tu proyecto funciona 100% en local (login, registro, dashboard, logout).

Organiza tus archivos:

Carpeta /img para imágenes

/styles.css para estilos

Backend en /backend o /controllers, como lo tengas

Archivos PHP con conexión bien definida (conexion.php o similar)

Si usas Git, asegúrate que todo está commiteado y sin archivos pendientes.

Paso 2: Contrata un hosting o prepara tu servidor
Si no tienes hosting, opciones rápidas:

Hostinger, SiteGround, Webempresa — Hosting compartido con PHP/MySQL.

VPS si quieres control total (DigitalOcean, Linode).

Para demos rápidas, puedes usar ngrok para exponer localhost.

Paso 3: Sube tu proyecto al servidor
Opción 1: Panel de hosting
Accede al panel (cPanel, Plesk).

Ve a “Administrador de archivos” y navega a la carpeta pública (public_html, www).

Sube tus archivos, idealmente comprimidos en ZIP y luego descomprime.

Opción 2: FTP
Descarga FileZilla (https://filezilla-project.org).

Conéctate con credenciales FTP de tu hosting.

Sube todo el proyecto a la carpeta pública.

Paso 4: Configura la base de datos
En el panel de hosting, crea una base de datos nueva (ej. ambu_alert).

Crea un usuario con todos los permisos para esa DB.

Anota:

Nombre de base de datos

Usuario

Contraseña

Host (generalmente localhost)

Paso 5: Importa la estructura y datos a la base
Accede a phpMyAdmin desde tu panel.

Selecciona la base creada.

Importa tu archivo .sql que contiene las tablas y datos (login, usuarios, alertas, etc).

Paso 6: Actualiza la configuración en PHP
Abre tu archivo de conexión (conexion.php o donde conectes DB) y actualiza:

php
Copiar
Editar
<?php
$db_host = 'localhost';     // O el host que te dio el proveedor
$db_user = 'usuario_mysql';  
$db_password = 'tu_password';  
$db_name = 'ambu_alert';    
?>
Guarda y sube de nuevo si hiciste cambios.

Paso 7: Configura URLs y rutas internas
Revisa que en tu HTML y PHP los enlaces y rutas sean relativas o correctas.

Si usas rutas absolutas, asegúrate que apuntan a tu dominio/servidor.

Corrige si tienes formularios con action mal configurados.

Paso 8: Coloca las imágenes y recursos estáticos
Sube tus imágenes a /img (o la carpeta que uses).

Asegúrate que las rutas en HTML y CSS coincidan (ejemplo: <img src="img/logo.png">).

Optimiza el peso para que no cargue lento.

Paso 9: Seguridad y archivos sensibles
Crea un .htaccess en la carpeta backend para proteger archivos:

bash
Copiar
Editar
# Bloquear acceso a archivos PHP sensibles excepto los necesarios
<FilesMatch "^(?!login\.php|logout\.php|dashboard\.php).+\.php$">
  Require all denied
</FilesMatch>

# Desactivar listado de directorios
Options -Indexes
Paso 10: Configura HTTPS (SSL)
Activa certificado SSL en tu hosting (Let's Encrypt gratis en la mayoría).

Fuerza HTTPS con .htaccess:

perl
Copiar
Editar
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}/$1 [L,R=301]
Paso 11: Pruebas finales
Accede a tu dominio o IP pública.

Prueba login, registro, panel, logout.

Verifica que la base de datos se actualice con datos reales.

Revisa que imágenes y estilos carguen bien.

Prueba alertas o cualquier función JS que tengas.

Mira la consola del navegador y logs de PHP para posibles errores.

Bonus: Para probar rápido en local y compartir URL
Instala ngrok.

Corre tu servidor local (XAMPP, Laragon, etc).

Ejecuta ngrok http 80 y obtén una URL pública temporal para mostrar tu sitio a otros.

Conclusión poética
Ya tienes tu código, tu base, tus imágenes,
solo falta ese fuego final: ponerlo a la vista del mundo.
Con tu base firme y tu servidor listo,
¡tu proyecto AmbuAlert será el faro que guíe a muchos!