# Club de Leones de David — October CMS v3

Sitio web del Club de Leones de David, construido con October CMS v3 sobre Laravel 9.

## Stack

| Componente | Versión |
|---|---|
| October CMS | ^3.7 |
| Laravel | ^9.0 |
| PHP | ^8.1 |
| MySQL | 5.7 |
| Apache | 2.4 (mod_php) |

## Inicio rápido

```bash
# Construir y levantar contenedores
docker compose build
docker compose up -d

# Instalar dependencias PHP
docker compose exec app composer install

# Generar APP_KEY
docker compose exec app php artisan key:generate

# Configurar .env (copiar de .env.example y ajustar)
cp .env.example .env
```

El sitio queda disponible en `http://localhost:8080`.

## Admin

- **URL:** `http://localhost:8080/clubdeleones-admin`
- **Usuario:** `alvarosamudio`
- **Contraseña:** `12345678`

## Base de datos

- Host: `db` (dentro de Docker)
- Base: `clubdeleonesdedavid`
- Usuario: `root`
- Contraseña: `rootpassword`
- Puerto: `3306`

El dump de la base de datos está en `BasedeDatos/backup-v1.sql`.

## Configuración de Apache

La configuración personalizada de Apache está en el directorio `docker/`:

- `docker/000-default.conf` — VirtualHost con DocumentRoot `/var/www/html`
- `docker/serve-html.conf` — Directorio con `AllowOverride All`

## Migración v1 → v3

Este proyecto fue migrado de October CMS v1 (2019) a v3 (2026). El backup de la
instalación original (v1) está disponible en el directorio `BasedeDatos/`.
