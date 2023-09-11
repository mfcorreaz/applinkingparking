-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 03:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applinkingparking`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciudades`
--

CREATE TABLE `ciudades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ciudades`
--

INSERT INTO `ciudades` (`id`, `nombre`, `estado_id`, `created_at`, `updated_at`) VALUES
(1, 'La Plata', 3, NOW(), NULL),
(2, 'Cordoba', 4, NOW(), NULL),
(3, 'Corrientes', 5, NOW(), NULL),
(4, 'Posadas', 6, NOW(), NULL),
(5, 'Santa Fé', 7, NOW(), NULL),
(14, 'La Matanza', 3, NOW(), NULL),
(17, 'Merlo', 3, NOW(), NULL),
(18, 'Goya', 5, NOW(), NULL),
(21, 'Saladas', 5, NOW(), NULL),
(22, 'Monte Caseros', 5, NOW(), NULL),
(23, 'Mar del Plata', 3, NOW(), NULL),
(24, 'San Luis del Palmar', 5, NOW(), NULL);


-- --------------------------------------------------------

--
-- Table structure for table `colores`
--

CREATE TABLE `colores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colores`
--

INSERT INTO `colores` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Rojo', NOW(), NULL),
(2, 'Azul', NOW(), NULL),
(3, 'Verde', NOW(), NULL),
(4, 'Negro', NOW(), NULL),
(5, 'Blanco', NOW(), NULL),
(6, 'Gris', NOW(), NULL),
(7, 'Plateado', NOW(), NULL),
(8, 'Amarillo', NOW(), NULL),
(9, 'Naranja', NOW(), NULL),
(10, 'Morado', NOW(), NULL),
(11, 'Rosado', NOW(), NULL),
(12, 'Beige', NOW(), NULL),
(13, 'Marrón', NOW(), NULL),
(14, 'Celeste', NOW(), NULL),
(15, 'Turquesa', NOW(), NULL),
(16, 'Dorado', NOW(), NULL),
(17, 'Platino', NOW(), NULL),
(18, 'Granate', NOW(), NULL),
(19, 'Cobre', NOW(), NULL),
(20, 'Plomo', NOW(), NULL);


-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `sitio_web` varchar(255) NOT NULL,
  `ciudad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `direccion`, `telefono`, `correo_electronico`, `sitio_web`, `ciudad_id`, `created_at`, `updated_at`) VALUES
(1, 'Empresa A', 'Calle 123', '123456789', 'empresaA@example.com', 'www.empresaA.com', 4, '2023-07-12 01:43:11', '2023-07-12 22:22:10'),
(2, 'Empresa B', 'Calle 456', '987654321', 'empresaB@example.com', 'www.empresaB.com', 3, '2023-07-12 01:43:11', '2023-07-12 01:43:11'),
(3, 'Empresa C', 'Calle 789', '456123789', 'empresaC@example.com', 'www.empresaC.com', 18, '2023-07-12 01:43:11', '2023-07-12 01:43:11'),
(4, 'Empresa D', 'Calle 321', '789654123', 'empresaD@example.com', 'www.empresaD.com', 4, '2023-07-12 01:43:11', '2023-07-12 01:43:11'),
(5, 'Empresa E', 'Calle 654', '321987456', 'empresaE@example.com', 'www.empresaE.com', 14, '2023-07-12 01:43:11', '2023-07-12 01:43:11'),
(6, 'Empresa F', 'Calle 987', '654321987', 'empresaF@example.com', 'www.empresaF.com', 23, '2023-07-12 01:43:11', '2023-07-12 01:43:11'),
(7, 'Empresa G', 'Calle 159', '123987654', 'empresaG@example.com', 'www.empresaG.com', 24, '2023-07-12 01:43:11', '2023-07-12 01:43:11'),
(8, 'Empresa H', 'Calle 753', '789321654', 'empresaH@example.com', 'www.empresaH.com', 21, '2023-07-12 01:43:11', '2023-07-12 01:43:11'),
(9, 'Empresa I', 'Calle 258', '654789321', 'empresaI@example.com', 'www.empresaI.com', 4, '2023-07-12 01:43:11', '2023-07-12 01:43:11'),
(10, 'Empresa J', 'Calle 852', '321654789', 'empresaJ@example.com', 'www.empresaJ.com', 17, '2023-07-12 01:43:11', '2023-07-12 01:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `espacios_estacionamientos`
--

CREATE TABLE `espacios_estacionamientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parqueadero_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_vehiculo_id` bigint(20) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `espacios_estacionamientos`
--

INSERT INTO `espacios_estacionamientos` (`id`, `parqueadero_id`, `tipo_vehiculo_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-07-12 04:12:55', '2023-07-12 04:12:55'),
(2, 1, 2, 1, '2023-07-12 04:12:55', '2023-07-12 04:12:55'),
(3, 2, 1, 1, '2023-07-12 04:12:55', '2023-07-12 04:12:55'),
(4, 2, 2, 1, '2023-07-12 04:12:55', '2023-07-12 04:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `pais_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `pais_id`, `created_at`, `updated_at`) VALUES
(3, 'Buenos Aires', 11, NOW(), NULL),
(4, 'Córdoba', 11, NOW(), NULL),
(5, 'Corrientes', 11, NOW(), NULL),
(6, 'Misiones', 11, NOW(), NULL),
(7, 'Santa Fe', 11, NOW(), NULL),
(8, 'Entre Ríos', 11, NOW(), NULL),
(9, 'Tucumán', 11, NOW(), NULL),
(10, 'Salta', 11, NOW(), NULL),
(11, 'Chubut', 11, NOW(), NULL),
(16, 'Chaco', 11, NOW(), NULL),
(17, 'Curitiva', 12, NOW(), NULL),
(19, 'Neuquén', 11, NOW(), NULL);


-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informacion_usuarios`
--

CREATE TABLE `informacion_usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informacion_usuarios`
--

INSERT INTO `informacion_usuarios` (`id`, `user_id`, `direccion`, `dni`, `created_at`, `updated_at`) VALUES
(1, 1, 'Calle Principal 123', '123456789', NULL, NULL),
(2, 2, 'Avenida Central 456', '987654321', NULL, NULL),
(3, 3, 'Plaza Mayor 789', '654321987', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(2, 'Ford', NOW(), NULL),
(3, 'Toyota', NOW(), NULL),
(4, 'Nissan', NOW(), NULL),
(5, 'Honda', NOW(), NULL),
(6, 'Dodge', NOW(), NULL),
(7, 'Chevrolet', NOW(), NULL),
(8, 'Volkswagen', NOW(), NULL),
(9, 'Renault', NOW(), NULL),
(10, 'Hyundai', NOW(), NULL),
(11, 'Mitsubishi', NOW(), NULL),
(12, 'Kia', NOW(), NULL),
(13, 'Mazda', NOW(), NULL),
(14, 'Subaru', NOW(), NULL),
(15, 'Fiat', NOW(), NULL),
(16, 'Peugeot', NOW(), NULL),
(17, 'Citroën', NOW(), NULL),
(18, 'Jeep', NOW(), NULL),
(19, 'Chery', NOW(), NULL),
(20, 'Suzuki', NOW(), NULL);


-- --------------------------------------------------------

--
-- Table structure for table `membresias`
--

CREATE TABLE `membresias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membresias`
--

INSERT INTO `membresias` (`id`, `user_id`, `codigo`, `monto`, `fecha_inicio`, `fecha_fin`, `created_at`, `updated_at`) VALUES
(1, 2, 'MEMB001', 0.00, '2023-07-15', '2023-08-14', '2023-07-12 06:45:00', '2023-07-12 09:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_19_133502_create_sessions_table', 1),
(7, '2023_07_19_142645_create_paises_table', 1),
(8, '2023_07_19_142656_create_estados_table', 1),
(9, '2023_07_19_142705_create_ciudades_table', 1),
(10, '2023_07_19_142712_create_colores_table', 1),
(11, '2023_07_19_142719_create_marcas_table', 1),
(12, '2023_07_19_142727_create_modelos_table', 1),
(13, '2023_07_19_142735_create_informacion_usuarios_table', 1),
(14, '2023_07_19_142743_create_membresias_table', 1),
(15, '2023_07_19_142750_create_empresas_table', 1),
(16, '2023_07_19_142758_create_parqueaderos_table', 1),
(17, '2023_07_19_142805_create_tipos_vehiculos_table', 1),
(18, '2023_07_19_142812_create_vehiculos_table', 1),
(19, '2023_07_19_142819_create_tarifas_table', 1),
(20, '2023_07_19_142826_create_users_parqueaderos_table', 1),
(24, '2023_07_19_142832_create_espacios_estacionamientos_table', 2),
(25, '2023_07_19_142839_create_registros_entradas_salidas_table', 3),
(26, '2023_07_19_142847_create_reviews_table', 3),
(27, '2023_07_21_133619_create_vehiculos_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `modelos`
--

CREATE TABLE `modelos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modelos`
--

INSERT INTO `modelos` (`id`, `nombre`, `marca_id`, `created_at`, `updated_at`) VALUES
(1, 'Spark', 7, NOW(), NULL),
(2, 'F-150', 2, NOW(), NULL),
(3, 'Corolla', 3, NOW(), NULL),
(4, 'Sentra', 4, NOW(), NULL),
(5, 'Civic', 5, NOW(), NULL),
(6, 'Journey', 6, NOW(), NULL),
(7, 'Journey RT', 6, NOW(), NULL),
(8, 'Corona', 3, NOW(), NULL);


-- --------------------------------------------------------

--
-- Table structure for table `paises`
--

CREATE TABLE `paises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paises`
--

INSERT INTO `paises` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(11, 'Argentina', NOW(), NULL),
(12, 'Brasil', NOW(), NULL),
(13, 'Colombia', NOW(), NULL),
(14, 'Ecuador', NOW(), NULL),
(15, 'España', NOW(), NULL),
(16, 'Norte América', NOW(), NULL),
(17, 'Francia', NOW(), NULL),
(18, 'Italia', NOW(), NULL),
(19, 'México', NOW(), NULL),
(20, 'Perú', NOW(), NULL),
(21, 'Paraguay', NOW(), NULL),
(23, 'Honduras', NOW(), NULL);


-- --------------------------------------------------------

--
-- Table structure for table `parqueaderos`
--

CREATE TABLE `parqueaderos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `latitud` decimal(10,8) NOT NULL,
  `longitud` decimal(11,8) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `horarios` varchar(255) NOT NULL,
  `informacion_adicional` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `empresa_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parqueaderos`
--

INSERT INTO `parqueaderos` (`id`, `nombre`, `direccion`, `latitud`, `longitud`, `capacidad`, `horarios`, `informacion_adicional`, `status`, `empresa_id`, `created_at`, `updated_at`) VALUES
(1, 'Yacare', 'Calle Avenida Rivadavia 123', -27.48526500, -58.81494300, 50, '08:00 - 20:00', 'Servicio de valet parking disponible', 1, 1, '2023-07-12 01:56:00', '2023-07-12 18:16:12'),
(2, 'Ara Vera', 'Calle San Juan 456', -27.49483700, -58.80562300, 30, '07:00 - 22:00', 'Seguridad las 24 horas', 0, 2, '2023-07-12 01:56:01', '2023-07-12 01:56:01'),
(3, 'Cabral', 'Calle Belgrano 789', -27.48491200, -58.81555500, 40, '24 horas', 'Descuentos especiales para clientes frecuentes', 0, 1, '2023-07-12 01:56:01', '2023-07-12 01:56:01'),
(4, 'San Martin', 'Calle Junín 321', -27.48854500, -58.80897200, 20, '09:00 - 18:00', 'Servicio de lavado de vehículos', 0, 2, '2023-07-12 01:56:01', '2023-07-12 01:56:01'),
(5, 'Tacuari', 'Calle Tacuari 654', -27.48593200, -58.81137900, 35, '06:00 - 00:00', 'Estacionamiento cubierto disponible', 0, 3, '2023-07-12 01:56:01', '2023-07-12 01:56:01'),
(6, 'Sapucay', 'Calle Juan Pujol 987', -27.49067100, -58.80720900, 25, '08:00 - 21:00', 'Espacios para motocicletas disponibles', 0, 3, '2023-07-12 01:56:01', '2023-07-12 01:56:01'),
(7, '7 puntas', 'Calle 9 de Julio 234', -27.48671300, -58.81014200, 15, '10:00 - 19:00', 'Servicio de carga de vehículos eléctricos', 0, 1, '2023-07-12 01:56:01', '2023-07-12 01:56:01'),
(8, 'Regatas', 'Calle 25 de Mayo 567', -27.48261400, -58.82003800, 50, '07:00 - 23:00', 'Tarifas especiales para eventos deportivos', 0, 2, '2023-07-12 01:56:01', '2023-07-12 01:56:01'),
(9, 'El parque', 'Calle Juan de Vera 876', -27.49315700, -58.81911400, 30, '09:00 - 20:00', 'Sistema de reserva en línea disponible', 0, 3, '2023-07-12 01:56:01', '2023-07-12 01:56:01'),
(10, 'Centenario', 'Calle Brasil 432', -27.49020600, -58.81341800, 40, '08:00 - 22:00', 'Descuento para residentes de la zona', 0, 1, '2023-07-12 01:56:01', '2023-07-12 01:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registros_entradas_salidas`
--

CREATE TABLE `registros_entradas_salidas` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehiculo_id` bigint(20) UNSIGNED NOT NULL,
  `parqueadero_id` bigint(20) UNSIGNED NOT NULL,
  `espacio_estacionamiento_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fecha_entrada` datetime NOT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `foto_entrada` varchar(255) DEFAULT NULL,
  `foto_salida` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `estado_de_pago` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registros_entradas_salidas`
--

INSERT INTO `registros_entradas_salidas` (`id`, `vehiculo_id`, `parqueadero_id`, `espacio_estacionamiento_id`, `fecha_entrada`, `fecha_salida`, `foto_entrada`, `foto_salida`, `created_at`, `updated_at`, `precio`, `estado_de_pago`) VALUES
(3, 5, 2, 3, '2023-07-19 15:45:56', NULL, 'foto_entrada_2', 'foto_salida_2', NULL, NULL, 15.75, 0),
(4, 4, 2, 3, '2023-07-19 15:45:56', '2023-07-10 18:50:05', 'foto_entrada_3', 'foto_salida_3', NULL, NULL, 12.99, 1),
(7, 5, 2, 3, '2023-07-19 15:45:56', NULL, 'foto_entrada_6', 'foto_salida_6', NULL, NULL, 11.25, 1),
(8, 5, 3, 2, '2023-07-19 15:45:56', NULL, 'foto_entrada_7', 'foto_salida_7', NULL, NULL, 13.75, 0),
(9, 3, 1, 1, '2023-07-19 15:45:56', NULL, 'foto_entrada_8', 'foto_salida_8', NULL, NULL, 10.99, 1),
(11, 5, 1, 2, '2023-07-19 15:45:56', NULL, 'foto_entrada_10', 'foto_salida_10', NULL, NULL, 11.99, 1),
(40, 2, 8, NULL, '2023-07-24 00:52:38', NULL, NULL, NULL, '2023-07-24 03:52:38', '2023-07-24 03:52:38', NULL, NULL),
(41, 23, 1, NULL, '2023-07-30 21:53:00', NULL, NULL, NULL, '2023-07-24 03:53:52', '2023-07-24 03:53:52', 800.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `registro_id` int(10) UNSIGNED NOT NULL,
  `tipo` enum('usuario','parqueadero') NOT NULL,
  `comentario` text NOT NULL,
  `calificacion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bSCmYtRrsITvPVnWI1L0IjBsrdhehIcceBdNlSHx', 33, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic0puM1FWanRCUU1OVDVWaFU3QU41YldFeDdLYVVsSVlNd2YyRnR6USI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9yZWdpc3Ryb3MiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozMzt9', 1690154136),
('ooVtXLAXGGY3VlJhkZwe58FzM8GwoubpWaKSj5pD', 33, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVVJkQ0ZJOU05UlVxYjhRUzJLbHprdThSQWRKaFZmeGJHbFFUYk9ONyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3Ryb3MiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozMzt9', 1690160033);

-- --------------------------------------------------------

--
-- Table structure for table `tarifas`
--

CREATE TABLE `tarifas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parqueadero_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_vehiculo_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `tiempo_inicio` time NOT NULL,
  `tiempo_fin` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tarifas`
--

INSERT INTO `tarifas` (`id`, `parqueadero_id`, `tipo_vehiculo_id`, `nombre`, `precio`, `tiempo_inicio`, `tiempo_fin`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'X Hora', 200.00, '00:00:00', '00:00:00', NULL, NULL),
(2, 1, 3, 'X Hora', 300.00, '00:00:00', '00:00:00', NULL, NULL),
(3, 1, 4, 'X Hora', 500.00, '00:00:00', '00:00:00', NULL, NULL),
(4, 1, 5, 'X Hora', 600.00, '00:00:00', '00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipos_vehiculos`
--

CREATE TABLE `tipos_vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipos_vehiculos`
--

INSERT INTO `tipos_vehiculos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Subcompacto', '2023-07-19 18:38:18', '2023-07-19 18:38:18'),
(2, 'Compacto', '2023-07-19 18:38:18', '2023-07-19 18:38:18'),
(3, 'Mediano', '2023-07-19 18:38:18', '2023-07-19 18:38:18'),
(4, 'Grande', '2023-07-19 18:38:18', '2023-07-19 18:38:18'),
(5, 'SUV', '2023-07-19 18:38:18', '2023-07-19 18:38:18'),
(6, 'Camioneta', '2023-07-19 18:38:18', '2023-07-19 18:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Garrick Zemlak', 'qvolkman@example.org', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'dxZJhVHwQN', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(2, 'Javonte Hamill', 'zgreenholt@example.net', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'qV6T1wjiXu', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(3, 'Mr. Clinton Shields', 'bogan.pearl@example.org', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'atlJlLivMR', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(4, 'Mr. Ezequiel Lindgren', 'kiara11@example.org', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'x6IQwkUGP4', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(5, 'Prof. Jacklyn O\'Hara DVM', 'alyson.towne@example.com', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'TT0vdtVEsL', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(6, 'Teagan Doyle', 'hartmann.erna@example.net', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'bjqZQQXe88', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(7, 'Ms. Jenifer Schmidt II', 'reinhold12@example.net', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '2W2jI9iHOD', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(8, 'Mercedes Cruickshank', 'halie47@example.com', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'cG4fXOZ3JH', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(9, 'Dr. Ryleigh Kemmer', 'brekke.genoveva@example.net', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'd7jSw3fnLj', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(10, 'Dr. Fatima Adams', 'sandy.simonis@example.net', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'dn3nHV6QRF', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(11, 'Test User', 'test@example.com', '2023-07-19 18:16:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'xJ8QTZMbv8', NULL, NULL, '2023-07-19 18:16:20', '2023-07-19 18:16:20'),
(12, 'Frederick Lehner', 'micaela.kuvalis@example.com', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'MK6wernCLj', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(13, 'Jacinthe Tromp', 'hyatt.meaghan@example.net', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'emRvhh4IkV', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(14, 'Keshawn Boyer', 'oberbrunner.liliane@example.com', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'pHpve6tJY6', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(15, 'Eli Thiel', 'kareem06@example.org', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'PRHnnBMpCe', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(16, 'Miss Dariana Weber', 'reynolds.cindy@example.com', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'bL4kktpVIN', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(17, 'Mrs. Valentine Nitzsche I', 'murl.wiegand@example.net', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'buhlBSijOh', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(18, 'Dell Hansen', 'prohaska.creola@example.com', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'S08NoAaFws', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(19, 'Nelson Marvin', 'mschmeler@example.net', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'NGDXbzQf7O', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(20, 'Durward Larkin', 'rusty42@example.net', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'PP4bcLS2Cz', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(21, 'Susie Beahan', 'mariane48@example.com', '2023-07-19 18:23:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '31tKzdX6hW', NULL, NULL, '2023-07-19 18:23:22', '2023-07-19 18:23:22'),
(23, 'Cornelius Gaylord', 'ljerde@example.com', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'BwqWOoQUc2', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(24, 'Adah Schiller', 'jbatz@example.org', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'QQqKBAWDig', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(25, 'Jody Breitenberg', 'dare.daphne@example.com', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'ywwXOCjPHz', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(26, 'Ms. Katlynn Harvey Sr.', 'alda.fay@example.com', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'S1ewFgBjci', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(27, 'Carlie Koch', 'sschneider@example.com', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'LWp5wXREh7', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(28, 'Albina Kilback', 'rstroman@example.com', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '44TwxnC5BE', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(29, 'Miss Kathryne Waters', 'ford47@example.org', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'HcAYfrofSv', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(30, 'Demarco Schneider', 'arlie.fritsch@example.org', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'WChlC3vjHq', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(31, 'Dr. Odell Turcotte', 'vmoen@example.org', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'gMzvMW3G3o', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(32, 'Elody Crona', 'goyette.frederic@example.com', '2023-07-19 18:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'cNrbWFTr8h', NULL, NULL, '2023-07-19 18:24:31', '2023-07-19 18:24:31'),
(33, 'Marcelo', 'mfcz@gmail.com', NULL, '$2y$10$B4mRhWq15r.XHh6WS0BQfu/rhVxR9Yt3sIBojuPGgOWNLBxyQsbYW', NULL, NULL, NULL, 'A6N6i5sO4Xmt8HGtumsYKtKwss5aAFz1nhVWjrEGzoubD9tBSTbbeK7dk1yl', NULL, NULL, '2023-07-19 23:07:15', '2023-07-19 23:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `users_parqueaderos`
--

CREATE TABLE `users_parqueaderos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `parqueadero_id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_parqueaderos`
--

INSERT INTO `users_parqueaderos` (`id`, `user_id`, `parqueadero_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Activo', NULL, NULL),
(2, 33, 2, 'Activo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `placa` varchar(20) NOT NULL,
  `tipo_vehiculo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `marca_id` bigint(20) UNSIGNED DEFAULT NULL,
  `modelo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `tipo_vehiculo_id`, `color_id`, `marca_id`, `modelo_id`, `created_at`, `updated_at`) VALUES
(1, 'ABC123', 1, 2, 3, 4, '2023-07-12 03:20:08', '2023-07-12 03:20:08'),
(2, 'DEF456', 5, 1, 5, 6, '2023-07-12 03:21:20', '2023-07-12 03:21:20'),
(3, 'GHI789', 1, 3, 3, 4, '2023-07-12 03:22:09', '2023-07-12 03:22:09'),
(4, 'JKL012', 3, 2, 5, 6, '2023-07-12 03:22:09', '2023-07-12 03:22:09'),
(5, 'MNO345', 2, 1, 3, 4, '2023-07-12 03:22:09', '2023-07-12 03:22:09'),
(21, 'hh345hh', NULL, NULL, NULL, NULL, '2023-07-24 03:42:01', '2023-07-24 03:42:01'),
(22, 'MI356DA', NULL, NULL, NULL, NULL, '2023-07-24 03:45:39', '2023-07-24 03:45:39'),
(23, 'LL400FF', NULL, NULL, NULL, NULL, '2023-07-24 03:53:52', '2023-07-24 03:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `vehiculos_users`
--

CREATE TABLE `vehiculos_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehiculos_users`
--

INSERT INTO `vehiculos_users` (`id`, `user_id`, `vehiculo_id`, `created_at`, `updated_at`) VALUES
(1, 33, 2, '2023-07-21 16:43:08', '2023-07-21 16:43:08'),
(2, 7, 4, '2023-07-21 16:43:08', '2023-07-21 16:43:08'),
(3, 7, 3, '2023-07-21 16:43:08', '2023-07-21 16:43:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ciudades_estado_id_foreign` (`estado_id`);

--
-- Indexes for table `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresas_ciudad_id_foreign` (`ciudad_id`);

--
-- Indexes for table `espacios_estacionamientos`
--
ALTER TABLE `espacios_estacionamientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `espacios_estacionamientos_parqueadero_id_foreign` (`parqueadero_id`),
  ADD KEY `espacios_estacionamientos_tipo_vehiculo_id_foreign` (`tipo_vehiculo_id`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estados_pais_id_foreign` (`pais_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informacion_usuarios`
--
ALTER TABLE `informacion_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informacion_usuarios_user_id_foreign` (`user_id`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membresias`
--
ALTER TABLE `membresias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `membresias_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modelos_marca_id_foreign` (`marca_id`);

--
-- Indexes for table `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parqueaderos`
--
ALTER TABLE `parqueaderos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parqueaderos_empresa_id_foreign` (`empresa_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registros_entradas_salidas`
--
ALTER TABLE `registros_entradas_salidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registros_entradas_salidas_vehiculo_id_foreign` (`vehiculo_id`),
  ADD KEY `registros_entradas_salidas_parqueadero_id_foreign` (`parqueadero_id`),
  ADD KEY `registros_entradas_salidas_espacio_estacionamiento_id_foreign` (`espacio_estacionamiento_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_registro_id_foreign` (`registro_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarifas_parqueadero_id_foreign` (`parqueadero_id`),
  ADD KEY `tarifas_tipo_vehiculo_id_foreign` (`tipo_vehiculo_id`);

--
-- Indexes for table `tipos_vehiculos`
--
ALTER TABLE `tipos_vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_parqueaderos`
--
ALTER TABLE `users_parqueaderos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_parqueaderos_user_id_foreign` (`user_id`),
  ADD KEY `users_parqueaderos_parqueadero_id_foreign` (`parqueadero_id`);

--
-- Indexes for table `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiculos_tipo_vehiculo_id_foreign` (`tipo_vehiculo_id`),
  ADD KEY `vehiculos_color_id_foreign` (`color_id`),
  ADD KEY `vehiculos_marca_id_foreign` (`marca_id`),
  ADD KEY `vehiculos_modelo_id_foreign` (`modelo_id`);

--
-- Indexes for table `vehiculos_users`
--
ALTER TABLE `vehiculos_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiculos_users_user_id_foreign` (`user_id`),
  ADD KEY `vehiculos_users_vehiculo_id_foreign` (`vehiculo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `colores`
--
ALTER TABLE `colores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `espacios_estacionamientos`
--
ALTER TABLE `espacios_estacionamientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informacion_usuarios`
--
ALTER TABLE `informacion_usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `membresias`
--
ALTER TABLE `membresias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paises`
--
ALTER TABLE `paises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `parqueaderos`
--
ALTER TABLE `parqueaderos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registros_entradas_salidas`
--
ALTER TABLE `registros_entradas_salidas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipos_vehiculos`
--
ALTER TABLE `tipos_vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users_parqueaderos`
--
ALTER TABLE `users_parqueaderos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vehiculos_users`
--
ALTER TABLE `vehiculos_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`);

--
-- Constraints for table `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ciudad_id_foreign` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`id`);

--
-- Constraints for table `espacios_estacionamientos`
--
ALTER TABLE `espacios_estacionamientos`
  ADD CONSTRAINT `espacios_estacionamientos_parqueadero_id_foreign` FOREIGN KEY (`parqueadero_id`) REFERENCES `parqueaderos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `espacios_estacionamientos_tipo_vehiculo_id_foreign` FOREIGN KEY (`tipo_vehiculo_id`) REFERENCES `tipos_vehiculos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `estados`
--
ALTER TABLE `estados`
  ADD CONSTRAINT `estados_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`);

--
-- Constraints for table `informacion_usuarios`
--
ALTER TABLE `informacion_usuarios`
  ADD CONSTRAINT `informacion_usuarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `membresias`
--
ALTER TABLE `membresias`
  ADD CONSTRAINT `membresias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `modelos_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`);

--
-- Constraints for table `parqueaderos`
--
ALTER TABLE `parqueaderos`
  ADD CONSTRAINT `parqueaderos_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`);

--
-- Constraints for table `registros_entradas_salidas`
--
ALTER TABLE `registros_entradas_salidas`
  ADD CONSTRAINT `registros_entradas_salidas_espacio_estacionamiento_id_foreign` FOREIGN KEY (`espacio_estacionamiento_id`) REFERENCES `espacios_estacionamientos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registros_entradas_salidas_parqueadero_id_foreign` FOREIGN KEY (`parqueadero_id`) REFERENCES `parqueaderos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registros_entradas_salidas_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_registro_id_foreign` FOREIGN KEY (`registro_id`) REFERENCES `registros_entradas_salidas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tarifas`
--
ALTER TABLE `tarifas`
  ADD CONSTRAINT `tarifas_parqueadero_id_foreign` FOREIGN KEY (`parqueadero_id`) REFERENCES `parqueaderos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tarifas_tipo_vehiculo_id_foreign` FOREIGN KEY (`tipo_vehiculo_id`) REFERENCES `tipos_vehiculos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_parqueaderos`
--
ALTER TABLE `users_parqueaderos`
  ADD CONSTRAINT `users_parqueaderos_parqueadero_id_foreign` FOREIGN KEY (`parqueadero_id`) REFERENCES `parqueaderos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_parqueaderos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colores` (`id`),
  ADD CONSTRAINT `vehiculos_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`),
  ADD CONSTRAINT `vehiculos_modelo_id_foreign` FOREIGN KEY (`modelo_id`) REFERENCES `modelos` (`id`),
  ADD CONSTRAINT `vehiculos_tipo_vehiculo_id_foreign` FOREIGN KEY (`tipo_vehiculo_id`) REFERENCES `tipos_vehiculos` (`id`);

--
-- Constraints for table `vehiculos_users`
--
ALTER TABLE `vehiculos_users`
  ADD CONSTRAINT `vehiculos_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `vehiculos_users_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
