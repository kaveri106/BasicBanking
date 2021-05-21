
--
-- Database: `bank2`

--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Akanksha', 'akashukhose@gmail.com', 50000),
(2, 'Sonali', 'sonalipawar@gmail.com', 30000),
(3, 'Shruti', 'shrutichaudhary@gmail.com', 40000),
(4, 'Priyanka', 'priya23@gmail.com', 50000),
(5, 'Vaibhav', 'vaibhbhujbal@gmail.com', 40000),
(6, 'Rohit', 'rohitnawale@gmail.com', 30000),
(7, 'Dipti', 'diptimore@gmail.com', 50000),
(8, 'Pooja', 'poojajag@gmail.com', 40000),
(9, 'Pratham', 'pratham@gmail.com', 30000),
(10, 'Tapaswi', 'tapaswish@gmail.com', 50000);


--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--

ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

