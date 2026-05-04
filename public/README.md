# Proyecto Autoload con Composer (PSR-4)

## 📌 Descripción

Este proyecto implementa la carga automática de clases en PHP utilizando Composer bajo el estándar PSR-4. Se organiza el código en carpetas models y services para mejorar la estructura y mantenibilidad.

---

## ⚙️ Instalación

1. Clonar el repositorio
2. Ejecutar el siguiente comando:

composer dump-autoload

3. Ejecutar el proyecto:

php public/index.php

---

## 📁 Estructura del Proyecto

Autoload/
│
├── src/
│   ├── models/
│   │   └── Usuario.php
│   ├── services/
│   │   └── UsuarioService.php
│
├── public/
│   └── index.php
│
├── composer.json
├── .gitignore

---

## ✅ Prueba de Funcionamiento

Salida esperada:

Nombre: Andy

---

## 🧠 Conclusiones Técnicas

* El uso de PSR-4 permite una mejor organización del código.
* Composer facilita la carga automática de clases sin necesidad de include o require.
* Se mejora la mantenibilidad del proyecto.
* El autoload optimiza el rendimiento al cargar clases solo cuando se necesitan.

---
