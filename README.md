# Sitio Web / Sistema de pagos del Club de Leones de David

## Requisitos

- Docker + Docker Compose

## Instalación y ejecución

```bash
# Clonar el repositorio
git clone https://github.com/saldana83/clubdeleones.git
cd clubdeleones

# Iniciar contenedores
docker-compose up -d --build
```

La aplicación queda disponible en `http://localhost:8080`.

## Backend

- URL: `http://localhost:8080/backend`
- Usuario: `admin`
- Correo: `admin@domain.tld`
- Contraseña: `12345678`

## Base de datos

- Motor: MySQL 5.7
- Puerto: 3306 (mapeado al host)
- Base de datos: `clubdeleonesdedavid`
- Usuario: `root`
- Contraseña: `rootpassword`
- El dump inicial se importa automáticamente desde `BasedeDatos/clubdeleonesdedavid.sql.zip`

## Tecnologías

- October CMS v1 (build 455) / Laravel 5.5
- PHP 7.3 / Apache
- MySQL 5.7
- Bootstrap 3 + Flat UI
- jQuery, jQuery UI
- LESS compilado vía PHP
