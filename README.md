
# UNBC Exam

Hola que tal equipo de UNBC, les dejo mie examen solicitado para el puesto de FullStack Dev.

Además, de una pequeña documentación para que puedan levantar el proyecto


### Requisitos

A.- PHP 8.2 \
B.- Composer 2.7.1 \
C.- MySQL 8 \
D.- Cualquiera de los siguiente: XAMPP, WAMP, LAMP, Laragon ...

## Pasos a seguir

1.- Debemos ejecutar el `app.sql` que se encuentra en la raiz del proyecto para crear la BD

2.- Instalar las dependencias
```bash
  composer install
```
```bash
  npm i
```
3.- Generar la llave del proyecto
```bash
  php artisan key:generate
```

4.- Si es que fue clonado directamente del repositorio generar el `.env`
```bash
  cp .env.example .env
```

5.- Ejecutar las migraciones
```bash
  php artisan migrate
```

6.- Ejecutar el Seed
```bash
  php artisan db:seed
```

7.- Correr el back y front
```bash
  php artisan serve
```
```bash
  npm run dev
```

## Demo del proyecto levantado

https://c4cf-38-25-7-254.ngrok-free.app
