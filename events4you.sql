-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 28, 2021 alle 17:05
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events4you`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_evento`),
  `titolo` varchar(50) COLLATE utf8_bin NOT NULL,
  `descrizione` text COLLATE utf8_bin NOT NULL,
  `luogo` varchar(32) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `disponibilita` smallint(5) UNSIGNED NOT NULL,
  `partecipazione` smallint(5) UNSIGNED NOT NULL,
  `prezzo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`id_evento`, `titolo`, `descrizione`, `luogo`, `data`, `disponibilita`, `partecipazione`, `prezzo`) VALUES
(1, 'Giovanni Live', 'Ciao', 'San Giovanni Rotondo', '2021-04-02', 1000, 23, '25.00');

-- --------------------------------------------------------

--
-- Struttura della tabella `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  `domanda` text COLLATE utf8_bin NOT NULL,
  `risposta` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------



--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`),
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `livello` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Struttura della tabella `biglietto`
--

CREATE TABLE `biglietto` (
  `id_utente` varchar(32) COLLATE utf8_bin NOT NULL,
  `id_evento` int(11) NOT NULL,
  PRIMARY KEY (`id_utente`,`id_evento`),
  `numero` smallint(5) UNSIGNED NOT NULL,
  `data_acquisto` date NOT NULL,
  `mod_pagamento` varchar(20) COLLATE utf8_bin NOT NULL,
  `prezzo_totale` decimal(10,2) NOT NULL,
  FOREIGN KEY (`id_utente`)
  	REFERENCES `utente` (`username`)
  	ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`id_evento`)
  	REFERENCES `evento` (`id_evento`)
  	ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- --------------------------------------------------------


--
-- Struttura della tabella `analisi`
--

CREATE TABLE `analisi` (
  `id_utente` varchar(32) NOT NULL,
  `id_evento` int(11) NOT NULL,
  PRIMARY KEY (`id_utente`,`id_evento`),
  `biglietti_venduti` int(10) UNSIGNED NOT NULL,
  `ricavo` decimal(10,2) NOT NULL,
  FOREIGN KEY (`id_utente`)
  	REFERENCES `utente` (`username`)
  	ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`id_evento`)
  	REFERENCES `evento` (`id_evento`)
  	ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Struttura della tabella `last_minute`
--

CREATE TABLE `last_minute` (
  `id_evento` int(11) NOT NULL,
  PRIMARY KEY (`id_evento`),
  `percentuale` tinyint(3) UNSIGNED NOT NULL,
  `data_inizio` date NOT NULL,
  FOREIGN KEY (`id_evento`)
  	REFERENCES `evento` (`id_evento`)
  	ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

