SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `temperatures` (
  `id` int(255) NOT NULL,
  `temperature-1` double NOT NULL,
  `temperature-2` double NOT NULL,
  `temperature-3` double NOT NULL,
  `temperature-4` double NOT NULL,
  `humidity` varchar(20) NOT NULL,
  `dateMeasured` date NOT NULL,
  `hourMeasured` int(128) NOT NULL,
  `pressure` double NOT NULL,
  `pressure-sea` double NOT NULL,
  `altitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `temperatures`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `temperatures`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
