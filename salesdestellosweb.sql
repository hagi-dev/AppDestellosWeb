-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2021 a las 15:58:12
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salesdestellosweb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Customer` (`opcion` VARCHAR(20), `id` INT, `dni` CHAR(9), `name1` VARCHAR(50), `lastName` VARCHAR(50), `sex` CHAR(2), `dateOfBirth` DATE)  BEGIN
	CASE 
		WHEN opcion = 'insert' THEN #inserta            
			INSERT INTO customer(CUS_dni, CUS_name, CUS_lastName, CUS_sex, CUS_dateOfBirth, estado) values (dni, name1, lastName, sex, dateOfBirth,1);
        when opcion = 'update-general' then
			UPDATE customer set CUS_dni= dni, CUS_name=name1, CUS_lastName = lastName, CUS_sex= sex,  CUS_dateOfBirth= 	dateOfBirth where CUS_id= id;
		when opcion=  'update-partes' then 
			UPDATE customer set CUS_dni=dni, CUS_sex=sex, CUS_dateOfBirth= dateOfBirth where CUS_id=id;
		when opcion = 'delete' then 
			UPDATE customer set estado=0 where CUS_id=id;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listarMenu` (`opcion` VARCHAR(20), `id` INT, `categoria` INT)  BEGIN
    CASE 
		WHEN opcion = 'general' THEN          
			SELECT * FROM menu;
		WHEN opcion = 'id' then
			SELECT * FROM menu WHERE MEN_id=id;
        when opcion = 'categoria' then 
			SELECT * FROM menu WHERE MEN_id=categoria;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listarOrderMenu` (`opcion` VARCHAR(20), `idOrder` INT)  BEGIN
    CASE 
		WHEN opcion = 'general' THEN          
			SELECT * FROM orders_menu;
		WHEN opcion = 'id' then
			SELECT * FROM orders_menu WHERE PED_id=idOrder;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_menu` (`opcion` VARCHAR(20), `id` INT, `name1` VARCHAR(100), `description1` VARCHAR(200), `price` DECIMAL(5,2), `stock` DECIMAL(7,2), `url` VARCHAR(250), `idcategoria` INT)  BEGIN
    CASE 
		WHEN opcion = 'insert' THEN          
			INSERT INTO menu(MEN_name, MEN_description, MEN_price, MEN_stock, estado, MEN_urlimg,CAT_id) values (name1,description1,price,stock,1,url,idcategoria);
		WHEN opcion = 'update-general' then
			UPDATE menu set MEN_name=name1,  MEN_description=description1,  MEN_price=price, MEN_stock= stock where MEN_id= id;
        when opcion = 'delete' then 
			UPDATE menu set estado=0 where MEN_id=id;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_orders` (`opcion` VARCHAR(20), `id` INT, `orderDate` DATETIME, `idcustomer` INT)  BEGIN
	CASE 
		WHEN opcion = 'insert' THEN #inserta            
			INSERT INTO orders( PED_orderDate, CUS_id,estado) values (orderDate, idcustomer,1);
		when opcion = 'delete' then 
			UPDATE orders set estado=0 where PED_id=id;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_orders_menu` (`opcion` VARCHAR(20), `idpedido` INT, `idmenu` INT, `amount` DECIMAL(5,2), `importe` DECIMAL(7,2))  BEGIN
	CASE 
		WHEN opcion = 'insert' THEN #inserta            
			INSERT INTO orders_menu(PED_id, MEN_id, ORM_amount, estado, ORM_importe) values (idpedido,idmenu,amount,1,importe);
		when opcion = 'update-general' then
			UPDATE orders_menu set ORM_amount=amount, ORM_importe=importe where MEN_id= id ;
        when opcion = 'delete' then 
			UPDATE orders_menu set estado=0 where MEN_id=idmenu AND PED_id=idpedido;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_payment` (`opcion` VARCHAR(20), `idtipopago` INT, `idpedido` INT, `paymentDate` DATETIME, `importe` DECIMAL(5,2), `importepagado` DECIMAL(5,2))  BEGIN
	CASE 
		WHEN opcion = 'insert' THEN #inserta            
			INSERT INTO payment(PED_id, TYP_id, PAY_paymentDate, PAY_importe, importe_pagado) values (idpedido, idtipopago, paymentDate,importe, importepagado);
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_payment_type` (`opcion` VARCHAR(20), `id` INT, `tipo` VARCHAR(50), `description1` VARCHAR(100))  BEGIN
	CASE 
		WHEN opcion = 'insert' THEN #inserta            
			INSERT INTO payment_type (TYP_type, TYP_description, estado) values (tipo,description1,1 );
		when opcion = 'update-general' then
			UPDATE payment_type set TYP_type= tipo, TYP_description=description1 where TYP_id= id ;
        when opcion = 'delete' then 
			UPDATE payment_type set estado=0 where TYP_id= id;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_phone` (`opcion` VARCHAR(20), `id` INT, `numbers` CHAR(9), `idcustomer` INT)  BEGIN
	CASE 
		WHEN opcion = 'insert' THEN #inserta            
			INSERT INTO phone(PHO_number,CUS_id,estado) values (numbers,idcustomer,1);
        when opcion = 'update-general' then
			UPDATE phone set PHO_number=numbers where PHO_id= id;
		when opcion = 'delete' then 
			UPDATE phone set estado=0 where PHO_id=id;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_shipping` (`opcion` VARCHAR(20), `id` INT, `idpedido` INT, `envioDate` DATETIME, `entregaDate` DATETIME)  BEGIN
	CASE 
		WHEN opcion = 'insert' THEN #inserta            
			INSERT INTO shipping(PED_id, SHI_shippingDate, SHI_deliveryDate, estado) values (idpedido, envioDate,entregaDate,1);
		when opcion = 'update-general' then
			UPDATE shipping set SHI_delivery= entregaDate where SHI_id= id ;
        when opcion = 'delete' then 
			UPDATE shipping set estado=0 where SHI_id= id;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_streetaddress` (`opcion` VARCHAR(20), `id` INT, `department` VARCHAR(100), `province` VARCHAR(100), `district` VARCHAR(100), `streetaddress` VARCHAR(100), `idcustomer` INT)  BEGIN
	CASE 
		WHEN opcion = 'insert' THEN #inserta            
			INSERT INTO streetaddress(STA_department, STA_province, STA_district, STA_streetaddress,CUS_id,estado) values (department, province, district, streetaddress, idcustomer,1);
        when opcion = 'update-general' then
			UPDATE streetaddress set STA_department=department,  STA_province=province,  STA_district=district, STA_streetAddress= streetaddress where STA_id= id;
		when opcion = 'delete' then 
			UPDATE streetaddress set estado=0 where STA_id=id;
    END CASE;
END$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `sp_calcular_importeTotal_pedido` (`idpedido` INT) RETURNS DECIMAL(7,2) BEGIN
	DECLARE importe decimal(7,2);
    DECLARE suma decimal(7,2);
    DECLARE registros int;
    DECLARE i int;
	DECLARE sumarpedido CURSOR FOR SELECT ORM_importe from orders_menu where PED_id=idpedido and estado=1;
    set suma=0;
    set i=1;
    set registros= 0;
    select count(*) into registros from orders_menu where  PED_id=idpedido and estado=1;
    OPEN sumarpedido;
    while i<=registros do
		fetch next from sumarpedido into importe; 
        set suma = suma+importe;
        set i= i+1;
	end while;
    close sumarpedido;
    return suma;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `CAT_id` int(11) NOT NULL,
  `CAT_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`CAT_id`, `CAT_name`) VALUES
(1, 'pollos y parrillas'),
(2, 'anticuchos'),
(3, 'combos'),
(4, 'extras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE `customer` (
  `CUS_id` int(11) NOT NULL,
  `CUS_dni` char(9) DEFAULT NULL,
  `CUS_name` varchar(50) NOT NULL,
  `CUS_lastName` varchar(50) NOT NULL,
  `CUS_sex` char(2) DEFAULT NULL,
  `CUS_dateOfBirth` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`CUS_id`, `CUS_dni`, `CUS_name`, `CUS_lastName`, `CUS_sex`, `CUS_dateOfBirth`, `estado`) VALUES
(1, '12345678', 'juan', 'torres', 'M', '0000-00-00', NULL),
(2, '12345678', 'juan', 'torres', 'M', '2021-02-11', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `MEN_id` int(11) NOT NULL,
  `MEN_name` varchar(50) DEFAULT NULL,
  `MEN_description` varchar(200) DEFAULT NULL,
  `MEN_price` decimal(5,2) DEFAULT NULL,
  `MEN_stock` decimal(7,2) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `MEN_urlimg` varchar(250) DEFAULT NULL,
  `valoracion` int(10) DEFAULT NULL,
  `CAT_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`MEN_id`, `MEN_name`, `MEN_description`, `MEN_price`, `MEN_stock`, `estado`, `MEN_urlimg`, `valoracion`, `CAT_id`) VALUES
(1, 'pollo ala brasa ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 2),
(2, 'pollo ala plancha ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 1),
(3, 'pollo ala mani ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 1),
(4, 'pollo ala cacerola ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 1),
(5, 'anticuchos de pollo', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 2),
(6, 'anticuchos de bofe ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 2),
(7, 'anticucho combinado ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 2),
(8, 'mostrito familiar ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 3),
(9, 'mezca de parrilla y anticuchos ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 3),
(10, 'combo chifero ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 3),
(11, 'combo anticuchero', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 3),
(12, 'inka ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 4),
(13, 'papas fritas ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 4),
(14, 'ensalada rusa ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 4),
(15, 'ensalada de lechuga ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 4),
(16, 'jugos frozen ', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 4),
(17, 'antichucho ala pobre', '*contiene....<br>+Papa fritas<br>+Ají', '25.00', '30.00', 1, 'https://irp-cdn.multiscreensite.com/8fab2f14/MOBILE/jpg/2299267-banqueton_2-45c48.jpg', NULL, 2),
(18, 'pollo al cilindro', '*contiene....<br>+Papa sancochada<br>+Ají', '15.00', '30.00', 1, 'https://cdn.cuponidad.pe/images/Deals/buenasc07.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `PED_id` int(11) NOT NULL,
  `PED_orderDate` date DEFAULT NULL,
  `CUS_id` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders_menu`
--

CREATE TABLE `orders_menu` (
  `PED_id` int(11) DEFAULT NULL,
  `MEN_id` int(11) DEFAULT NULL,
  `ORM_amount` decimal(5,2) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `ORM_importe` decimal(7,2) DEFAULT NULL,
  `ORM_sales_price` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE `payment` (
  `PED_id` int(11) DEFAULT NULL,
  `TYP_id` int(11) DEFAULT NULL,
  `PAY_paymentDate` datetime DEFAULT NULL,
  `PAY_importe` decimal(10,2) DEFAULT NULL,
  `importe_pagado` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_type`
--

CREATE TABLE `payment_type` (
  `TYP_id` int(11) NOT NULL,
  `TYP_type` varchar(50) DEFAULT NULL,
  `TYP_description` varchar(50) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phone`
--

CREATE TABLE `phone` (
  `PHO_id` int(11) NOT NULL,
  `PHO_number` char(10) DEFAULT NULL,
  `CUS_id` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `phone`
--

INSERT INTO `phone` (`PHO_id`, `PHO_number`, `CUS_id`, `estado`) VALUES
(1, '988888888', 2, 0),
(2, '999999999', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shipping`
--

CREATE TABLE `shipping` (
  `SHI_id` int(11) NOT NULL,
  `PED_id` int(11) DEFAULT NULL,
  `SHI_shippingDate` datetime DEFAULT NULL,
  `SHI_deliveryDate` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `streetaddress`
--

CREATE TABLE `streetaddress` (
  `STA_id` int(11) NOT NULL,
  `STA_department` varchar(50) DEFAULT NULL,
  `STA_province` varchar(50) DEFAULT NULL,
  `STA_district` varchar(50) DEFAULT NULL,
  `STA_streetAddress` varchar(50) DEFAULT NULL,
  `CUS_id` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `CUS_id` int(11) NOT NULL,
  `USE_user` varchar(50) DEFAULT NULL,
  `USE_password` varchar(80) DEFAULT NULL,
  `USE_email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CAT_id`);

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUS_id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MEN_id`),
  ADD KEY `fk_menu_category` (`CAT_id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`PED_id`),
  ADD KEY `FK_orders_customer` (`CUS_id`);

--
-- Indices de la tabla `orders_menu`
--
ALTER TABLE `orders_menu`
  ADD KEY `FK_orders_menu_orders` (`PED_id`),
  ADD KEY `FK_orders_menu_menu` (`MEN_id`);

--
-- Indices de la tabla `payment`
--
ALTER TABLE `payment`
  ADD KEY `PED_id` (`PED_id`),
  ADD KEY `TYP_id` (`TYP_id`);

--
-- Indices de la tabla `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`TYP_id`);

--
-- Indices de la tabla `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`PHO_id`),
  ADD KEY `FK_phone_customer` (`CUS_id`);

--
-- Indices de la tabla `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`SHI_id`),
  ADD KEY `FK_shipping_orders` (`PED_id`);

--
-- Indices de la tabla `streetaddress`
--
ALTER TABLE `streetaddress`
  ADD PRIMARY KEY (`STA_id`),
  ADD KEY `FK_streetAddress_customer` (`CUS_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD KEY `FK_users_customer` (`CUS_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `CAT_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `customer`
--
ALTER TABLE `customer`
  MODIFY `CUS_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `MEN_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `PED_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `TYP_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `phone`
--
ALTER TABLE `phone`
  MODIFY `PHO_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `shipping`
--
ALTER TABLE `shipping`
  MODIFY `SHI_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `streetaddress`
--
ALTER TABLE `streetaddress`
  MODIFY `STA_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_menu_category` FOREIGN KEY (`CAT_id`) REFERENCES `category` (`CAT_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_customer` FOREIGN KEY (`CUS_id`) REFERENCES `customer` (`CUS_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `orders_menu`
--
ALTER TABLE `orders_menu`
  ADD CONSTRAINT `FK_orders_menu_menu` FOREIGN KEY (`MEN_id`) REFERENCES `menu` (`MEN_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orders_menu_orders` FOREIGN KEY (`PED_id`) REFERENCES `orders` (`PED_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `PED_id` FOREIGN KEY (`PED_id`) REFERENCES `orders` (`PED_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TYP_id` FOREIGN KEY (`TYP_id`) REFERENCES `payment_type` (`TYP_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `FK_phone_customer` FOREIGN KEY (`CUS_id`) REFERENCES `customer` (`CUS_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `FK_shipping_orders` FOREIGN KEY (`PED_id`) REFERENCES `orders` (`PED_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `streetaddress`
--
ALTER TABLE `streetaddress`
  ADD CONSTRAINT `FK_streetAddress_customer` FOREIGN KEY (`CUS_id`) REFERENCES `customer` (`CUS_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_customer` FOREIGN KEY (`CUS_id`) REFERENCES `customer` (`CUS_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
