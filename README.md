# La Conserjería

## :information_source: Explicación del proyecto

Cubrimos la necesidad de varios **hoteles** en el campo de gestión de **incidencias** y **averías**.

## :scroll: Funcionalidades de la web:

* Las llamadas de averías se registran en una **base de datos** al momento de recibirse.

* Lista visible de llamadas abiertas que una vez resueltas son **borradas**.

> [!NOTE]
> En caso de error una llamada abierta puede **modificarse**.

### :fountain_pen: *Se especifican*:

*- Id.*

*- Ubicación de la avería (room).*

*- Descripción detallada del problema (issue)*

*- Fecha del reporte (dateTime)*

![basedatos](https://github.com/user-attachments/assets/834270cf-aa5c-4e22-87b9-2730e3709ab5)

---

## :floppy_disk: Guía de instalación

### :open_file_folder: Preparación del proyecto

**Clonar** el **repositorio** en Visual Studio.

> [!IMPORTANT]
> Tener correctamente instalados **Composer** y **XAMPP** para que funcione la base de datos.

> [!NOTE]
> Para instalar Composer debemos introducir en **Git Bash** el **comando**:

```php
 $ composer install
 ```
 ![composer install](https://github.com/user-attachments/assets/37f4ac3a-0c91-4623-b32e-2f13c4b705c0)

### :open_file_folder: Base de datos

 En el panel de control de XAMPP: 

 - Ejecuta los módulos **Apache** y **MySQL** pulsando **Start** 

 - Abre el **Admin** de **Apache**

![panelxampp](https://github.com/user-attachments/assets/c058f39b-c325-4635-bad7-a209cd9e4541)

Una vez abierto, creamos una base de datos que nombramos como *concierge_db*

![crearbasedatos](https://github.com/user-attachments/assets/24908815-4ae3-4e4c-b434-d32ec3d184ce)

En la pestaña **SQL** pegamos el código que encontramos a continuación y pulsamos **Continuar**.

```sql
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2024 a las 12:36:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concierge_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problems`
--

CREATE TABLE `problems` (
  `id` int(11) NOT NULL,
  `room` varchar(5) NOT NULL,
  `issue` varchar(256) NOT NULL,
  `dateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `problems`
--

INSERT INTO `problems` (`id`, `room`, `issue`, `dateTime`) VALUES
(1, '', 'esto es una prueba', '2024-11-03'),
(2, '3465', 'wefwvwevervjrvnkejrvnkjervnkejrvnkejrvn', '2024-11-25'),
(3, '3465', 'wefwvwevervjrvnkejrvnkjervnkejrvnkejrvn', '2024-11-25'),
(4, '3231', 'Holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2024-11-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `problems`
--
ALTER TABLE `problems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```

![SQLcode](https://github.com/user-attachments/assets/b06f2c7f-24a4-4deb-bec5-72023afcd18a)

Todas las tareas deben aparecer con **tick verde**, si es así se te abrirá la tabla en tu navegador.

![SQLresultado](https://github.com/user-attachments/assets/f693827d-b6ab-4f1a-bcfb-b0c8a51d5043)

---

## :white_check_mark: Testing

:exclamation: Es importante hacer un testing del proyecto para comprobar si funciona correctamente usando en la terminal el comando:

```php
 $ ./vendor/bin/phpuit tests
 ```

![tests](https://github.com/user-attachments/assets/528e4e88-7a15-4842-b11a-18cdc3fd8ad7)

---

## :bulb: Documentación del proyecto

- **$options** = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

- **$options** = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

- **PDO::ATTR_DEFAULT_FETCH_MODE** (Nos permite configurar de que manera obtenemos los datos desde la BBDD).

- **PDO::FETCH_ASSOC** (Nos permite indicar que queremos recibir los datos como un array)
*$pdo->setAttribute* *(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*

- **PDO::ATTR_ERRMODE** (Nos permite configurar la forma en la que recibimos los error de la BBDD).

- **PDO::ERRMODE_EXCEPTION** (Indicamos que queremos que se lance una excepción en caso de error).


