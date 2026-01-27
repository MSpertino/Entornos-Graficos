# Veterinaria San Antón - Sitio Web

Sistema de gestión de turnos y atención veterinaria.

## Estructura del Proyecto

```
├── api/                 # Archivos PHP principales
│   ├── shared/         # Componentes compartidos (navbar, footer, etc)
│   ├── vistaAdmin/     # Vistas administrativas
│   ├── vistaCliente/   # Vistas para clientes
│   ├── vistaProfesional/ # Vistas para profesionales
│   └── index.php       # Página de inicio
├── public/             # Archivos estáticos
│   └── styles.css      # Estilos CSS
├── vendor/             # Dependencias Composer (generado)
├── vercel.json         # Configuración de Vercel
└── composer.json       # Dependencias PHP
```

## Configuración para Vercel

El proyecto está configurado para ejecutarse en Vercel con PHP. La configuración se especifica en `vercel.json`:

- **Archivos estáticos**: Se sirven desde `/public/`
- **Punto de entrada**: `api/index.php` para todas las rutas
- **Runtime**: `vercel-php@0.7.3`

## Pasos de Deployment

1. **Conectar el repositorio a Vercel**:
   - Ir a [vercel.com](https://vercel.com)
   - Conectar tu repositorio de GitHub/GitLab

2. **Configuración de variables de entorno**:
   - Configurar las variables necesarias para la base de datos en el panel de Vercel

3. **Deploy automático**:
   - Cada push a la rama principal se desplegará automáticamente

## Enlaces de Recursos

Los archivos CSS se referencian desde la raíz:

```html
<link rel="stylesheet" href="/styles.css" />
```

Esto asegura que los estilos se carguen correctamente en Vercel, sin importar la ruta de la página.

## Dependencias PHP

Las dependencias están definidas en `composer.json`. Para instalarlas localmente:

```bash
composer install
```

## Base de Datos

Asegúrate de que las variables de entorno para la base de datos estén configuradas correctamente en Vercel.
