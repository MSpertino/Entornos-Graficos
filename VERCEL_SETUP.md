# Configuración de Vercel - Cambios Realizados

## Resumen

Tu sitio web de Veterinaria San Antón ha sido configurado correctamente para desplegarse en Vercel. Se han realizado los siguientes cambios:

## Cambios Realizados

### 1. **Actualización de Enlaces de Estilos**

- Se reemplazaron todos los enlaces relativos a `styles.css` (`../styles.css`, `styles.css`) por la ruta absoluta `/styles.css`
- Se actualizaron **25+ archivos PHP** en las siguientes carpetas:
  - `api/` (archivos raíz)
  - `api/vistaAdmin/` (9 archivos)
  - `api/vistaCliente/` (6 archivos)
  - `api/vistaProfesional/` (2 archivos)
  - `api/shared/` (2 archivos)

### 2. **Creación de Estructura Estática**

- Se creó la carpeta `/public/`
- Se copió `styles.css` a `/public/styles.css`
- Esto permite que Vercel sirva los archivos estáticos correctamente

### 3. **Configuración de vercel.json**

- Se actualizó el archivo `vercel.json` con las siguientes rutas:
  - `/public/(.*)` → Sirve archivos estáticos desde la carpeta public
  - `/styles.css` → Redirige a `/public/styles.css`
  - `/api/(.*)` → Archivos API
  - `/(.*)`→ Redirige a `api/index.php` (punto de entrada principal)

### 4. **Archivos Nuevos/Actualizados**

- ✅ `public/styles.css` - Copía de los estilos en la carpeta pública
- ✅ `vercel.json` - Configuración mejorada de Vercel
- ✅ `README.md` - Documentación del proyecto
- ✅ `.gitignore` - Para controlar qué archivos se suben a git

## Cómo Desplegar en Vercel

### Opción 1: Desde la interfaz web de Vercel

1. Ve a [vercel.com](https://vercel.com)
2. Conéctate con tu cuenta GitHub/GitLab
3. Haz clic en "New Project"
4. Selecciona tu repositorio
5. Vercel detectará automáticamente la configuración en `vercel.json`
6. Configura las variables de entorno (base de datos, credenciales, etc.)
7. ¡Haz clic en Deploy!

### Opción 2: Desde la línea de comandos

```bash
# Instala Vercel CLI
npm i -g vercel

# En la carpeta del proyecto
vercel
```

## Variables de Entorno a Configurar en Vercel

Asegúrate de configurar estas variables en el panel de Vercel:

```
servername=tu_servidor_db
username=tu_usuario_db
password=tu_contraseña_db
dbname=tu_nombre_db
```

## Archivos Modificados

### Archivos PHP con enlaces actualizados a `/styles.css`:

- api/index.php
- api/registrarse.php
- api/profesionales.php
- api/nosotros.php
- api/iniciar-sesion.php
- api/contactanos.php
- api/vistaAdmin/agregar-mascota.php
- api/vistaAdmin/alta-especialista.php
- api/vistaAdmin/detalle-cliente.php
- api/vistaAdmin/detalle-especialista.php
- api/vistaAdmin/gestionar-atenciones.php
- api/vistaAdmin/gestionar-clientes.php
- api/vistaAdmin/gestionar-especialistas.php
- api/vistaAdmin/gestionar-hospitalizacion.php
- api/vistaAdmin/gestionar-mascotas.php
- api/vistaCliente/autogestion-turnos.php
- api/vistaCliente/mis-mascotas.php
- api/vistaCliente/mis-turnos.php
- api/vistaCliente/solicitar-turno.php
- api/vistaCliente/solicitar-turno-profesional.php
- api/vistaCliente/solicitar-turno-servicio.php
- api/vistaProfesional/dashboardProfesional.php
- api/vistaProfesional/misTurnosProfesional.php
- api/shared/detalle-atencionAP.php
- api/shared/detalle-mascota.php

## Información Adicional

- **Runtime PHP**: vercel-php@0.7.3
- **Archivos estáticos**: Se sirven desde `/public/`
- **Punto de entrada**: `api/index.php`
- **Tipo de proyecto**: PHP con Composer

Todos los recursos externos (Bootstrap, jQuery, FullCalendar, etc.) se cargan desde CDN, así que no hay dependencias de archivos locales para esos.

---

**Configuración completada**: ✅ Tu sitio está listo para desplegarse en Vercel
