

/* add medicines */

USE `cs673`;

INSERT INTO `medicines` (`medicine_class`, `medicine_name`, `min_dose`, `max_dose`, `unit`, `hypo`, `weight`, `renal_gu`, `gi_sx`, `chf`, `cvd`, `bone`) VALUES
('', 'Metformin', 500, 2000, 'mg', '0', '1', '3', '2', '0', '1', '0'),
('', 'GLP_1RA', 100, 500, 'mg', '0', '1', '3', '2', '0', '0', '0'),
('', 'DPP4_i', 10, 100, 'mg', '0', '0', '0', '0', '0', '0', '0'),
('', 'TZD', 10, 100, 'mg', '0', '3', '3', '0', '2', '0', '2'),
('', 'AG_i', 10, 100, 'mg', '0', '0', '0', '2', '0', '0', '0'),
('', 'Colesevelam', 10, 100, 'mg', '0', '0', '0', '2', '0', '0', '0'),
('', 'Bromocriptine_QR', 10, 100, 'mg', '0', '0', '0', '2', '0', '1', '0'),
('', 'SU_GLN', 10, 100, 'mg', '2', '3', '3', '0', '0', '2', '0'),
('', 'BasalInsulin', 10, 100, 'mg', '3', '3', '3', '0', '0', '0', '0'),
('', 'SGLT_2', 10, 100, 'mg', '0', '1', '3', '0', '0', '0', '2');
