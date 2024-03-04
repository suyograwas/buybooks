-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 04:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `ausername` varchar(30) NOT NULL,
  `apassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `ausername`, `apassword`) VALUES
(1, 'admin', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oderid` int(250) NOT NULL,
  `uno` int(11) NOT NULL,
  `custname` varchar(20) NOT NULL,
  `custnumber` int(20) NOT NULL,
  `custemail` varchar(30) NOT NULL,
  `custcity` varchar(10) NOT NULL,
  `custpincode` int(10) NOT NULL,
  `custaddress1` varchar(100) NOT NULL,
  `custaddress2` varchar(100) NOT NULL,
  `pid` int(10) NOT NULL,
  `pquan` int(10) NOT NULL,
  `ptotal` int(20) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pimg` text NOT NULL,
  `pmethod` varchar(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'pendding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oderid`, `uno`, `custname`, `custnumber`, `custemail`, `custcity`, `custpincode`, `custaddress1`, `custaddress2`, `pid`, `pquan`, `ptotal`, `pname`, `pimg`, `pmethod`, `date`, `status`) VALUES
(14, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 3, 1, 600, ' Data Structures Using C and C', 'https://n4.sdlcdn.com/imgs/g/t/0/Data-Structures-Using-C-And-SDL286518484-1-41933.jpg', 'cod', '2021-05-30', 'pendding'),
(15, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 3, 5, 3000, ' Data Structures Using C and C', 'https://n4.sdlcdn.com/imgs/g/t/0/Data-Structures-Using-C-And-SDL286518484-1-41933.jpg', 'cod', '2021-05-30', 'pendding'),
(16, 1, 'suyog', 2147483647, 'suyograwwas@gami.com', 'sdfgh', 431107, 'pategaon', 'paithan', 5, 2, 1520, ' Gate 2021 Mechanical Engineer', 'https://rukminim1.flixcart.com/image/416/416/kbi9h8w0/book/7/3/4/gate-2021-mechanical-engg-prev-yr-solved-papers-original-imafsudtdwxry7uw.jpeg?q=70', 'cod', '2021-05-30', 'pendding'),
(17, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 3, 1, 600, ' Data Structures Using C and C', 'https://n4.sdlcdn.com/imgs/g/t/0/Data-Structures-Using-C-And-SDL286518484-1-41933.jpg', 'cod', '2021-05-30', 'pendding'),
(18, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 4, 4, 4000, ' Java the Complete Reference', 'https://rukminim1.flixcart.com/image/416/416/khxqt8w0-0/book/9/t/k/java-the-complete-reference-eleventh-edition-original-imafxuybqqhdthsc.jpeg?q=70', 'cod', '2021-05-30', 'pendding'),
(19, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 15, 1, 350, ' Android 1st Edition  `', 'https://rukminim1.flixcart.com/image/416/416/book/8/8/4/android-original-imaduvg5m8avtfvj.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(20, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 15, 1, 350, ' Android 1st Edition  `', 'https://rukminim1.flixcart.com/image/416/416/book/8/8/4/android-original-imaduvg5m8avtfvj.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(21, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 15, 1, 350, ' Android 1st Edition  `', 'https://rukminim1.flixcart.com/image/416/416/book/8/8/4/android-original-imaduvg5m8avtfvj.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(22, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 15, 1, 350, ' Android 1st Edition  `', 'https://rukminim1.flixcart.com/image/416/416/book/8/8/4/android-original-imaduvg5m8avtfvj.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(23, 2, '', 0, '', '', 0, '', '', 10, 3, 1875, ' Electric Machines ', 'https://rukminim1.flixcart.com/image/416/416/kj0bp8w0-0/book/c/p/m/electric-machines-original-imafyzdu2ynatbkr.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(24, 2, '', 0, '', '', 0, '', '', 3, 1, 600, ' Data Structures Using C and C', 'https://n4.sdlcdn.com/imgs/g/t/0/Data-Structures-Using-C-And-SDL286518484-1-41933.jpg', 'cod', '2021-06-01', 'pendding'),
(25, 1, '', 0, '', '', 0, '', '', 2, 1, 500, ' Programming with Java ', 'https://rukminim1.flixcart.com/image/416/416/jxf05u80/book/3/4/4/programming-with-java-original-imaffg6zgfy7wrc8.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(26, 1, '', 0, '', '', 0, '', '', 15, 1, 350, ' Android 1st Edition  `', 'https://rukminim1.flixcart.com/image/416/416/book/8/8/4/android-original-imaduvg5m8avtfvj.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(27, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 15, 1, 350, ' Android 1st Edition  `', 'https://rukminim1.flixcart.com/image/416/416/book/8/8/4/android-original-imaduvg5m8avtfvj.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(28, 1, 'suyog', 2147483647, 'suyograwwas$@gami.com', 'sdfgh', 431107, 'pategaon', 'paithan', 14, 1, 1900, ' React.js Essentials', 'https://rukminim1.flixcart.com/image/416/416/knxiavk0/book/y/h/d/react-js-essentials-original-imag2htanfuxnggq.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(29, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 14, 1, 1900, ' React.js Essentials', 'https://rukminim1.flixcart.com/image/416/416/knxiavk0/book/y/h/d/react-js-essentials-original-imag2htanfuxnggq.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(30, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 2, 4, 2000, ' Programming with Java ', 'https://rukminim1.flixcart.com/image/416/416/jxf05u80/book/3/4/4/programming-with-java-original-imaffg6zgfy7wrc8.jpeg?q=70', 'cod', '2021-06-01', 'pendding'),
(31, 1, 'suyog', 1234567890, 'suyograwas4@gmail.com', 'paithan', 431107, 'pategon', 'paithan', 1, 1, 300, ' C in Depth  ', 'https://images-na.ssl-images-amazon.com/images/I/51BFuRUjSWL._SX373_BO1,204,203,200_.jpg', 'cod', '2021-06-01', 'pendding'),
(32, 6, 'dhiruu', 1212121212, 'DHiru1255@gmail.com', 'Aurangabad', 431107, 'dhirus home', 'jalgaon', 13, 1, 530, ' Op-Amps and Linear Integrated', 'https://rukminim1.flixcart.com/image/416/416/kjd6nww0-0/book/x/6/c/op-amps-and-linear-integrated-circuits-original-imafyxmkddcz6zzg.jpeg?q=70', 'cod', '2023-05-16', 'pendding'),
(33, 6, 'dhiruu', 1212121212, 'DHiru1255@gmail.com', 'Aurangabad', 431107, 'dhirus home', 'jalgaon', 3, 1, 600, ' Data Structures Using C and C', 'https://n4.sdlcdn.com/imgs/g/t/0/Data-Structures-Using-C-And-SDL286518484-1-41933.jpg', 'cod', '2023-05-16', 'pendding'),
(34, 6, 'dhiruu', 1212121212, 'DHiru1255@gmail.com', 'Aurangabad', 431107, 'dhirus home', 'jalgaon', 8, 1, 495, ' Engineering Drawing, Third Ed', 'https://rukminim1.flixcart.com/image/416/416/jzeg6fk0/book/4/4/8/engineering-drawing-third-edition-original-imafj6chzdumagut.jpeg?q=70', 'cod', '2023-05-16', 'pendding'),
(35, 6, 'dhiruu', 1212121212, 'DHiru1255@gmail.com', 'Aurangabad', 431107, 'dhirus home', 'jalgaon', 12, 1, 200, ' Civil Engineering  ', 'https://rukminim1.flixcart.com/image/416/416/ki6bgcw0-0/book/5/m/z/civil-engineering-original-imafyytgr4nt9cxa.jpeg?q=70', 'cod', '2023-05-16', 'pendding');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(1000) NOT NULL,
  `pprice` int(100) NOT NULL,
  `prating` int(5) NOT NULL,
  `pbranch` varchar(20) NOT NULL,
  `pauthor` varchar(20) NOT NULL,
  `pdescription` mediumtext NOT NULL,
  `pimg1` longtext NOT NULL,
  `pimg2` longtext NOT NULL,
  `pimg3` longtext NOT NULL,
  `pdate` date NOT NULL DEFAULT current_timestamp(),
  `ptime` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`, `prating`, `pbranch`, `pauthor`, `pdescription`, `pimg1`, `pimg2`, `pimg3`, `pdate`, `ptime`) VALUES
(1, 'C in Depth  ', 300, 4, 'it', 'Srivastava Deepali', ' The book explains each topic in depth without compromising the lucidity of the text and programs. This approach makes this book suitable for both novices and advanced programmers: the well-structured programs are easily understandable by the beginners and useful for the experienced programmers. The book can be used as tool for self-study as it provides step by step explanation and comes with solutions of all exercises. ', 'https://images-na.ssl-images-amazon.com/images/I/51BFuRUjSWL._SX373_BO1,204,203,200_.jpg', 'https://images-eu.ssl-images-amazon.com/images/I/514gJc37fHL._SX198_BO1,204,203,200_QL40_ML2_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/51BFuRUjSWL._SX373_BO1,204,203,200_.jpg', '2021-05-30', '19:44:01'),
(2, 'Programming with Java ', 500, 5, 'it', 'Balagurusamy E', 'Programming with Java  (English, Paperback, Balagurusamy E),\r\nLanguage: English\r\nBinding: Paperback\r\nPublisher: McGraw Hill Education India\r\nGenre: Computers\r\n', 'https://rukminim1.flixcart.com/image/416/416/jxf05u80/book/3/4/4/programming-with-java-original-imaffg6zgfy7wrc8.jpeg?q=70', 'https://qph.fs.quoracdn.net/main-qimg-48b7a3d8958565e7aa3ad4dbf2312770.webp', 'https://images-na.ssl-images-amazon.com/images/I/61FmuzUH8AL.jpg', '2021-05-30', '19:44:01'),
(3, 'Data Structures Using C and C+', 600, 4, 'it', 'unknown', 'This very successful data structures text uses the standard ANSI C programming language to present the fundamentals of data structures and algorithm analysis. In addition, the authors introduce the features of C++ and show how they can be used to implement data structures. Real world problems are used to demonstrate how abstract concepts can be solved through the careful application of C and C++.', 'https://n4.sdlcdn.com/imgs/g/t/0/Data-Structures-Using-C-And-SDL286518484-1-41933.jpg', 'https://www.madrasshoppe.com/5790-large_default/data-structures-using-c-and-c-langsam-augenstein-tenenbaum.jpg', 'https://n4.sdlcdn.com/imgs/g/t/0/Data-Structures-Using-C-And-SDL286518484-1-41933.jpg', '2021-05-30', '19:44:01'),
(4, 'Java the Complete Reference', 1000, 5, 'it', 'unknown', 'Java the Complete Reference  (English, Paperback, unknown)\r\n    Language: English\r\n    Binding: Paperback\r\n    Publisher: McGraw Hill Education India\r\n    Genre: Computers', 'https://rukminim1.flixcart.com/image/416/416/khxqt8w0-0/book/9/t/k/java-the-complete-reference-eleventh-edition-original-imafxuybqqhdthsc.jpeg?q=70', 'https://images-na.ssl-images-amazon.com/images/I/51U232GoNXL.jpg', 'https://images-na.ssl-images-amazon.com/images/I/51k5NgL+B+L.jpg', '2021-05-30', '19:44:01'),
(5, 'Gate 2021 Mechanical Engineeri', 760, 4, 'me', 'unknown', 'Gate 2021 Mechanical Engineering Previous Solved Papers  (English, Paperback, unknown)\r\nLanguage: English\r\nBinding: Paperback\r\nPublisher: Made Easy\r\nGenre: Technology & Engineering', 'https://rukminim1.flixcart.com/image/416/416/kbi9h8w0/book/7/3/4/gate-2021-mechanical-engg-prev-yr-solved-papers-original-imafsudtdwxry7uw.jpeg?q=70', 'https://rukminim1.flixcart.com/image/416/416/kc9eufk0/book/7/3/4/gate-2021-mechanical-engg-prev-yr-solved-papers-original-imaftff3y3qvtd5y.jpeg?q=70', 'https://rukminim1.flixcart.com/image/416/416/kbi9h8w0/book/7/3/4/gate-2021-mechanical-engg-prev-yr-solved-papers-original-imafsudtdwxry7uw.jpeg?q=70', '2021-05-30', '19:44:01'),
(6, 'Engineering Drawing-I ', 200, 4, 'me', 'Engineering Drawing-', 'This book is entitled as “Engineering Drawing-I” contains latest materials on relevant subjective practice and numerical problems. It is meant for the students of mechanical, production civil, computer and Electronics & Communication Engineering of Polytechnics. Also this book teaches us how drawing said to be the language of engineering and technicians. This book is aimed to develop basic graphic skills so as to enable them to use these skills in preparation of drawing their reading and interpretation..', 'https://rukminim1.flixcart.com/image/416/416/book/4/5/6/engineering-drawing-i-original-imaecfgjdryaj7qb.jpeg?q=70', 'http://imshopping.rediff.com/imgchkbooks/200-300/books/pixs/33/9789380358833.jpg', 'https://rukminim1.flixcart.com/image/416/416/book/4/5/6/engineering-drawing-i-original-imaecfgjdryaj7qb.jpeg?q=70', '2021-05-30', '19:44:01'),
(7, 'Engineering Drawing ', 391, 4, 'me', 'Bhatt N.D.', 'Engineering Drawing  (English, Paperback, Bhatt N.D.)\r\n    Language: English\r\n    Binding: Paperback\r\n    Publisher: Charotar Publishing House\r\n    Genre: Technology & Engineering\r\n    ISBN: 9789380358963, 9789380358963\r\n    Pages: 720', 'https://rukminim1.flixcart.com/image/416/416/book/9/6/3/engineering-drawing-plane-and-solid-geometry-original-imae2wy3scwqwvuy.jpeg?q=70', 'https://rukminim1.flixcart.com/blobio/1160/1160/imr-202102/blobio-imr-202102_283fdd015e3e48abb927a89b5794d394.jpg?q=90', 'https://rukminim1.flixcart.com/image/416/416/book/9/6/3/engineering-drawing-plane-and-solid-geometry-original-imae2wy3scwqwvuy.jpeg?q=70', '2021-05-30', '19:44:01'),
(8, 'Engineering Drawing, Third Edi', 495, 5, 'me', 'Basant AgrawalC M Ag', 'Engineering Drawing is a comprehensive book designed to meet the needs of first year BE/B.Tech. students of all engineering branches. Written in a lucid language, the book emphasizes on basic concepts and follows a step-by-step methodology to explain drawing and visualization of objects. Plenty of solved examples, variety of practice questions, and excellent 2D and 3D illustrations make it a perfect textbook for students. It can also be used as a reference book by the professionals and Academicians.', 'https://rukminim1.flixcart.com/image/416/416/jzeg6fk0/book/4/4/8/engineering-drawing-third-edition-original-imafj6chzdumagut.jpeg?q=70', 'https://images-na.ssl-images-amazon.com/images/I/71vzTVswm8L.jpg', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.snapdeal.com%2Fproduct%2Fengineering-drawing-3rd-edition%2F654224730973&psig=AOvVaw1bCxbjh1PhcEJrQjW-h8M0&ust=1622468369270000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIjw_p3E8fACFQAAAAAdAAAAABAJ', '2021-05-30', '19:44:01'),
(9, 'Harry Potter and the Philosopher\'s Stone', 300, 5, 'ex', 'Rowling J.K.', 'After bottling up his magical powers for a lifetime, Harry finally feels like a normal kid when he gets accepted to go to Hogwarts. He is the boy who lived: the only person to have ever survived a killing curse inflicted by the evil Lord Voldemort, who launched a brutal takeover of the Wizarding world, only to vanish after failing to kill Harry. ', 'https://i.pinimg.com/originals/8b/b3/99/8bb3991dca3078f26bab8d07770f8d33.png', 'https://rukminim1.flixcart.com/image/416/416/k6l2vm80/book/6/5/2/harry-potter-and-the-philosopher-s-stone-original-imafhqpphgerjejq.jpeg?q=70', 'https://www.pikpng.com/pngl/m/532-5328488_harry-potter-books-png-harry-potter-american-books.png', '2021-05-30', '19:44:01'),
(10, 'Electric Machines ', 625, 3, 'ee', 'Kothari D. P.', ' This edition of the book is designed to supplement textbooks on electric machines; the book presents basic concepts, techniques and services relating to electric machines through a series of carefully formulated solved examples, review questions and objective questions.', 'https://rukminim1.flixcart.com/image/416/416/kj0bp8w0-0/book/c/p/m/electric-machines-original-imafyzdu2ynatbkr.jpeg?q=70', 'https://rukminim1.flixcart.com/blobio/1160/1160/imr-202104/blobio-imr-202104_1fd1eb3debc44890b008ed28bb51a8dd.jpg?q=90', 'https://rukminim1.flixcart.com/image/416/416/kj0bp8w0-0/book/c/p/m/electric-machines-original-imafyzdu2ynatbkr.jpeg?q=70', '2021-05-29', '20:00:00'),
(12, 'Civil Engineering  ', 200, 3, 'ce', 'Gupta S.P.', 'his edition has been thoroughly revised and enlarged by including questions which appeared in the competitive examinations for Civil Services and Engineering Services conducted by UPSC and also from GATE conducted by IIT. The book was highly appreciated by the readers from all nooks and corners of the country. A large number of questions from the book appeared in the competitive examinations', 'https://rukminim1.flixcart.com/image/416/416/ki6bgcw0-0/book/5/m/z/civil-engineering-original-imafyytgr4nt9cxa.jpeg?q=70', 'https://www.madrasshoppe.com/23680-home_default/civil-engineering-through-objective-type-questions-s-p-gupta.jpg', 'https://rukminim1.flixcart.com/image/416/416/ki6bgcw0-0/book/5/m/z/civil-engineering-original-imafyytgr4nt9cxa.jpeg?q=70', '2021-05-30', '20:05:48'),
(13, 'Op-Amps and Linear Integrated Circuits', 530, 4, 'ele', ' Gayakwad Ramakant A', 'Op-Amps, Op-Amp Applications or Linear Integrated Circuits.This successful technology-based text supports a thorough understanding of a wide variety of operational amplifiers and integrated circuit applications.It combines the right blend of theory and practice to present a simplified and methodical way to design and develop students\' understanding of the differences between theoretical, practical and simulated results in the analysis of op-amp circuits.', 'https://rukminim1.flixcart.com/image/416/416/kjd6nww0-0/book/x/6/c/op-amps-and-linear-integrated-circuits-original-imafyxmkddcz6zzg.jpeg?q=70', 'https://5.imimg.com/data5/SELLER/Default/2021/3/FS/HS/QN/59907886/img-20201218-134729-01-01-500x500.jpg', 'https://rukminim1.flixcart.com/image/416/416/kjd6nww0-0/book/x/6/c/op-amps-and-linear-integrated-circuits-original-imafyxmkddcz6zzg.jpeg?q=70', '2021-05-31', '01:58:14'),
(14, 'React.js Essentials', 1900, 4, 'it', ' Fedosejev Artemij', '\r\nDesigning Application with Spring Boot 2 & React JS is divided into three parts. The first part introduces you to the essentials of the Spring Boot 2.2 Framework and you will learn how to create REST APIs and how to secure REST APIs. Part 2 steps behind the front end application development with React JS and discuss React features and its advantages toward the front end application development. Part 3 expands on that by showing how to deploy backend and frontend application the PaaS platform and also will discuss how to deploy application container technologies such as Docker.', 'https://rukminim1.flixcart.com/image/416/416/knxiavk0/book/y/h/d/react-js-essentials-original-imag2htanfuxnggq.jpeg?q=70', 'https://rukminim1.flixcart.com/image/416/416/jyyqc280/book/6/4/3/designing-applications-with-spring-boot-2-2-and-react-js-original-imafgzvtzznxc999.jpeg?q=70', 'https://rukminim1.flixcart.com/image/416/416/knxiavk0/book/y/h/d/react-js-essentials-original-imag2htanfuxnggq.jpeg?q=70', '2021-05-31', '02:38:05'),
(15, 'Android 1st Edition  `', 350, 1, 'it', ' Prasanna Kumar Dixi', 'Android is a movement that has transferred data from laptop to hand-held devices like mobiles. Though there are alternate technologies that compete with Android, but it is the front runner in mobile technology by a long distance. Good knowledge in basic Java will help you to understand and develop Android technology and apps.', 'https://rukminim1.flixcart.com/image/416/416/book/8/8/4/android-original-imaduvg5m8avtfvj.jpeg?q=70', 'https://rukminim1.flixcart.com/image/312/312/book/6/0/2/composing-mobile-apps-original-imadumghtczvjmfa.jpeg?q=70', 'https://rukminim1.flixcart.com/image/416/416/book/8/8/4/android-original-imaduvg5m8avtfvj.jpeg?q=70', '2021-05-31', '02:47:39'),
(16, 'Android Cookbook `', 400, 5, 'it', ' Darwin Ian F.', '\r\nJump in and build working Android apps with the help of more than 230 tested recipes. The second edition of this acclaimed cookbook includes recipes for working with user interfaces, multitouch gestures, location awareness, web services, and specific device features such as the phone, camera, and accelerometer. You also get useful info on packaging your app for the Google Play Market. Ideal for developers familiar with Java,', 'https://rukminim1.flixcart.com/image/416/416/kjym9ow0/book/q/r/p/android-cookbook-original-imafze9fvhudewgz.jpeg?q=70', 'https://rukminim1.flixcart.com/image/312/312/jbfe7ww0-1/book/2/3/6/learning-android-original-imafyd88hwbf5crn.jpeg?q=70', 'https://images-na.ssl-images-amazon.com/images/I/51Lnn6hI29L.jpg', '2021-05-31', '02:51:49'),
(20, 'ertyukl;kl`', 0, 3, 'ee', 'sedrtgyjik', 'yuilmngfsdrtykulkkhg', 'asedrtyhujikllkjhge', 'ertyukjilkjhgfw', 'werytuyuil;opjhugytd', '2021-06-03', '01:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uno` int(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uno`, `username`, `password`, `email`) VALUES
(1, 'rawas', 'Asdfghjkl@123', 'suyograwas@gamil.com'),
(2, 'ravishiral', 'Admin@123', 'ravishieal@gmail.com'),
(3, 'rstdryuiop', 'aaAsdfghj@1234', 'dsfghjkl@dfghj.redtf'),
(4, 'sadfghjkl', 'dfghjklA#12', 'sadfghjkl@dfg.dfghj'),
(5, 'sfdgfhgjk', 'Admin@123', 'fdxghghk@dfghj.fghj'),
(6, 'suyog', 'Suyog#123', 'suyog@123.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `ausername` (`ausername`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uno`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oderid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
