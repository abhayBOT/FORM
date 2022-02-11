# FORM

Use POSTMAN tool to test the GET and POST method...


Table structure for table `info`


CREATE TABLE `info` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `age` varchar(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `iname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);
