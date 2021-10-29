SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- db :- id17806152_indian_bank 
-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES

(1, 'Radhika', 'radhika@gmail.com', 70000),
(2, 'Archana', 'archana@gmail.com', 7000),	
(3, 'Surbhi', 'surbhi@gmail.com', 12300),
(4, 'Shreya', 'shreya@gmail.com', 100100),
(5  'Shital', 'shital@gmail.com', 37000),
(6, 'Karina', 'karinap@gmail.com', 63100),
(7, 'Sanjana', 'sanjana@gmail.com', 7000),
(8, 'Maithili', 'maithili@gmail.com', 2000),
(9, 'Preeti', 'preeti@gmail.com', 7000),
(10, 'Mrunmai', 'mrunmai@gmail.com', 4555),
(11, 'Prajal', 'prajal@gmail.com', 4200),
(12, 'Anamika', 'anamika@gmail.com', 4555);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;
