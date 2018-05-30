-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-05-2018 a las 11:25:01
-- Versión del servidor: 5.7.22
-- Versión de PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `speed-fix-new`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_clientes`
--

CREATE TABLE `categoria_clientes` (
  `id_Categoria_Cliente` int(10) NOT NULL,
  `Alta_Categoria_Cliente` date NOT NULL,
  `Nombre_Categoria_Cliente` varchar(50) NOT NULL,
  `Descripcion_Categoria_Cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_clientes`
--

INSERT INTO `categoria_clientes` (`id_Categoria_Cliente`, `Alta_Categoria_Cliente`, `Nombre_Categoria_Cliente`, `Descripcion_Categoria_Cliente`) VALUES
(1, '2018-03-16', 'ADMINISTRADORAS', 'EMPRESAS DE ADMINISTRACION DE INMUEBLES'),
(2, '2018-03-16', 'AGENTES DE VENTAS', 'AGENTES DE VENTAS Y FRELANCERS'),
(3, '2018-03-16', 'ASEGURADORAS', 'ASEGURADORAS, AGENCIAS DE SEGUROS, CONTRATISTAS'),
(4, '2018-03-16', 'CENTROS EDUCATIVOS', 'ESCUELAS, UNIVERSIDADES Y CENTROS EDUCATIVOS EN GE'),
(5, '2018-03-16', 'CLUBS', 'CLUBS PRIVADOS, CLUBS DEPORTIVOS Y CENTROS RECREAT'),
(6, '2018-03-16', 'COMPETENCIA', 'APOYO A COLEGAS, MANUFACTURA YEN GENERAL TODA LA C'),
(7, '2018-03-16', 'CONDOMINIOS', 'COTOS PRIVADOS, VECINDADES, COLONIAS, TORRES DE DE'),
(8, '2018-03-16', 'CONSTRUCTORAS', 'CONSTRUCTORAS, INMOBILIARIAS Y DESARROLLADORAS DE '),
(9, '2018-03-16', 'EMPRESAS Y NEGOCIOS', 'EMPRESAS DE CUALQUIER RAMO Y  TAMA?O QUE REQUIERAN'),
(10, '2018-03-16', 'HOTELES', 'HOTELES, HOSTALES Y CENTROS VACACIONALES'),
(11, '2018-03-16', 'PARQUES INDUSTRIALES', 'PARQUES INDUSTRIALES E INDUSTRIA EN GENERAL'),
(12, '2018-03-16', 'PARTICULARES', 'TODA PERSONA QUE REQUIERA DE NUESTROS SERVICIOS'),
(13, '2018-03-16', 'PLAZAS COMERCIALES', 'PLAZAS COMERCIALES, MERCADOS Y CENTROS DE COMERCIO'),
(14, '2018-03-16', 'SEGURIDAD PRIVADA', 'EMPRESAS DE SEGURIDAD PRIVADA QUE REQUIERAN DE NUE'),
(15, '2018-03-16', 'OTROS', 'CUALQUIER OTRO CLIENTE  QUE NO ENCAJE EN LAS DEMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_personal`
--

CREATE TABLE `categoria_personal` (
  `id_Categoria_Personal` int(10) NOT NULL,
  `Alta_Categoria_Personal` date NOT NULL,
  `Nombre_Categoria_Personal` varchar(50) NOT NULL,
  `Descripcion_Categoria_Personal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_personal`
--

INSERT INTO `categoria_personal` (`id_Categoria_Personal`, `Alta_Categoria_Personal`, `Nombre_Categoria_Personal`, `Descripcion_Categoria_Personal`) VALUES
(1, '2018-03-17', 'ADMINISTRATIVO', 'ACCESO A SISTEMA ADMINISTRATIVO'),
(2, '2018-03-17', 'OPERATIVO', 'ACCESOS A LA PARTE OPERATIVA '),
(3, '2018-03-17', 'SUPERVISOR', 'SUPERVISOR DE PERSONAL OPERATIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_productos`
--

CREATE TABLE `categoria_productos` (
  `id_Categoria_Producto` int(10) NOT NULL,
  `Alta_Categoria_Producto` date NOT NULL,
  `Nombre_Categoria_Producto` varchar(50) NOT NULL,
  `Descripcion_Categoria_Producto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_productos`
--

INSERT INTO `categoria_productos` (`id_Categoria_Producto`, `Alta_Categoria_Producto`, `Nombre_Categoria_Producto`, `Descripcion_Categoria_Producto`) VALUES
(1, '2018-03-17', 'ALARMAS', 'ALARMAS PARA EL HOGAR Y COMERCIO'),
(2, '2018-03-17', 'CCTV', 'SISTEMAS DE VIDEOVIGILANCIA RESIDENCIAL Y COMERCIA'),
(3, '2018-03-17', 'CERCAS ELECTRIFICADAS', 'CERCO ELECTRICO DOMESTICO Y RESIDENCIAL E INDUSTRI'),
(4, '2018-03-17', 'CONTROL DE ACCESOS', 'SISTEMAS DE CONTROL DE ACCESOS, BARRERAS VEHICULAR'),
(5, '2018-03-17', 'PORTEROS E INTERFONES ', 'SISTEMAS DE INTERCOMUNICACION, PORTEROS Y VIDEO PO'),
(6, '2018-03-17', 'PUERTAS AUTOMATICAS', 'PUERTAS AUTOMATICAS, PISTONES MECANICOS, HIDRAULIC'),
(7, '2018-03-17', 'REDES', 'SISTEMAS DE SERVICIO DE VIDEO, DATOS Y VOZ POR IP'),
(8, '2018-03-17', 'RONDAS', 'DISPOSITIVO Y SISTEMAS DE RONDAS Y VIGILANCIA'),
(9, '2018-03-17', 'HERRERIA', 'ESTRUCTURAS METALICAS, PORTONES, PUERTAS PEATONALE'),
(10, '2018-03-17', 'EQUIPO DE COMPUTO', 'EQUIPO DE COMPUTO,  REFACCIONES Y ACCESORIOS '),
(11, '2018-03-17', 'DUCTERIA', 'DUCTERIA PARA CABLEADO DE CUALQUIER TIPO'),
(12, '2018-03-17', 'SEÑALETICA', 'SEÑALETICA PARA CALLES, CONDOMINIOS PRIVADOS, COTO'),
(13, '2018-03-17', 'CABLEADO', 'CABLEADO PARA SISTEMAS DIVERSOS COMO EL CONTROL DE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_proveedores`
--

CREATE TABLE `categoria_proveedores` (
  `id_Categoria_Proveedor` int(10) NOT NULL,
  `Alta_Categoria_Proveedor` date NOT NULL,
  `Nombre_Categoria_Proveedor` varchar(50) NOT NULL,
  `Descripcion_Categoria_Proveedor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_proveedores`
--

INSERT INTO `categoria_proveedores` (`id_Categoria_Proveedor`, `Alta_Categoria_Proveedor`, `Nombre_Categoria_Proveedor`, `Descripcion_Categoria_Proveedor`) VALUES
(1, '2018-03-17', 'ALARMAS', 'PANELES DE ALARMA SENSORES  SIRENAS  Y ACCESORIOS'),
(2, '2018-03-17', 'CCTV', 'DVR  NVR  CAMARAS  CAMARAS IP  CABLES  FUENTES  TRANSCEPTORES'),
(3, '2018-03-17', 'CERCAS ELECTRIFICADAS', 'PANELES  AISLADORES  CABLES PARA CERCO ELECTRICO'),
(4, '2018-03-17', 'CONTROL DE ACCESOS', 'PANELES DE CONTROL DE ACCESO  BARRERAS VEHICULARES  TORNIQUETES  PEATONALES  PRODUCTOS DE RF'),
(5, '2018-03-17', 'PORTEROS E INTERFONES ', 'SISTEMAS DE INTERCOMUNICACION  PORTEROS Y VIDEO PORTEROS'),
(6, '2018-03-17', 'PUERTAS AUTOMATICAS', 'PUERTAS AUTOMATICAS  PISTONES MECANICOS  HIDRAULICOS CORREDIZOS  DE CREMALLERA'),
(7, '2018-03-17', 'REDES', 'CABLES  SWITCHES  ANTENAS  ACCESS POINT'),
(8, '2018-03-17', 'RONDAS', 'RONDAS PARA VIGILANTES'),
(9, '2018-03-17', 'HERRERIA', 'POSTES  BASES  ESTRUCTURAS METALICAS'),
(10, '2018-03-17', 'EQUIPO DE COMPUTO', 'EQUIPO DE COMPUTO Y ACCESORIOS'),
(11, '2018-03-17', 'DUCTERIA', 'CABLES ELECTRICOS  DUCTOS  POLIDUCTOS PANDUIT  CONDUIT  MATERIAL ELECTRICO Y ACCESORIOS'),
(12, '2018-03-17', 'SEÑALETICA', 'SEÑALETICA  ESPEJOS COCAVOS  PINTURA DE TRAFICO  BOYAS  TOPES'),
(13, '2018-03-17', 'CABLEADO', 'CABLES  COAXIAL  BAJO VOLTAGE  UTP  ELECTRICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_servicios`
--

CREATE TABLE `categoria_servicios` (
  `id_Categoria_Servicio` int(10) NOT NULL,
  `Alta_Categoria_Servicio` date NOT NULL,
  `Nombre_Categoria_Servicio` varchar(50) NOT NULL,
  `Descripcion_Categoria_Servicio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_servicios`
--

INSERT INTO `categoria_servicios` (`id_Categoria_Servicio`, `Alta_Categoria_Servicio`, `Nombre_Categoria_Servicio`, `Descripcion_Categoria_Servicio`) VALUES
(1, '2018-03-17', 'ALARMAS', 'SERVICIO Y MANTENIMIENTO DE ALARMAS '),
(2, '2018-03-17', 'CCTV', 'SERVICIO Y MANTENIMIENTO DE SISTEMAS DE VIDEOVIGILANCIA'),
(3, '2018-03-17', 'CERCAS ELECTRIFICADAS', 'SERVICIO Y MANTENIMIENTO DE CERCA ELECTRICA'),
(4, '2018-03-17', 'CONTROL DE ACCESOS', 'SERVICIO Y MANTENIMIENTO DE SISTEMAS DE CONTROL DE ACCESOS'),
(5, '2018-03-17', 'PORTEROS E INTERFONES ', 'SERVICIO Y MANTENIMIENTO DE SISTEMAS DE INTERCOMUNICACION, PORTEROS Y VIDEO PORTEROS'),
(6, '2018-03-17', 'PUERTAS AUTOMATICAS', 'SERVICIO Y MANTENIMIENTO DE PUERTAS AUTOMATICAS'),
(7, '2018-03-17', 'REDES', 'SERVICIO Y MANTENIMIENTO DE SISTEMAS DE SERVICIO DE VIDEO, DATOS Y VOZ POR IP'),
(8, '2018-03-17', 'RONDAS', 'SERVICIO Y MANTENIMIENTO DE DISPOSITIVOS Y SISTEMAS DE RONDAS Y VIGILANCIA'),
(9, '2018-03-17', 'HERRERIA', 'SERVICIO Y MANTENIMIENTO DE ESTRUCTURAS METALICAS, PORTONES, PUERTAS PEATONALES Y HERRERIA'),
(10, '2018-03-17', 'EQUIPO DE COMPUTO', 'SERVICIO Y MANTENIMIENTO DE EQUIPO DE COMPUTO'),
(11, '2018-03-17', 'DUCTERIA', 'SERVICIO Y MANTENIMIENTO DE DUCTERIA PARA CABLEADO DE CUALQUIER TIPO'),
(12, '2018-03-17', 'SEÑALETICA', 'SERVICIO Y MANTENIMIENTO DE SEÑALETICA PARA CALLES, CONDOMINIOS PRIVADOS, COTOS, FRACCIONAMIENTO ETC'),
(13, '2018-03-17', 'CABLEADO', 'SERVICIO Y MANTENIMIENTO DE CABLEADO PARA SISTEMAS DIVERSOS COMO EL CONTROL DE ACCESO, CCTV ETC.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_Cliente` int(10) NOT NULL,
  `Alta_Cliente` date NOT NULL,
  `Nombre_Cliente` varchar(50) NOT NULL,
  `Categoria_Cliente` varchar(50) DEFAULT NULL,
  `Administracion_Cliente` varchar(50) DEFAULT NULL,
  `Zona_Cliente` varchar(25) NOT NULL,
  `Contacto_Principal_Cliente` varchar(50) NOT NULL,
  `Contacto_Secundario_Cliente` varchar(50) DEFAULT NULL,
  `email_Pricipal_Cliente` varchar(50) NOT NULL,
  `email_Secundario_Cliente` varchar(50) DEFAULT NULL,
  `web_Cliente` varchar(50) DEFAULT NULL,
  `TeamViewer_id_Principal` int(10) DEFAULT NULL,
  `TeamViewer_id_Secundario` int(10) DEFAULT NULL,
  `Telefono_Principal_Cliente` int(20) NOT NULL,
  `Telefono_Secundario_Cliente` int(20) DEFAULT NULL,
  `Telefono_Caseta_Cliente` int(20) DEFAULT NULL,
  `Telefono_Movil_Cliente` int(20) DEFAULT NULL,
  `Telefono_Otro` int(20) DEFAULT NULL,
  `Logo_Cliente` varchar(50) DEFAULT NULL,
  `Razon_Social` varchar(150) NOT NULL,
  `Calle_Cliente` varchar(50) NOT NULL,
  `Numero_Cliente` int(10) NOT NULL,
  `Interior_Cliente` varchar(10) DEFAULT NULL,
  `Colonia_Cliente` varchar(50) NOT NULL,
  `Municipio_Cliente` varchar(50) NOT NULL,
  `Estado_Cliente` varchar(50) DEFAULT NULL,
  `Codigo_Postal_Cliente` varchar(10) NOT NULL,
  `Pais_Cliente` varchar(50) DEFAULT NULL,
  `Ubicacion_Cliente` varchar(25) DEFAULT NULL,
  `Banco_Cliente` varchar(25) DEFAULT NULL,
  `Cuenta_Cliente` int(25) DEFAULT NULL,
  `Rfc_Cliente` varchar(25) NOT NULL,
  `Comision_Cliente` decimal(4,2) DEFAULT NULL,
  `Notas_Cliente` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_Personal` int(10) NOT NULL,
  `Alta_Personal` date NOT NULL,
  `Nombre_Personal` varchar(50) NOT NULL,
  `Categoria_Personal` varchar(50) NOT NULL,
  `Zona` varchar(50) DEFAULT NULL,
  `Contacto_Principal` varchar(50) NOT NULL,
  `Contacto_Secundario` varchar(50) DEFAULT NULL,
  `email_Laboral` varchar(50) DEFAULT NULL,
  `email_Personal` varchar(50) DEFAULT NULL,
  `Telefono_Laboral` int(20) DEFAULT NULL,
  `Telefono_Emergencia` int(20) NOT NULL,
  `Telefono_Movil` int(20) NOT NULL,
  `Calle` varchar(50) NOT NULL,
  `Numero` int(10) NOT NULL,
  `Interior` varchar(10) DEFAULT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `Codigo_Postal` varchar(10) NOT NULL,
  `Pais` varchar(50) DEFAULT NULL,
  `Ubicacion` varchar(25) DEFAULT NULL,
  `Banco` varchar(25) DEFAULT NULL,
  `Cuenta` int(25) DEFAULT NULL,
  `Rfc` varchar(25) NOT NULL,
  `Nss` int(25) DEFAULT NULL,
  `Curp` varchar(25) NOT NULL,
  `Fotografia` varchar(50) DEFAULT NULL,
  `Firma` varchar(50) DEFAULT NULL,
  `Comisiones` decimal(4,2) DEFAULT NULL,
  `Notas` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_Producto` int(10) NOT NULL,
  `Alta_Producto` date NOT NULL,
  `Sku` int(10) NOT NULL,
  `Codigo_Producto` varchar(25) NOT NULL,
  `Codigo_fiscal_Producto` varchar(25) NOT NULL,
  `Categoria_Producto` varchar(50) NOT NULL,
  `Proveedor_Producto` varchar(50) NOT NULL,
  `Nombre_Producto` varchar(50) NOT NULL,
  `Descripcion_Producto` varchar(150) NOT NULL,
  `Codigo_Unidad_Producto` varchar(25) NOT NULL,
  `Codigo_Unidad_Fiscal_Producto` varchar(25) NOT NULL,
  `Imagen_Producto` varchar(50) DEFAULT NULL,
  `Precio_Lista_Producto` decimal(9,2) DEFAULT NULL,
  `Utilidad_Producto` decimal(9,2) DEFAULT NULL,
  `Impuestos_Producto` decimal(9,2) DEFAULT NULL,
  `Precio_Venta_Producto` decimal(9,2) DEFAULT NULL,
  `Notas_Producto` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_Proveedor` int(10) NOT NULL,
  `Alta_Proveedor` date NOT NULL,
  `Nombre_Proveedor` varchar(50) NOT NULL,
  `Categoria_Proveedor` varchar(50) NOT NULL,
  `Contacto_principal` varchar(50) NOT NULL,
  `Contacto_Secundario` varchar(50) DEFAULT NULL,
  `email_Principal` varchar(50) NOT NULL,
  `email_Secundario` varchar(50) NOT NULL,
  `web` varchar(50) DEFAULT NULL,
  `Telefono_Principal` int(20) NOT NULL,
  `Telefono_Secundario` int(20) DEFAULT NULL,
  `Extension_Vendedor` int(5) DEFAULT NULL,
  `Extension_Soporte` int(5) DEFAULT NULL,
  `Telefono_Movil` int(20) DEFAULT NULL,
  `Razon_Social` varchar(150) NOT NULL,
  `Calle` varchar(50) NOT NULL,
  `Numero` int(10) NOT NULL,
  `Interior` varchar(10) DEFAULT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `Codigo_Postal` varchar(10) NOT NULL,
  `Pais` varchar(50) DEFAULT NULL,
  `Ubicacion` varchar(25) DEFAULT NULL,
  `Dias_de_Credito` decimal(9,2) DEFAULT NULL,
  `Monto_de_Credito` decimal(9,2) DEFAULT NULL,
  `Banco` varchar(25) DEFAULT NULL,
  `Cuenta` int(25) DEFAULT NULL,
  `Rfc` varchar(25) NOT NULL,
  `Descuento` decimal(4,2) DEFAULT NULL,
  `Notas` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_Servicio` int(10) NOT NULL,
  `Alta_Servicio` date NOT NULL,
  `Sku_Servicio` int(10) DEFAULT NULL,
  `Codigo_Servicio` varchar(25) NOT NULL,
  `Codigo_Fiscal_Servicio` varchar(25) NOT NULL,
  `Categoria_Servicio` varchar(50) NOT NULL,
  `Proveedor_Servicio` varchar(50) NOT NULL,
  `Nombre_Servicio` varchar(50) NOT NULL,
  `Descripcion_Servicio` varchar(150) NOT NULL,
  `Codigo_Unidad_Servicio` varchar(25) NOT NULL,
  `Codigo_Unidad_Fiscal_Servicio` varchar(25) NOT NULL,
  `Imagen_Servicio` varchar(50) DEFAULT NULL,
  `Precio_Lista_Servicio` decimal(9,2) DEFAULT NULL,
  `Utilidad_Servicio` decimal(9,2) DEFAULT NULL,
  `Impuestos_Servicio` decimal(9,2) DEFAULT NULL,
  `Precio_Venta_Servicio` decimal(9,2) DEFAULT NULL,
  `Notas_Servicio` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tino Navarro', 'tino.navarrod@gmail.com', '$2y$10$i2bJdoHuAPw5GxNaIKYqLuyBjGpHKIOcZkthhjX4sFQvsaR907kkS', '5HgqGAZuL5M3F5SgBCa9eBVqXcSbLUg08mDcxUWh4J4huoLzm0GQeYobl0e9', '2018-05-29 00:33:31', '2018-05-29 00:33:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id_Zona` int(11) NOT NULL,
  `Alta_Zona` date NOT NULL,
  `Nombre_Zona` varchar(50) NOT NULL,
  `Descripcion_Zona` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id_Zona`, `Alta_Zona`, `Nombre_Zona`, `Descripcion_Zona`) VALUES
(1, '2018-03-17', 'GUADALAJARA', 'GUADALAJARA'),
(2, '2018-03-17', 'TLAJOMULCO', 'TLAJOMULCO DE ZUÑIGA'),
(3, '2018-03-17', 'TLAQUEPAQUE', 'SAN PEDRO TLAQUEPAQUE'),
(4, '2018-03-17', 'TONALA', 'TONALA'),
(5, '2018-03-17', 'ZAPOPAN', 'ZAPOPAN'),
(6, '2018-03-17', 'FORANEO', 'FORANEO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_clientes`
--
ALTER TABLE `categoria_clientes`
  ADD PRIMARY KEY (`id_Categoria_Cliente`);

--
-- Indices de la tabla `categoria_personal`
--
ALTER TABLE `categoria_personal`
  ADD PRIMARY KEY (`id_Categoria_Personal`);

--
-- Indices de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  ADD PRIMARY KEY (`id_Categoria_Producto`);

--
-- Indices de la tabla `categoria_proveedores`
--
ALTER TABLE `categoria_proveedores`
  ADD PRIMARY KEY (`id_Categoria_Proveedor`);

--
-- Indices de la tabla `categoria_servicios`
--
ALTER TABLE `categoria_servicios`
  ADD PRIMARY KEY (`id_Categoria_Servicio`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_Personal`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_Producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_Proveedor`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_Servicio`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id_Zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_clientes`
--
ALTER TABLE `categoria_clientes`
  MODIFY `id_Categoria_Cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `categoria_personal`
--
ALTER TABLE `categoria_personal`
  MODIFY `id_Categoria_Personal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  MODIFY `id_Categoria_Producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `categoria_proveedores`
--
ALTER TABLE `categoria_proveedores`
  MODIFY `id_Categoria_Proveedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `categoria_servicios`
--
ALTER TABLE `categoria_servicios`
  MODIFY `id_Categoria_Servicio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_Cliente` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_Personal` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_Producto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_Proveedor` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_Servicio` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id_Zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
