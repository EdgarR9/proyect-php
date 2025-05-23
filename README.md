# Marvel Next Movie Viewer 🦸‍♂️🎬

Este proyecto es una página web sencilla construida en **PHP**, que consulta la API pública [whenisthenextmcufilm.com](https://whenisthenextmcufilm.com/) para mostrar información sobre la próxima película del Universo Cinematográfico de Marvel (MCU).

## 🧩 Tecnologías utilizadas

- **PHP** (cURL para consumo de APIs REST)
- **HTML5**
- **CSS** (con [PicoCSS](https://picocss.com/) para estilos rápidos y modernos)
- API: `https://whenisthenextmcufilm.com/api`

## 📦 ¿Qué hace este proyecto?

- Realiza una petición HTTP a una API para obtener datos de la próxima película del MCU.
- Muestra:
  - El **póster**
  - El **título**
  - Los **días restantes para el estreno**
  - La **fecha de estreno**
  - El **título de la siguiente película**

## 🚀 Cómo ejecutarlo

1. Asegúrate de tener instalado PHP (v7.4 o superior recomendado).
2. Guarda el código en un archivo, por ejemplo: `index.php`.
3. Desde tu terminal, ejecuta un servidor local:

```bash
php -S localhost:8000
