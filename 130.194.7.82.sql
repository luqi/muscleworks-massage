-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: 130.194.7.82
-- Generation Time: Oct 13, 2013 at 01:51 PM
-- Server version: 5.5.20
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fitie2013t04dev`
--
CREATE DATABASE `fitie2013t04dev` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fitie2013t04dev`;

-- --------------------------------------------------------

--
-- Table structure for table `archivevouchers`
--

CREATE TABLE IF NOT EXISTS `archivevouchers` (
  `id` int(11) NOT NULL,
  `from_name` varchar(50) NOT NULL,
  `phoneNumber_1` varchar(10) NOT NULL,
  `from_email` varchar(50) NOT NULL,
  `to_name` varchar(50) NOT NULL,
  `date_purchase` date NOT NULL,
  `price` float NOT NULL,
  `message` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'unredeemed',
  `payment` varchar(50) NOT NULL DEFAULT 'unpaid',
  `payment_method` varchar(20) NOT NULL DEFAULT 'PayPal',
  `UUID` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archivevouchers`
--

INSERT INTO `archivevouchers` (`id`, `from_name`, `phoneNumber_1`, `from_email`, `to_name`, `date_purchase`, `price`, `message`, `status`, `payment`, `payment_method`, `UUID`) VALUES
(662, 'EROL', '0412345678', 'zhangluqi16@gmail.com', 'LI', '2013-06-25', 56, 'hello', 'unredeemed', 'unpaid', 'Cash', '091d039b02ddf4d2fb7f5be76e1c77465d6b4ec7'),
(663, 'DXV', '0425023640', 'reddyishan90@gmail.com', 'ISHAN', '2013-06-26', 56, 'sdfsdf', 'unredeemed', 'unpaid', '  ', 'b66cd90e3946dd63b5a914d5eb2c7eddb46177ec'),
(664, 'ISHAN', '2132131231', 'bouring@bigpond.com', 'SADSADA', '2013-06-26', 56, 'xf', 'unredeemed', 'unpaid', '  ', '88547be1130859cf095ec35f890a1a53eafa9ac2'),
(665, 'LUQI', '0412345678', 'zlq916@xnmsn.com', 'AAAA', '2013-06-26', 56, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday!', 'unredeemed', 'unpaid', '  ', 'af7166a5d6ddde19c3a7fd202d93ee963ea22132'),
(666, 'LUQI', '0412345678', 'zlq916@xnmsn.com', 'AAAA', '2013-06-26', 56, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday!', 'unredeemed', 'unpaid', '  ', 'cd3f0c85b158c08a2b113464991810cf2cdfc387'),
(667, 'LUQI', '0412345678', 'zlq916@xnmsn.com', 'AAAA', '2013-06-26', 56, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday!', 'unredeemed', 'unpaid', '  ', '74da6152f5b23ae319b48bec60aff34ee65862cc'),
(668, 'LUQI', '0412345678', 'zlq916@xnmsn.com', 'AAAA', '2013-06-26', 56, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday!', 'unredeemed', 'unpaid', '  ', '34c66477519b949b09b45e131347c17b5822a30a'),
(669, 'LUQI', '0412345678', 'zlq916@xnmsn.com', 'AAAA', '2013-06-26', 56, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday!', 'unredeemed', 'unpaid', '  ', '9f3bdbf605248e180acba43499e6c6cbcec07427'),
(670, 'LUQI', '0412345678', 'zlq916@xnmsn.com', 'AAAA', '2013-06-26', 56, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday!', 'unredeemed', 'unpaid', '  ', '1cf9ade625b515864393eacfeb943eaeb0e52814'),
(671, 'ZHICHEN', '0412345678', 'zhangluqi16@gmail.com', 'SDSD', '2013-06-26', 56, 'dsd', 'unredeemed', 'unpaid', '  ', '97e01b6f38ed3790a7fed91dda9b2f288222e77d'),
(672, 'MEGAN', '0451118071', 'meganeliselaraia@hotmail.com', 'SHAUN', '2013-06-26', 55, 'happy birthday', 'unredeemed', 'unpaid', '  ', '540d3e47795cb7cf660d17fac99e2ad4296c26ca'),
(673, 'ZHICHEN', '0412345678', 'zhangluqi16@gmail.com', 'SDSD', '2013-06-26', 85, 'dsd', 'unredeemed', 'unpaid', '  ', 'dca7d04102c326cf00ed5aac983d712827329f31'),
(674, 'ZHICHEN', '0412345678', 'zhangluqi16@gmail.com', 'SDSD', '2013-06-26', 85, 'dsd', 'unredeemed', 'unpaid', '  ', 'ee49886656eacc1451a1a06ad61d7a8b31448650'),
(676, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', 'c6cf93cb5f3e51a3053e0c15aa871977512f3515'),
(678, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', 'b2029ba5ea1042d78c96d3888897571eea8c27fa'),
(679, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', 'eac6819d6e578da7ba6eed2a8df7ca3d425246c8'),
(680, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', 'fab19abfc186474354d059987002dfd06da3ddce'),
(681, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', '89d79a520700d1cce8a6d6c0873ae93de21ffcc0'),
(682, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', '7fd2b74e8017425780436f5257d01e4ab14b9cc2'),
(683, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', '4f2706558a59b0c71f4a31a81345052fc8623919'),
(684, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', 'a79e9a409bded1928e5dad9765d53e7bce91d555'),
(685, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', '27cfac7148112eaa048ea53bbeb10cacab631742'),
(686, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', 'cea6475abf50000b50fe25c592e079363689f59e'),
(687, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', 'dbe8ddfe63caf36d00ca9e558b358c59d1434e04'),
(688, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', '8ff059157542d2c31f0e43fc7f2325343e603875'),
(689, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', '53c53c5d2b630c0d912264bb9edf8cf6f0afa260'),
(690, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'unpaid', '  ', 'd9fce17200317431b1b43b27508224cf0294759a'),
(691, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '3da7e2c2144502d7115bee98a0dfe95030345b43'),
(692, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '6d3eeb1a2cc4cb90eb87ab1002ed6bb801b3aae1'),
(693, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'd69b923df6140a16aefc89546a384e0493641fbe'),
(694, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'd2e19c4182d68093904d9bf3744ac0c3a8bc8238'),
(695, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '00a6915f2bd395a55fb85aed647039e4136e35cb'),
(696, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '4c87e5e9fc1a564781c398618687a2f5cad0abb8'),
(697, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'ff5ae4a7485c5c734d9e9cd8a8d875bf5ebddf60'),
(698, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '07eb1cd77ab3f5be92ee0c7050d2048fa1390e4c'),
(699, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '8666e1e6084dc8e20443de41f6826d13d4e3b32b'),
(700, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'd8e4bbea3af2e4861ad5a445aaec573e02f9aca2'),
(701, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '9170981d59d0f8d3f003ef0f289394ded6a00696'),
(702, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'a085216616587a553a52ec5faf1e61bfacf2bbfa'),
(703, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '8fc1bb57c95fe04d4a8acab34ca0576ac19fdc01'),
(704, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'a093a39de68a668cd79e97f49b597f15f3ad5609'),
(705, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '794bb3681babb52a3960b4b4802cb2941ec86aa5'),
(706, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'de9a90c16b82748e2c528c4e9f25c06e8837ee36'),
(707, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '2a8ae2469569e6eccde1a5b5b16eb076d0769ad3'),
(708, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'b6c3f8f43516460ff7a23fb24c33ae4ab854635e'),
(709, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '29da9bc33b146db5b36af2908861e1de88c25fc8'),
(710, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '86e55aec99bfd3868b399afe0c5069bd2a7b7d18'),
(711, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '7919ae519f96a6645a5640c381f954df58d2d2d2'),
(712, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'a85f2d02e23cd73f8f9a7e5564778deb983ecb2f'),
(713, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '84b0b577501b6c0162aea7c1353b300e66a9fe4a'),
(714, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '3acc03b58fc090f39e4021239a795efa3302a155'),
(715, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '32e9d389ede4a021467f51eea81dc2bde15a33ad'),
(716, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '8df1bd5982b694d09ace0550ed9f0738fc91dc3e'),
(717, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'e1c1bfebab6bf67d6a890159995b9edf156ac725'),
(718, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '395ea62457ba1302a696ef4bf8c3ebec74b6f0ac'),
(719, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '83950160648e3b8fe394c1cd9633d79cad816c06'),
(720, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'aeaa8a872d9de96a7c8f7f1014fd6e4b1185f1d7'),
(721, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '0707dcc10ec1cfee92b537a96faab0a38f7bc5a1'),
(722, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '278e89d8c2da87688af1c1b00f468a10e7dbe61f'),
(723, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'f5354c576bb89b67972d7fe269df256a54fef036'),
(724, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'b19dc177a07ce563e09b457f13bf5a673ddfbba1'),
(725, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '75d2a5a3c528920d00425f29099eed114b9134e0'),
(726, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'db667d12a4034fedb3d483274955503ca4a361e2'),
(727, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '90f98c0ea42c927c4b073038a1fbf401ffd4e2a1'),
(728, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '8e6b8a73bce7324e2b6e4afa73ee4215b98e9432'),
(729, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'baa924ce1ee3617f30a87ca26b2aeb62911af478'),
(730, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '16a9efea4885a86a6c0e036b52e0b0bad6da1845'),
(731, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '77895c1f680568edb1fe3d4e386593e6f40679f6'),
(732, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '9deb867b96b097fccf9bd932719fe347c49a2a7b'),
(733, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', 'bc3f9e234e98cfaebb57ded77079656b48f6840c'),
(734, 'LUQI TEST', '0410112916', 'zhangluqi16@gmail.com', 'BOWEN TEST', '2013-06-26', 55, 'happy birthday! happy birthday! happy birthday! happy birthday! happy birthday! ', 'unredeemed', 'unpaid', '  ', '6229d318680435e210d96518f4fc6bf0390e3cac'),
(735, 'TEST', '0410112916', 'zhangluqi16@gmail.com', 'AAA', '2013-06-26', 55, 'test! test! test! test! test! test! test! test! test!', 'unredeemed', 'unpaid', '  ', 'a6b21a4281226e8a97c2e05517fbe546775efc6a'),
(736, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '4b14fe7493932c29c0d1b85a3ba120bd22079c3e'),
(737, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '4cae599309683b04925ec1cb7d79dfab04709af8'),
(738, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '641e2c9fb629c63ff2e3222878abbe71b967acb8'),
(739, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '1c710b1ca4bc921803cf096a5b2bb48d55947e4d'),
(740, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '2e0ab5b38ac3a139b7527efc5eec2118105b82b0'),
(741, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '23b23be9da2519c88f11c084310bcc0bf14417f8'),
(742, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '02c8be94d9fa60afd0e8fab82a7f004105a90bee'),
(743, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', 'f032e58930733b4d76fabb3398e75d86d881b245'),
(744, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '193b3437a94374579772f3f1a8c8f08381218bf9'),
(745, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', 'de8627f75ba1abcfafd00a0e75ad189105cfdc21'),
(746, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '9b3aa2709c85dba67b6f4901fbabc732f44cf074'),
(747, 'AAAAAA', '0412345678', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-26', 55, 'dddd', 'unredeemed', 'unpaid', '  ', '5c1dc07026ceafcb704bdff1375815f30a769a13'),
(748, 'AAAA', '0410112916', 'zhangluqi16@gmail.com', 'ZZZZ', '2013-06-26', 70, 'sss', 'unredeemed', 'unpaid', '  ', '6d40f903e9f072ed9ed21889e1520272247f6cc1'),
(750, 'AAAA', '0410112916', 'zhangluqi16@gmail.com', 'ZZZZ', '2013-06-26', 70, 'sss', 'unredeemed', 'unpaid', '  ', '404c735f21d00fee39a13210d54844f3cec069c7'),
(751, 'TEST', '0412345678', 'zlq916@xnmsn.com', 'TEST', '2013-06-26', 55, 'happy! happy! happy! happy! happy! happy! happy! happy! happy! happy! ', 'unredeemed', 'unpaid', '  ', '758a25f7dd163311b02efd5de19535312f7c1225'),
(752, 'TEST', '0412345678', 'zlq916@xnmsn.com', 'TEST', '2013-06-26', 55, 'happy! happy! happy! happy! happy! happy! happy! happy! happy! happy! ', 'unredeemed', 'unpaid', '  ', 'b7ecf1ca1c97492de831d17a3ab559d4a1f8b735'),
(755, 'SADSAD', '0410112916', 'zhangluqi16@gmail.com', 'DSADSA', '2013-06-26', 55, 'dsadsad', 'unredeemed', 'unpaid', '  ', '52342fa440fbbcdc12a30730096226018453ae15'),
(757, 'SADSAD', '0410112916', 'zhangluqi16@gmail.com', 'DSADSA', '2013-06-26', 55, 'dsadsad', 'redeemed', 'unpaid', '', 'd64ce8d6017f0d3ab6d528cf5dfd616ae05c32b4');

-- --------------------------------------------------------

--
-- Table structure for table `cakebake`
--

CREATE TABLE IF NOT EXISTS `cakebake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cakebake`
--

INSERT INTO `cakebake` (`id`, `title`, `content`) VALUES
(5, 'Newsletter 23 april 2012', '<p>http://ie.infotech.monash.edu/team04/REVIEW/cakeMuscle</p>'),
(6, 'Test page', '<p>testing</p>'),
(7, 'dgedvs', '<p>dsf</p>'),
(8, 'newsletter 2', '');

-- --------------------------------------------------------

--
-- Table structure for table `pagecontents`
--

CREATE TABLE IF NOT EXISTS `pagecontents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(30) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `pagecontents`
--

INSERT INTO `pagecontents` (`id`, `page`, `content`) VALUES
(1, 'home', '<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Welcome to Muscleworks Massage!</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">&nbsp;</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Providing clinic, corporate and&nbsp;event massage. Massage is an essential way of treating a wide range of physical conditions, as well as stress and anxiety.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">&nbsp;</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Discover how you can recover from injuries faster, relieve pain and aid in your body''s muscle recovery time. Muscleworks Massage offers passionate and dedicated practitioners in remedial massage with a specialisation in sports and pre and postnatal pregnancy treatments.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">&nbsp;</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">With over 10 years hands on experience&nbsp;and&nbsp;8 years within National Sporting teams, we bring up to date knowledge and satisfaction. You can be confident that treatments will be tailored specifically to your needs.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">&nbsp;</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Please see the&nbsp;''Service''&nbsp;menu for information on styles of massage available.&nbsp;&lsquo;Like&rsquo; our Facebook&nbsp;page and subscribe to&nbsp;the&nbsp;Newsletter for specials and discounts.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">&nbsp;</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">No walk-ins, bookings are essential.</span></p>'),
(2, 'services', '<p><span style="color: #ff9900; font-family: avant_guardregular,arial,sans-serif; font-size: x-large;" data-mce-mark="1"><strong><strong><span class="Bullet" data-mce-mark="1">SERVICES OVERVIEW</span></strong></strong></span></p>\r\n<p><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1"><strong>REMEDIAL MASSAGE<img style="float: right;" src="http://www.muscleworksmassage.com.au/Muscleworks_Massage/Treatments_files/shapeimage_2.png" alt="" /></strong></span></p>\r\n<div id="id5" class="style_SkipStroke_5 shape-with-text">\r\n<div class="text-content Normal_External_385_160">\r\n<div class="Normal">\r\n<p><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">Remedial massage is the application of different techniques in the treatment of muscular pain and dysfunction that affect human movement.</span></p>\r\n<p class="paragraph_style_1"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">It is a form of treatment that is applied in the preventative, corrective and rehabilitative phases of treatment.</span></p>\r\n<p class="paragraph_style_1"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">Remedial Massage is concerned with the restoration and maintenance of the soft tissue structures of the body and can be used for relaxation purposes also. <a href="/team04/DEVELOPMENT/cakeMuscle/pages/3">More.</a></span></p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id="id6" class="style_SkipStroke_6 shape-with-text">\r\n<div class="text-content Normal_External_384_28">\r\n<div class="Normal">\r\n<p class="paragraph_style_2"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">&nbsp;</span></p>\r\n<p class="paragraph_style_2"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">&nbsp;</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id="id7" class="style_SkipStroke_5 shape-with-text">\r\n<div class="text-content Normal_External_391_144">\r\n<div class="Normal">\r\n<p class="paragraph_style_1"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1"><strong>PREGNANCY - PRE AND POSTNATAL MASSAGE</strong></span></p>\r\n<span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1"><img style="float: right;" src="http://www.muscleworksmassage.com.au/Muscleworks_Massage/Treatments_files/shapeimage_3.png" alt="" /></span>\r\n<p class="paragraph_style_1"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">Nausea, Fatigue, Anxiety and muscle soreness can&nbsp;put mums to be under added pressure and often lead to neck, shoulder, mid and low back pain. Massage during pregnancy can include specific light and deep pressure massage, myofascial techniques, circulatory work and acupressure.&nbsp;</span></p>\r\n<p class="paragraph_style_1"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">Postnatal massage can help relax, decrease stress, improve relaxation and unwind, aiding in improved sleep and easing muscles aches and pains.&nbsp;<a href="/team04/DEVELOPMENT/cakeMuscle/pages/4">More.</a></span></p>\r\n<div class="Normal"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">&nbsp;</span></div>\r\n<p class="paragraph_style_1"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">&nbsp;</span></p>\r\n<div class="Normal"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">&nbsp;</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id="id9" class="style_SkipStroke_5 shape-with-text">\r\n<div class="text-content Normal_External_399_128">\r\n<div class="Normal"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1"><img style="float: right;" src="http://www.muscleworksmassage.com.au/Muscleworks_Massage/Treatments_files/shapeimage_4.png" alt="" /></span>\r\n<p class="paragraph_style_3"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1"><strong>SPORTS MASSAGE</strong></span></p>\r\n<p class="paragraph_style_3"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">Prepare for your next major sporting event with an energising massage to revitalise tired muscles and minimise the risk of a sporting injury.&nbsp;Recovery massage is used to restore your muscles and release the build up of lactic acid.</span></p>\r\n</div>\r\n<p class="paragraph_style_3"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">Sports massage ensures that the mobility and flexibility of muscles, tendons and joints are&nbsp;optimised&nbsp;pre and post event.&nbsp;<a href="/team04/DEVELOPMENT/cakeMuscle/pages/5">More.</a></span></p>\r\n</div>\r\n</div>\r\n<div id="id10" class="style_SkipStroke_6 shape-with-text">\r\n<div class="text-content Normal_External_399_28">\r\n<p class="Normal"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1"><strong>&nbsp;</strong>&nbsp;</span></p>\r\n</div>\r\n</div>\r\n<p id="id14" class="style_SkipStroke_2 shape-with-text"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">&nbsp;&nbsp;</span></p>\r\n<p class="style_SkipStroke_2 shape-with-text"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1"><strong>MORE TREATMENTS</strong></span></p>\r\n<p><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1"><img style="float: right;" src="http://www.muscleworksmassage.com.au/Muscleworks_Massage/Treatments_files/shapeimage_5.png" alt="" /></span></p>\r\n<div id="id15" class="style_SkipStroke_5 shape-with-text">\r\n<div class="text-content Normal_External_391_128">\r\n<div class="Normal">\r\n<p class="paragraph_style_3"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">Relax and unwind with a relaxation massage with calming music and flowing strokes.</span></p>\r\n<p class="paragraph_style_3"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">Trigger point therapy can offer a quick &amp; effective release of muscles that are causing pain and discomfort.</span></p>\r\n<p class="paragraph_style_3"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">Cupping can alleviate muscle tension, sporting injuries, common colds and flu and stimulates the nervous system.&nbsp;<a href="/team04/DEVELOPMENT/cakeMuscle/pages/9">More.</a></span></p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="spacer"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;" data-mce-mark="1">&nbsp;</span></div>'),
(3, '3', '<p><span style="font-size: medium;">What is Remedial Massage?</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">Remedial massage is the application of different techniques in the treatment of muscular pain and dysfunction that affect human movement.</span></p>\r\n<p class="paragraph_style_2"><span class="Bullet" style="font-size: medium;">&nbsp;</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">It is a form of treatment that is applied in the preventative, corrective and rehabilitative phases of treatment.Remedial Massage is concerned with the restoration and maintenance of the soft tissue structures of the body and can be used for relaxation purposes also.</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">&nbsp;</span></p>\r\n<p class="paragraph_style_1"><span class="Bullet" style="font-size: medium;">What do Remedial Therapists do?</span></p>\r\n<p class="paragraph_style_1"><span style="font-size: medium;"><span class="Bullet">-</span> Treat muscular pain and sports injuries</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Soft tissue manipulation (hands on work on muscles)<span class="Bullet"><br /></span></span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Deep tissue massage therapy<span class="Bullet"><br /></span></span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Relaxation massage therapy<span class="Bullet"><br /></span></span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Thermal therapy<span class="Bullet"><br /></span></span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Myofascial release techniques<span class="Bullet"><br /></span></span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Stretch and strengthening exercises<span class="Bullet"><br /></span></span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Energy manipulation</span></p>\r\n<p class="paragraph_style_4"><span style="font-size: medium;">&nbsp;</span></p>\r\n<p class="paragraph_style_1"><span style="font-size: medium;"><span class="Bullet">Common Conditions seen by Remedial Therapists:</span><span class="Bullet"><br /></span></span></p>\r\n<p class="paragraph_style_5"><span style="font-size: medium;"><span class="Bullet">- </span>Sporting injuries</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Work injuries</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Lower back pain including sciatica</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Muscle and joint stiffness</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Neck pain</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Headaches</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;"><span class="Bullet">- </span>Stress</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">- Sprains and strains</span></p>'),
(4, '4', '<p><span style="font-size: medium;">PRENATAL</span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;">A special supportive pregnancy cushion which accommodates your growing child throughout each trimester is used to allow you to lie on your stomach face down during the massage providing ultimate comfort and relaxation for up to 90 minutes.</span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;">Nausea, fatigue, anxiety and muscle soreness can put mums to be under added pressure and often lead to neck, shoulder, mid and low back pain.</span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;">Massage during pregnancy can include specific light and medium pressure massage, myofascial techniques, circulatory work and acupressure.</span></p>\r\n<p class="paragraphstyle2"><span style="font-size: medium;">POSTNATAL</span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;">New mothers do extra day to day work such as breast/bottle feeding, bathing, lifting/holding, placing in car seats, assembling prams etc. It is understandable that the pressures and extra muscle use can cause added soreness.</span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;">Postnatal massage can help relax, decrease stress, improve relaxation and unwind, aiding in improved sleep and easing muscles aches and pains.</span></p>\r\n<p><span style="font-size: medium;">Benefits:</span></p>\r\n<p><span style="font-size: medium;">-Reduces stress and promotes relaxation</span></p>\r\n<p><span style="font-size: medium;">-Provides emotional support</span></p>\r\n<p><span style="font-size: medium;">-Reduces and alleviates muscle and joint pain</span></p>\r\n<p><span style="font-size: medium;">-Relieves muscle spasms and cramps</span></p>\r\n<p><span style="font-size: medium;">-Soothes tension, fatigue, headaches and aids in regulating sleeping patterns</span></p>\r\n<p><span style="font-size: medium;">-Stimulates blood and lymph circulation and can reduce oedema, swelling, varicose veins and leg cramps</span></p>\r\n<p><span style="font-size: medium;">-Helps to maintain skin elasticity to ease stretch marks and uncomfortable tightness</span></p>\r\n<p class="paragraphstyle2"><span style="font-size: medium;">Information &amp; when to avoid massage?</span></p>\r\n<p class="paragraphstyle4"><span style="font-size: medium;">-Massage therapy during pregnancy is not intended to replace appropriate prenatal care, It is an assistant</span></p>\r\n<p class="paragraphstyle4"><span style="font-size: medium;">-Please provide and discuss any information your therapist may need to know about the history of your pregnancy or your current condition</span></p>\r\n<p class="paragraphstyle4"><span style="font-size: medium;">-Expectant mums considered high risk should wait until they are 12 weeks and obtain doctors consent</span></p>'),
(5, '5', '<p><span style="font-size: medium;">Prepare for your next major sporting event with an energising massage to revitalise tired muscles and minimise the risk of a sporting injury. Stretches can be incorporated to further enhance the massage allowing you to maximise your performance.</span></p>\r\n<p><span style="font-size: medium;">Pre-event massage stimulates circulation and helps to warm and stretch muscles; reducing the risk of injury. Sports massage is a deep vigorous massage designed to prepare your body to function optimally before an event or to relax &amp; recover after a strenuous workout. A massage designed to really stretch &amp; loosen you up. Focusing on specific muscles, tendons and joints relating to your specified sport. Designed to release any tight muscles, stretch the body and reduce the possibility of repetitive injuries.</span></p>\r\n<p><span style="font-size: medium;">General sports maintenance massage ensures that the mobility and flexibility of muscles, tendons and joints are optimised.</span></p>\r\n<p><span style="font-size: medium;">Sports Recovery Massage</span></p>\r\n<p><span style="font-size: medium;">Recovery massage is used to restore your muscles and release the build up of lactic acid. Recovery Massage encourages local muscular blood flow, which aids in the removal of toxins known to cause muscle soreness following training. It also reduces stiffness and speeds recovery time.</span></p>\r\n<p><span style="font-size: medium;">&nbsp;</span></p>'),
(6, '6', '<p><span style="font-size: medium;">Relaxation massage is a great way of taking timeout, relieving stress, reducing anxiety, encouraging healthy sleep patterns and to help you recharge by restoring your sense of wellbeing.</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">&nbsp;</span></p>\r\n<p class="paragraph_style_2"><span style="font-size: medium;">Massage reduces tension by using gentle and flowing strokes in the direction of the flow of blood returning to the heart to stimulate your skin, circulation, nervous system and allows the mind to relax leaving you feeling stress-free and slightly sleepy.</span></p>'),
(7, '7', '<p><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">WorkCover Accredited and Private Health Approved</span></p>\r\n<p class="paragraph_style_4"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">Providing health advice, relaxation and stretching techniques to your employees. Offering information on occupational health and safety issues in the workplace within employees work environments.</span></p>\r\n<p class="paragraph_style_4"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">Reward and rejuvenate your employees with some timeout during business hours to show your appreciation for all their hard work. Increase productivity with de-stressed and relaxed employees with massage.&nbsp;</span></p>\r\n<p class="paragraph_style_5"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="style_4">Please see the&nbsp;service</span><span class="style_4">&nbsp;menu for information on styles of massage available.</span></span></p>\r\n<p class="paragraph_style_5"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">&nbsp;</span></p>\r\n<p class="paragraph_style_6"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">Benefits of Workplace Massage</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Aids in ensuring a positive outlook towards the company by its employees</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Performance (time schedules finished ahead of time)</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Encourages people to come to work for massage day</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">&nbsp;</span></p>\r\n<p class="paragraph_style_6"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">Benefits for Employers</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Recruit &amp; retain top employees</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Provides employees an avenue to discuss and address health issues with a registered professional</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Demonstrate commitment to the health and wellbeing of employees</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Reduce sick leave time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Recruitment costs (decrease employee turnover)</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Reduced health care costs from WorkCover claims and sick days</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Reduce workplace injuries / accidents</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Improve interpersonal office and customer relations</span></p>\r\n<p class="paragraph_style_9"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">&nbsp;&nbsp;</span></p>\r\n<p class="paragraph_style_6"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">Benefits for Employees</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Increase energy and productivity</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Improves and maintains overall well being of employees, both mentally and physically</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Relieves muscle tension in neck, shoulders, back, wrists and hands from the daily use of computers.</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Relieves tension headaches and muscular aches and pains</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Decrease stress and tension</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Prevent injuries and accidents</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Heighten body and postural awareness</span></p>\r\n<p class="paragraph_style_7"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Diminish or eliminate pain</span></p>\r\n<p class="paragraph_style_10"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">&nbsp;</span></p>\r\n<p class="paragraph_style_6"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">This service is also available to:</span></p>\r\n<p class="paragraph_style_10"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">Team, social and private events and functions</span></p>\r\n<p class="paragraph_style_11"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Sports event massage</span></p>\r\n<p class="paragraph_style_11"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Mothers group massage</span></p>\r\n<p class="paragraph_style_11"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Wedding event massage</span></p>\r\n<p class="paragraph_style_11"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Open day massage</span></p>\r\n<p class="paragraph_style_11"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;"><span class="Bullet">-</span>Conference massage</span></p>\r\n<p class="paragraph_style_10"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">&nbsp;</span></p>\r\n<p class="paragraph_style_10"><span style="font-family: avant_guardregular,arial,sans-serif; font-size: medium;">Weekday and weekend booking times are available. One or multiple&nbsp;therapists can be provided. All staff are fully qualified and highly skilled.</span></p>'),
(8, '8', '<p><span style="font-size: medium;">Event massage</span></p>'),
(9, '9', '<p><span style="font-size: medium; color: #000000;">Other massage.</span></p>'),
(11, 'prices', '<center>\r\n<h2 style="text-align: center;">WorkSafe Victoria Remedial Massage Service Fee Schedule</h2>\r\n<h2 style="text-align: center;"><a title="Work Safe" href="http://www.worksafe.vic.gov.au/__data/assets/pdf_file/0009/20331/RemMassage-Fee_12.pdf" target="_blank">Click here</a></h2>\r\n<p style="text-align: center;">&nbsp;</p>\r\n</center><center>\r\n<h2 style="text-align: center;"><span style="font-family: avant_guardregular, arial, sans-serif; font-size: medium;">CANCELLATION POLICY</span></h2>\r\n<p style="text-align: center;"><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Please provide a minimum of 24 hours notice for any alterations to appointment times by telephone. This allows other clients the opportunity to book the specified time. 100% cancellation fee applies to cancellations without sufficient notice. This also applies If you do not attend your appointment and have not told us.</span></p>\r\n<h2 style="text-align: center;"><span style="font-family: avant_guardregular, arial, sans-serif; font-size: medium;">GIFT VOUCHER CANCELLATION POLICY</span></h2>\r\n<p style="text-align: center;"><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">We have a strict 24hour cancellation policy.</span><br /><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">We cannot offer a refund for the cancellation of treatments that have been pre-paid with a gift voucher.</span><br /><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">We are happy to reschedule your appointment before the expiry date of the gift voucher with the minimum notice requirements.</span><br /><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">If you do not attend your appointment and we have not been notified, your gift voucher will be void.</span></p>\r\n</center>'),
(12, 'aboutus', '<p style="text-align: left;"><strong>YOUR THERAPIST<br /></strong></p>\r\n<p style="text-align: left;">Megan Laraia</p>\r\n<p><img style="float: left;" src="/team04/DEVELOPMENT/cakeMuscle/uploads/P1020881.png" alt="" width="133" height="190" />Megan Laraia is a dedicated Remedial and Pre &amp; Postnatal Massage therapist. Qualified in 2005 as a Remedial Therapist Megan has worked with Melbourne Storm Rugby League for 8 years and regularly works with and supplies staff for multiple national and international sports teams.</p>\r\n<p class="paragraph" style="text-align: justify;">Megan also has a keen interest and a great understanding in Pre and Postnatal Massage and has upskilled to a Diploma of Pregnancy Massage in 2012.</p>\r\n<p class="paragraph" style="text-align: justify;">Mums to be, often follow Megan all the way through from their first, second and third trimester for her outstanding prenatal massage care.</p>\r\n<p class="paragraph" style="text-align: justify;">Megan even makes special hospital visits for treatment if required.</p>\r\n<p class="paragraph" style="text-align: justify;">With an intuitive and understanding approach you can be sure you are in good hands with Megan as an all rounded therapist.</p>\r\n<p class="paragraph" style="text-align: justify;">Utilising preventitive measures, Megan will most likely send you home with a little homework to manage your condition.</p>\r\n<p class="paragraph" style="text-align: justify;">Rest assured your treatment will be specifically tailored to your needs.</p>\r\n<p class="paragraph" style="text-align: justify;">To make an appointment with Megan, telephone 0451 118 071 or take a look at the online bookings.</p>\r\n<p class="paragraph" style="text-align: justify;">&nbsp;</p>\r\n<p class="paragraph" style="text-align: justify;"><strong style="font-size: medium;">Qualifications:</strong></p>\r\n<p class="paragraph" style="text-align: justify;">Remedial Therapy Diploma</p>\r\n<p class="paragraph" style="text-align: justify;">Pregnancy Massage Diploma</p>\r\n<p class="paragraph" style="text-align: justify;">Cupping</p>\r\n<p class="paragraph" style="text-align: justify;">Senior First Aid&nbsp;&nbsp;</p>\r\n<p class="paragraph" style="text-align: justify;">&nbsp;</p>\r\n<p class="paragraph" style="text-align: justify;">&nbsp;</p>\r\n<p class="paragraph" style="text-align: justify;">&nbsp;</p>'),
(16, 'faq', '<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>FAQ''S</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. Who should see a RMT practitioner?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Anyone! Whether you are an athlete, office worker, parent or&nbsp;student &ndash; no matter what you do, if you are suffering soreness, tightness or pain in any muscle or joint, or if something is just ''not quite right'', an RMT session is for you.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. Can I claim RMT on Private Health Insurance cover?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">In most cases, yes. However, this will depend on the type of cover you have, which insurer you are with and how often you have claimed previously. Some insurers have a limit to the quantity of RMT sessions that can be claimed per sector. We recommend that you check with your health fund as to what you are covered for, to avoid any unexpected costs. </span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. What should I bring/weat to a RMT appointment?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">You should bring any information, referrals or medication that is relevant to your health and current musculoskeletal complaint to your appointment. Wearing firm fitting underwear is a must.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Your comfort as a client is of the utmost to all Registered Massage Therapists, whether that is in the context of the clothing you wear or the treatment you receive. Massage Therapists can provide treatment whether you elect to remove any, some, or all of your clothing (except for underwear). All RMTs are trained in proper draping procedures to ensure that your privacy is completely respected at all times during treatment. Your comfort and ability to relax is paramount to effective treatment.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. How can Massage Therapy help me?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Massage therapy can be beneficial to people of all ages and conditions and is widely used to help obtain relief from many specific problems, including:</span></p>\r\n<pre><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>Inflammatory conditions such as arthritis and tendinitis</em></span></pre>\r\n<pre><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>Stress relief and associated conditions</em></span></pre>\r\n<pre><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>Headaches and migraines</em></span></pre>\r\n<pre><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>Muscle and related conditions such as spasms, strains and sprains</em></span></pre>\r\n<pre><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>Back pain</em></span></pre>\r\n<pre><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>Repetitive strain injury</em></span></pre>\r\n<pre><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>Circulatory and Respiratory problems</em></span></pre>\r\n<pre><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>Pregnancy and labour discomfort</em></span></pre>\r\n<pre><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>Post-injury and post-surgical rehabilitation</em></span></pre>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. Will my Massage Therapist keep my information private?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">As regulated health professionals, Massage Therapists are required as a part of the standards set by the Australian Association of Massage Therapists (AAMT) to maintain the information you provide, both verbally and in written form, in the strictest of confidence.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Information that is collected about clients may be collected only with consent, may only be disclosed with consent or to your immediate health providers (circle of care), and must be secured and maintained.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. What are your Payment Policies?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">All payments are paid in Cash. Full payment is required on the day for all appointments including WorkCover. Private health insurance - you may receive a rebate once you submit your receipt.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. WorkCover</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Please bring any information, case manager details and referrals that are relevant to your health and current musculoskeletal complaint to your appointment. Full payment is required on the day of all appointments. You will recieve a receipt and a copy is&nbsp;also emailed to your case manager to ensure you recieve a speedy reimbursement.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. What is the cancellation policy?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Please provide a minimum of 24 hours notice for any alterations to appointment times by telephone. This allows other clients the opportunity to book the specified time. 100% cancellation fee applies to cancellations without sufficient notice. This also applies if you do not attend your appointment and have not told us.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">GIFT VOUCHER CANCELLATION POLICY</span><br /><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">There are no refunds for cancellation of treatments that have been pre-paid&nbsp;with a&nbsp;gift vouchers. We&nbsp;are happy to reschedule your apppointment before the expiry date of the gift voucher. If you do not attend your appointment and have not told us or do not give a minimum of 24hours&nbsp;cancellation notice&nbsp;your gift voucher will be void.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. What if I am running late for my appointment?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">Please inform us as early as possible if you are running late for you appointment. You will be seen but your appointment will be shortened to your booking length and you will be charged the full amount.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. What happens on the first visit?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">On the first visit you will arrive 5minutes before your scheduled service and complete a confidential health history as part of your assessment. This is important as the Massage Therapist needs to know if you have any medical conditions or are taking any medications. The Massage Therapist will listen to your concerns, assess your individual needs as well as other factors that may be contributing to your injury (lifestyle, nutritional status, etc.).&nbsp;A treatment plan&nbsp;will be developed&nbsp;with you to ensure you receive appropriate treatment that will help you return, as much as possible, to your normal activities. Registered Massage Therapists will also describe the treatments to be provided to ensure that you are comfortable with them. Your consent is sought before treatment is provided. If you are uncomfortable, your RMT wants you to let them know immediately, whether that discomfort involves the treatment, draping or any pain you may experience.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><strong>Q. How frequently should I come for massage treatments?</strong></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">The frequency of visits for massage therapy depends on the condition being treated. Therefore, it is on a case specific basis. In general, specific injuries will require regular visits for a designated period of time to restore the normal function of the area. The massage therapist will discuss a treatment schedule with you once the problem area has been properly assessed. Those people who do not have a specific injury per se however seek massage treatments for maintenance or preventative reasons generally will require 1-2 visits per month. This again is a guideline and may require modification depending on the patient.</span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;"><em>We strive to maintain your optimum personal comfort levels so please let us know if you have any concerns or issues at the beginning of the session.</em></span></p>\r\n<p><span style="font-size: medium; font-family: avant_guardregular, arial, sans-serif;">&nbsp;</span></p>'),
(17, 'provider', '<p><span style="font-size: x-large; color: #ff9900;"><strong>PREFERRED PROVIDERS</strong></span></p>\r\n<p><strong><span style="color: #000000; font-size: medium;">Balaclava-St Kilda Physiotherapy Centre <img style="margin-right: auto; margin-left: auto; float: right; display: block;" src="/team04/DEVELOPMENT/cakeMuscle/uploads/square1.gif" alt="" width="117" height="78" /><span style="color: #333333;"><br /></span></span></strong><span style="color: #000000; font-size: small;"><span class="style4"><span class="style5"><span style="color: #006600;"><span style="color: #333333;">87 Hotham Street<br /></span></span></span></span></span><span style="color: #000000; font-size: small;"><span class="style4"><span class="style5"><span style="color: #006600;"><span style="color: #333333;">Balaclava VIC 3183<br /></span></span></span></span></span><span style="color: #000000; font-size: small;"><span style="font-family: Arial, Helvetica, sans-serif; color: #333333;">Telephone: 03 9527 7532<br /></span></span><span style="color: #000000; font-size: small;"><span style="font-family: Arial, Helvetica, sans-serif; color: #333333;"><a href="http://www.bspc.com.au/default.htm">http://www.bspc.com.au/default.htm</a></span></span></p>\r\n<address>&nbsp;</address>\r\n<p><span style="color: #000000; font-size: medium;"><span style="font-family: Arial, Helvetica, sans-serif; color: #333333;"><strong>Elsternwick Osteopathy<br /></strong></span></span><span style="color: #000000; font-size: small;"><span style="font-family: Arial, Helvetica, sans-serif; color: #333333;">First Floor, 330 Glen Eira Rd <br /></span></span><span style="color: #000000; font-size: small;"><span style="font-family: Arial, Helvetica, sans-serif; color: #333333;">Elsternwick VIC 3185<br />Telephone: (03) 9530 0044<br /></span></span><span style="color: #000000; font-size: small;"><span style="font-family: Arial, Helvetica, sans-serif; color: #333333;"><a href="http://www.elsternwickosteopathy.com.au/index.html">http://www.elsternwickosteopathy.com.au/index.html</a></span></span>&nbsp;</p>'),
(18, 'contactus', '<p><span style="font-size: x-large; color: #ff9900;"><strong>CONTACT US</strong></span></p>\r\n<p><span style="font-size: medium;"><strong>HOW TO GET THERE...</strong></span></p>\r\n<p><span style="font-size: medium;">178 Hotham St, Elsternwick, 3185 VIC.&nbsp;No walk-ins, bookings are essential</span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;"><strong>By car:</strong></span></p>\r\n<p class="paragraphstyle4"><span style="font-size: medium;">Conveniently located close to Ripponlea shopping strip, Muscleworks Massage has unrestricted parking in front of the private practice and 2 hour parking across the street readily available.</span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;"><strong>By public transport (Zone 1):</strong></span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;"><strong>Train</strong></span></p>\r\n<p class="paragraphstyle4"><span style="font-size: medium;">Ripponlea Station (Sandringham Line). Short 3 min. walk to the private practice.</span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;"><strong>Bus</strong></span></p>\r\n<p class="paragraphstyle4"><span style="font-size: medium;">216 (Caroline Springs to Brighton Beach), 219 (Sunshine Park to Gardenvale). Stop: Glen Eira Rd/ Hotham Street. Short 30 sec. walk to the private practice.</span></p>\r\n<p class="paragraphstyle3"><span style="font-size: medium;"><strong>Tram</strong></span></p>\r\n<p><span style="font-size: medium;">67 (Melbourne to Carnegie), Stop 39: Glen Eira Rd/ Brighton Rd, 5 minute walk to the private practice.</span></p>\r\n<p><span style="font-size: medium;">&nbsp;<a href="http://maps.google.com.au/maps?q=178+hotham+street+elsternwick&amp;ie=UTF8&amp;hq=&amp;hnear=178+Hotham+St,+Elsternwick+Victoria+3185&amp;gl=au&amp;t=m&amp;ll=-37.872143,145.005112&amp;spn=0.023714,0.036478&amp;z=14&amp;iwloc=A&amp;source=embed">View Larger Map</a></span></p>\r\n<p><span style="font-size: medium;">&nbsp;<iframe src="http://maps.google.com.au/maps?q=178+hotham+street+elsternwick&amp;ie=UTF8&amp;hq=&amp;hnear=178+Hotham+St,+Elsternwick+Victoria+3185&amp;gl=au&amp;t=m&amp;ll=-37.872143,145.005112&amp;spn=0.023714,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="425" height="350"></iframe></span></p>\r\n<p class="paragraph_style_1" style="text-align: left;"><span style="font-size: medium;">&nbsp;</span></p>\r\n<p><span style="font-size: medium;">&nbsp;</span></p>\r\n<p style="text-align: right;"><span style="font-size: medium;">&nbsp;</span></p>'),
(23, 'corpmsg', '<h2 style="text-align: center;">To discuss your corporate, event or sports massage needs please call 0451118071 or email:<a href="mailto:muscleworksmassage@live.com.au">muscleworksmassage@live.com.au</a>&nbsp;with your requirements.&nbsp;</h2>'),
(24, 'address', '<p><span style="color: #996633; font-size: small;"><strong><span style="font-family: avant_guardregular, arial, sans-serif;">178 Hotham St Elsternwick, 3185</span></strong></span></p>'),
(25, 'phone', '<p><span style="font-size: large; color: #996633; font-family: avant_guardregular, arial, sans-serif;"><strong>0451 118 071</strong></span></p>'),
(26, 'details', '<h2><span style="font-size: medium;">TELEPHONE</span></h2>\r\n<p><span style="font-size: x-small;">&nbsp;</span></p>\r\n<p><span style="font-size: xx-large; color: #996633;">0451 118 071</span></p>\r\n<h2><span style="font-size: x-small;">&nbsp;</span></h2>\r\n<h2><span style="font-size: medium;">HOURS</span></h2>\r\n<p><span style="font-size: medium;"><span style="color: #996633;">Monday-Friday<br /></span><span style="color: #996633;">8am-7pm</span></span></p>\r\n<h2><span style="font-size: x-small;">&nbsp;</span></h2>\r\n<h2><span style="font-size: medium;">EMAIL</span></h2>\r\n<p><span style="color: #996633; font-size: x-small;"><a href="mailto:muscleworksmassage@live.com.au"><span style="color: #996633;">muscleworksmassage@live.com.au</span></a></span></p>\r\n<h2><span style="font-size: x-small;">&nbsp;</span></h2>\r\n<h2><span style="font-size: medium;">LOCATION</span></h2>\r\n<p><span style="font-size: x-small; color: #996633;"><a href="/team04/DEVELOPMENT/cakeMuscle/pages/contactus"><span style="color: #996633;">178 Hotham St Elsternwick, 3185</span></a></span></p>\r\n<p><span style="font-size: x-small;"><iframe src="http://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=178+Hotham+Street,+Elsternwick,+Victoria&amp;aq=0&amp;oq=178+hotham+&amp;sll=-37.860283,145.079616&amp;sspn=1.136271,2.705383&amp;ie=UTF8&amp;hq=&amp;hnear=178+Hotham+St,+Elsternwick+Victoria+3185&amp;t=m&amp;ll=-37.877699,144.998159&amp;spn=0.020324,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="300"></iframe></span><br /><span style="font-size: x-small; color: #996633;"><small><a style="color: #0000ff; text-align: left;" href="http://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=178+Hotham+Street,+Elsternwick,+Victoria&amp;aq=0&amp;oq=178+hotham+&amp;sll=-37.860283,145.079616&amp;sspn=1.136271,2.705383&amp;ie=UTF8&amp;hq=&amp;hnear=178+Hotham+St,+Elsternwick+Victoria+3185&amp;t=m&amp;ll=-37.877699,144.998159&amp;spn=0.020324,0.025749&amp;z=14&amp;iwloc=A"><span style="color: #996633;">View Larger Map</span></a></small></span></p>'),
(28, 'header', '<p><img src="/team04/DEVELOPMENT/cakeMuscle/uploads/header2.png" alt="" width="990" height="180" /></p>'),
(29, 'rem pic', '<p><img src="/team04/DEVELOPMENT/cakeMuscle/uploads/remedial2.png" alt="" width="250" height="195" /></p>'),
(30, 'nat pic', '<p><img src="/team04/DEVELOPMENT/cakeMuscle/uploads/natal.png" alt="" width="250" height="195" /></p>'),
(31, 'sport pic', '<p><img src="/team04/DEVELOPMENT/cakeMuscle/uploads/sports.png" alt="" width="243" height="195" /></p>'),
(32, 'rlx pic', '<p><img src="/team04/DEVELOPMENT/cakeMuscle/uploads/square1.gif" alt="" width="168" height="128" /></p>'),
(33, 'corp pic', '<p><img src="/team04/DEVELOPMENT/cakeMuscle/uploads/muscle.png" alt="" width="250" height="175" /></p>'),
(34, 'evnt pic', '<p><img src="/team04/DEVELOPMENT/cakeMuscle/uploads/square1.gif" alt="" width="168" height="128" /></p>'),
(35, 'oth pic', '<p><img src="/team04/DEVELOPMENT/cakeMuscle/uploads/other.png" alt="" width="250" height="195" /></p>'),
(36, 'home pic', '<p><img src="/team04/DEVELOPMENT/cakeMuscle/uploads/muscle.png" alt="" width="250" height="175" /></p>'),
(37, 'pan', '<p>pan</p>');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `minutes` int(11) NOT NULL,
  `value` varchar(5) NOT NULL,
  `stdvalue` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `minutes`, `value`, `stdvalue`) VALUES
(2, 30, 'N/A', 55),
(3, 45, '70', 70),
(4, 60, '85', 85),
(9, 75, '105', 105),
(13, 90, 'n/a', 120),
(14, 2, '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `pagename` varchar(50) DEFAULT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `pagename`, `created`) VALUES
(3, 'REMEDIAL MASSAGE', '3', '2013-05-11'),
(4, 'PRE/POSTNATAL MASSAGE', '4', '2013-05-18'),
(5, 'SPORTS MASSAGE', '5', '2013-05-18'),
(6, 'RELAXATION MASSAGE', '6', '2013-05-18'),
(7, 'CORPORATE MASSAGE ', '7', '2013-05-22'),
(8, 'EVENT MASSAGE', '8', '2013-05-18'),
(9, 'OTHER', '9', '2013-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `taxvouchers`
--

CREATE TABLE IF NOT EXISTS `taxvouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_name` varchar(50) NOT NULL,
  `phoneNumber_1` varchar(10) NOT NULL,
  `from_email` varchar(50) NOT NULL,
  `to_name` varchar(50) NOT NULL,
  `date_purchase` date NOT NULL,
  `price` float NOT NULL,
  `message` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'unredeemed',
  `payment` varchar(10) NOT NULL DEFAULT 'unpaid',
  `payment_method` varchar(20) NOT NULL DEFAULT 'PayPal',
  `UUID` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=795 ;

--
-- Dumping data for table `taxvouchers`
--

INSERT INTO `taxvouchers` (`id`, `from_name`, `phoneNumber_1`, `from_email`, `to_name`, `date_purchase`, `price`, `message`, `status`, `payment`, `payment_method`, `UUID`) VALUES
(749, 'AAAA', '0410112916', 'zhangluqi16@gmail.com', 'ZZZZ', '2013-06-26', 70, 'sss', 'redeemed', 'paid', 'Cash', '01055fedad58f1885e2646cf3a0012122b711da6'),
(767, 'ASDSAD', '1234567890', 'adad@fff.com', 'A', '2013-03-27', 55, 'f', 'expired', 'unpaid', '', '81755a2845e39420c81902a3ce83dff1cfc782e7'),
(792, 'REAL PAYPAL TEST', '0412345678', 'z@123.com', 'ZZZZ', '2013-02-01', 55, 'zzz', 'expired', 'paid', 'PayPal', '96e388c0b3b7fd874b48621e850335a8f06ca58d'),
(793, 'REAL PAYPAL TEST', '0412345678', 'z@123.com', 'ZZZZ', '2013-07-01', 55, 'zzz', 'redeemed', 'paid', 'PayPal', '6fe3dfe314684a658c1b19ca7a8e3abd29afe23e'),
(794, 'PAYPAL TEST', '0412345678', 'zhangluqi16@gmail.com', 'SDSADSAD', '2013-07-01', 55, 'dsadsad', 'redeemed', 'paid', 'PayPal', '41990bc354116362c6e6e8aa088d4e703104e6f7');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Service` mediumtext NOT NULL,
  `content` mediumtext NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Unpublished',
  `created` varchar(20) NOT NULL,
  `consent` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `Name`, `Service`, `content`, `status`, `created`, `consent`) VALUES
(89, 'M Mckenzie', 'REMEDIAL MASSAGE', 'For so long now I have had a really achy and sore back and with my job it was only getting worse! I found out about Muscleworks Massage through my gym, they supported a challenge we were doing and I won a voucher! I went along and have been blown away with my results. Megan paid particular attention to any injuries or concerns I had and we address these each time. I use to suffer from a lot of headaches and since coming to muscle works these have reduced. I am about to have my 4th treatment and its the best decision I have made! Try it! It''s great!', 'Published', '14/06/2013', 'Yes'),
(90, 'J Sutherland', 'RELAXATION MASSAGE', 'I have been a client of Megan at Muscleworks Massage for approximately 2 years and would highly recommend Megan''s magic hands. Megan''s professionalism, warm friendly disposition and remedial massage expertise is commendable and my many visits have resolved my numerous problems. ', 'Published', '15/06/2013', 'Yes'),
(91, 'TK', 'SPORTS MASSAGE', 'Megan runs a professional, caring and highly knowledgeable practice. Great follow up on progress of my injury and liaised well with other health care professionals that I had visited. Highly recommend a visit if in need of a sports massage. ', 'Published', '18/06/2013', 'Yes'),
(92, 'C Wilson', 'SPORTS MASSAGE', 'I have now had several sessions with Megan at Muscleworks Massage and every time I have had a successful outcome. Megan is quite thorough in her pre treatment interaction and can tailor a session specific to your needs. I recently had a maintenance session with Megan and although I thought I did not have anything outstanding, Megan managed to target previous soreness areas and also address areas that were well overdue for treatment without my knowledge. The service is prompt, personal and individual and Megan has good advice on areas to be aware of and to treat yourself between treatments. I highly believe and trust in Megan''s treatments that I have also directed friends and athletes to Megan''s Muscleworks Massage practice.', 'Published', '13/06/2013', 'Yes'),
(94, 'J Ferguson', 'RELAXATION MASSAGE', 'I suffer from headaches due to my poor posture and working behind a computer, so I am a regular customer of Muscleworks Massage because it elimantes the pain and even prevents problems developing. I also like massage for stress relief and relaxation, so I would definitely recommend Muscleworks as part of your regular health regime. Excellent, professional service and very well priced.', 'Published', '14/06/2013', 'Yes'),
(95, 'E Gorman', 'RELAXATION MASSAGE', 'Professional, welcoming and relaxing. As I work in a hands on profession, I find I need to keep up to date with looking after myself. This in turn prevents any problems from developing and treats any pre-existing issues. My fortnightly visits to Megan and Muscleworks Massage are a must. Results driven yet totally relaxing. I highly recommend Muscleworks Massage!', 'Published', '14/06/2013', 'Yes'),
(111, 'Kelly', 'PRE/POSTNATAL MASSAGE', 'I was lucky enough to have a pregnancy massage from Megan recently and I highly recommend Megan. \r\nWhether you are pregnant or not a massage from Megan will leave you feeling great. After a stressful week, I left feeling relaxed and light.', 'Published', '20/06/2013', 'Yes'),
(112, 'Lisa', 'CORPORATE MASSAGE ', 'Highly recommend the great work of Megan at Muscleworks Massage. She recently helped me reduce pain and discomfort in my shoulders and neck - worked miracles. Huge thanks', 'Published', '20/06/2013', 'Yes'),
(122, 'Gb', 'EVENT MASSAGE', 'Gbevent test', 'Unpublished', '25/06/2013', 'No'),
(123, 'Gailtestone', 'SPORTS MASSAGE', 'Hubs', 'Unpublished', '25/06/2013', 'No'),
(124, 'srd', 'REMEDIAL MASSAGE', 'sdcxv', 'Unpublished', '27/06/2013', 'Yes'),
(125, 'Gab', 'EVENT MASSAGE', 'Good test', 'Unpublished', '29/06/2013', 'Yes'),
(126, 'Gbtwo', 'EVENT MASSAGE', 'Test two event', 'Published', '29/06/2013', 'Yes'),
(127, 'Gbthree', 'EVENT MASSAGE', 'Gbthree', 'Published', '29/06/2013', 'Yes'),
(128, 'Gbfour', 'EVENT MASSAGE', 'Gv four ', 'Published', '29/06/2013', 'Yes'),
(129, 'Gbfive', 'EVENT MASSAGE', 'Gbfive', 'Unpublished', '29/06/2013', 'Yes'),
(134, 'Gb', 'REMEDIAL MASSAGE', 'Tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt', 'Unpublished', '02/07/2013', 'Yes'),
(135, 'Gb', 'REMEDIAL MASSAGE', 'Tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt', 'Published', '02/07/2013', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','regular') NOT NULL DEFAULT 'regular',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`) VALUES
(3, 'Erol', 'ectan6', 'ectan6@student.monash.edu', '0987b13ec449de76db9ba2e54e2aea72ee7bd042', 'regular'),
(4, 'megan', 'megan', 'ganeliselaraia@hotmail.com', 'a39165f62b228365171fb7302515416af8796639', 'regular'),
(7, 'ishan', 'ishan', 'reddyishan90@gmail.com', 'f33f4318b9cdc6224807b6cba74a243d11c7ce72', 'regular'),
(8, 'gail bourne', 'gbourne', 'gail.bourne@monash.edu', '0987b13ec449de76db9ba2e54e2aea72ee7bd042', 'regular'),
(9, 'ishan', 'mahima', 'kallamahima@gmail.com', '2f1b0f7328151c8db30ad06ebdb0b8b3511aeb2a', 'regular'),
(10, 'admin2', 'admin2', 'admin@qq.com', '4675ea3e3b73f0cd42f03502879a13be875ed2cb', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE IF NOT EXISTS `vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_name` varchar(50) NOT NULL,
  `phoneNumber_1` varchar(10) NOT NULL,
  `from_email` varchar(50) NOT NULL,
  `to_name` varchar(50) NOT NULL,
  `date_purchase` date NOT NULL,
  `price` float NOT NULL,
  `message` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'unredeemed',
  `payment` varchar(50) NOT NULL DEFAULT 'unpaid',
  `email_sent` varchar(50) NOT NULL DEFAULT 'No',
  `payment_method` varchar(20) NOT NULL DEFAULT '  PAYPAL/CC',
  `UUID` varchar(100) NOT NULL DEFAULT ' ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=862 ;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `from_name`, `phoneNumber_1`, `from_email`, `to_name`, `date_purchase`, `price`, `message`, `status`, `payment`, `email_sent`, `payment_method`, `UUID`) VALUES
(658, 'GAILTEST GV TWO', '1234567890', 'Gail.bourne@monash.edu', 'STEVE', '2013-05-26', 120, 'Hbtestgvtwo', 'unredeemed', 'paid', 'No', 'PayPal', 'f597ae7c454f8d38ef01b322ad0cdbaa40040e7a'),
(660, 'GAIL', '0403507060', 'zhangluqi16@gmail.com', 'LUQI', '2013-06-26', 55, 'sdsadsad', 'unredeemed', 'paid', 'No', 'Cash', '6765c043a097743fe613e347c1cd7f770096750d'),
(675, 'LUQI', '0412345678', 'zlq916@xnmsn.com', 'ZZZZ', '2013-06-26', 55, 'ccc', 'unredeemed', 'paid', 'No', 'PayPal', 'fcd72fa5e79091747b312d4bdf3a5368d2be87b3'),
(677, 'SSS', '0451118071', 'zlq916@xnmsn.com', 'DDD', '2013-06-26', 55, 'dd', 'unredeemed', 'paid', 'No', 'PayPal', 'e0cc7b71e9bf62b758889fa83aa7335372f79de0'),
(753, 'TEST A', '0412345678', 'zlq916@xnmsn.com', 'TEST', '2013-06-26', 55, 'happy! happy! happy! happy! happy! happy! happy! happy! happy! happy! ', 'unredeemed', 'paid', 'No', 'PayPal', 'c32a67a05e6b1c8b7a2b48059cdcd5007a4a0900'),
(754, 'AAAA', '0410112916', 'zhangluqi16@gmail.com', 'ZZZZ', '2013-06-27', 70, 'sss', 'unredeemed', 'unpaid', 'No', 'PayPal', 'b246c7491a540d40da2bfe4e6780620f4f926797'),
(756, 'SADSAD', '0410112916', 'zhangluqi16@gmail.com', 'DSADSA', '2013-06-26', 55, 'dsadsad', 'unredeemed', 'paid', 'No', 'PayPal', '8989f7bc2eb8e9ae09553acd93f997372f7add7b'),
(758, 'AAAS', '0412345678', 'A@gg.com', 'DODD', '2013-06-27', 55, 'Dsd', 'unredeemed', 'unpaid', 'No', '  ', '82a50612a57ad5c00b0df9bafbcd379d25c6fbda'),
(759, 'GAILB', '1234567890', 'Gail.bourne@monash.edu', 'STEVE', '2013-06-27', 85, 'Test hold one\r\nH', 'unredeemed', 'paid', 'No', 'PayPal', 'dcdee608f07355c48e6f028cb5790c7c436fc3be'),
(760, 'GB', '1234567890', 'Gail.bourne@monash.edu', 'STE TEST FOUR', '2013-06-27', 85, 'Test four psypal', 'unredeemed', 'paid', 'No', 'PayPal', '1382ac8c6624ca5424ef3baa3d79f3d9f051d913'),
(761, 'AAAA', '0412345678', 'zlq916@xnmsn.com', 'DDDD', '2013-06-27', 55, 'ddddd', 'unredeemed', 'paid', 'No', 'PayPal', '8d1218244d96823a1ecdf1b383e010d29b57a3cc'),
(762, 'LUQI', '0412345678', 'zlq916@xnmsn.com', 'DONGDONG', '2013-06-27', 85, 'hello hello hello hello hello hello hello', 'unredeemed', 'unpaid', 'No', '  ', 'c99a2a26bd03c1536aa7684d3acb54914f099b3f'),
(763, 'RED', '0412345678', 'zlq916@xnmsn.com', 'RED', '2013-06-27', 55, 'hello', 'unredeemed', 'paid', 'No', 'PayPal', 'e1de5f7134a427a6c9098ddecdf8e461eb8c8cda'),
(764, 'ASDSAD', '1234567890', 'adad@fff.com', 'A', '2013-06-27', 55, 'f', 'unredeemed', 'unpaid', 'No', '  ', 'b5586099944014e589f483efe663318aa1979d56'),
(765, 'ASDSAD', '1234567890', 'adad@fff.com', 'A', '2013-06-27', 55, 'f', 'unredeemed', 'unpaid', 'No', '  ', 'e1f463f56b2a3203d08ed5a49e11a775cde98a50'),
(766, 'ASDSAD', '1234567890', 'adad@fff.com', 'A', '2013-06-27', 55, 'f', 'unredeemed', 'unpaid', 'No', '  ', '581a8ed69cf5d505b989c438becd65e37c8de61e'),
(768, 'ASDSAD', '1234567890', 'adad@fff.com', 'A', '2013-06-27', 55, 'f', 'unredeemed', 'unpaid', 'No', '  ', 'ad2ad593b7a4db4d077dc9f94444092aad698ee9'),
(769, 'LLL', '0412345679', 'zzz@qq.com', 'FFFFF', '2013-06-27', 55, 'Yyyy', 'unredeemed', 'unpaid', 'No', '  ', '98079d38abe094b7ecaaf37b3519525df0abb891'),
(771, 'LUQI TEST', '0412345678', 'zlq916@xnmsn.com', 'AAA', '2013-06-27', 55, 'aaa', 'unredeemed', 'unpaid', 'No', '  ', '5d0fb669fb61cd51405bd09c1ac7e36a7407de8d'),
(772, 'TEST CASH', '0410112916', 'zhangluqi16@gmail.com', 'ZZZZ', '2013-06-27', 55, 'zzzz', 'unredeemed', 'unpaid', 'No', '', 'd04d5003325c314117f803a6ead6b45503e8dd8b'),
(773, 'TEST CASH', '0410112916', 'zhangluqi16@gmail.com', 'ZZZZ', '2013-06-27', 55, 'zzzz', 'unredeemed', 'unpaid', 'No', 'Cash', '190c4a70068f9453e2320b650e94869a1306adb0'),
(774, 'TEST CASH', '0410112916', 'zhangluqi16@gmail.com', 'ZZZZ', '2013-06-27', 55, 'zzzz', 'unredeemed', 'unpaid', 'No', 'Cash', '66c4d1ec6dadbb7073bb7c5132e479ca4d2b59cf'),
(775, 'TEST CASH', '0403507069', 'z@qq.com', 'ASDASDSADASD', '2013-06-27', 55, 'dsadsad', 'unredeemed', 'unpaid', 'No', 'Cash', 'ccd04939f25266ed88d9dbb3eb298866911b04f4'),
(776, 'DSDSAD', '0425023640', 'qq@qq.com', 'ZZZZ', '2013-06-28', 55, 'fffff', 'unredeemed', 'unpaid', 'No', '  ', '0aed854dc1ed3c76a4caff5ed4057ff16817cf30'),
(777, 'AAAA', '0412345678', 'zhangluqi16@gmail.com', 'AAAA', '2013-06-28', 55, 'hello! hello! hello! hello! hello! hello!', 'unredeemed', 'unpaid', 'No', '  ', 'fc7a734dba518f032608dfeb04f4eeb79f025aa7'),
(778, 'AAAA', '0412345678', 'zhangluqi16@gmail.com', 'AAAA', '2013-06-28', 55, 'hello! hello! hello! hello! hello! hello!', 'unredeemed', 'unpaid', 'No', '  ', '3aef3636924191a3e18fabc850c496f7e4110691'),
(779, 'AAAA', '0412345678', 'zhangluqi16@gmail.com', 'AAAA', '2013-06-28', 55, 'hello! hello! hello! hello! hello! hello!', 'unredeemed', 'unpaid', 'No', '  ', '63573d008f93d619a8743d27c55d58dcaab1c28d'),
(780, 'AAAA', '0412345678', 'zhangluqi16@gmail.com', 'AAAA', '2013-06-28', 55, 'hello! hello! hello! hello! hello! hello!', 'unredeemed', 'unpaid', 'No', 'Cash', '1dd4b9d8e432a99a58165a17dd67e5bd8791272e'),
(781, 'AAAA', '0410112916', 'zhangluqi16@gmail.com', 'SSSS', '2013-06-28', 55, 'sss', 'unredeemed', 'paid', 'No', 'PayPal', 'c7e47b848aa68e937064a4420912fd41492a96fd'),
(782, 'GB', '1234567890', 'Gail.bourne@monash.edu', 'SI', '2013-06-29', 105, 'Testing', 'unredeemed', 'unpaid', 'No', 'Cash', '2817850c98d05a2bfe8023ee026d996ef515a85d'),
(783, 'GBTWO', '1234567890', 'Gail.bourne@monash.edu', 'SITWO', '2013-06-29', 105, 'Happy \r\n21 st birthday', 'unredeemed', 'unpaid', 'No', '  ', '43095da636f8f89ffb3c77322c35f66b828ad2bb'),
(784, 'LLL', '0412345678', 'zlq916@xnmsn.com', 'FFFF', '2013-06-29', 55, 'Ffff', 'unredeemed', 'unpaid', 'No', '  ', 'aa5076f800ef52b2ed0f0b8d88bfc68f7fd6a314'),
(785, 'LLL', '0412345678', 'zlq916@xnmsn.com', 'FFFF', '2013-07-01', 55, 'Ffff', 'unredeemed', 'paid', 'No', 'PayPal', '298f93b1b0efeaf41f0ce468d29abfd252985869'),
(786, 'ISHAN', '2132131231', 'reddyishan90@gmail.com', 'AAA', '2013-06-30', 55, 'bth', 'unredeemed', 'unpaid', 'No', '  ', '40bc268f88e6d1bbfcc03874d9ed50ec2889a711'),
(787, 'GAILY', '1234567890', 'Gail.bourne@monash.edu', 'SI', '2013-07-01', 105, 'Test', 'unredeemed', 'unpaid', 'No', 'Cash', 'e00988f42f7fc5f14ec6a0e7905789110f23c5de'),
(788, 'GBOURNE', '1234567890', 'Gb.bh@gb.com', 'GB', '2013-07-01', 105, 'Fly gig\r\nIylugvulcgcfi\r\nGu', 'unredeemed', 'unpaid', 'No', 'Cash', '0fe36dcdec420a26d899a03ecd0f9bec4fa850fe'),
(789, 'REAL PAYPAL TEST', '0412345678', 'z@123.com', 'ZZZZ', '2013-07-01', 55, 'zzz', 'unredeemed', 'unpaid', 'No', '  ', 'fc1200c7a7aa52109d762a9f005b149abef01479'),
(790, 'REAL PAYPAL TEST', '0412345678', 'z@123.com', 'ZZZZ', '2013-07-01', 55, 'zzz', 'unredeemed', 'unpaid', 'No', '  ', '4912f56aec6f0ac56bbb7fa9231e79891c48afc5'),
(791, 'REAL PAYPAL TEST', '0412345678', 'z@123.com', 'ZZZZ', '2013-07-01', 55, 'zzz', 'unredeemed', 'unpaid', 'No', '  ', '7325068e8007fede0cfd8909e0ca401be6875a5c'),
(795, 'MEGAN', '0451118071', 'meganeliselaraia@hotmail.com', 'SHAUN', '2013-07-02', 55, 'Happy Birthday to you. Happy birthday to you. Happy birthday, happy birthday. Happy birthday to you.\r\nHave a great day.\r\nLots of fun and hugs\r\n\r\nMegan', 'unredeemed', 'unpaid', 'No', '  ', '61b5df41f1006a3d0ead4e4e6a6a61cb32496959'),
(796, 'LUQI', '0412345678', 'z@123.com', 'ADS', '2013-07-02', 55, 'happy! happy! happy! happy! ha', 'unredeemed', 'unpaid', 'No', '  ', '732c0a1fc174dbd3f549df2e96a5dae45900b9d0'),
(797, 'LUQI', '0412345678', 'z@123.com', 'ADS', '2013-07-02', 55, 'happy! happy! happy! happy! ha', 'unredeemed', 'unpaid', 'No', '  ', '176908bf2a39eef53edf72b60e99e339da45a9ca'),
(798, 'LUQI', '0412345678', 'z@123.com', 'ADS', '2013-07-02', 55, 'happy! happy! happy! happy! ha', 'unredeemed', 'unpaid', 'No', '  ', '0c0266790a989c46da65349746bc530286bb46c5'),
(799, 'TEST', '0412345678', 'zlq916@xnmsn.com', 'AAAAA', '2013-07-02', 85, 'aaaa', 'unredeemed', 'unpaid', 'No', '  ', '01c0c90bf6c9358e58c84ab8a89e34676a26b823'),
(800, 'AAAAAAA', '1234567890', 'adad@fff.com', 'GB', '2013-07-02', 55, 's', 'unredeemed', 'unpaid', 'No', '  ', '290a52e4dd6282ca78bedde4f4d85b44e532cf99'),
(801, 'AAAAAAA', '1234567890', 'adad@fff.com', 'GB', '2013-07-02', 55, 's', 'unredeemed', 'unpaid', 'No', '  ', '549843ddfef8fcf36afa56c6286f2689537c8b2c'),
(802, 'AAAAAAA', '1234567890', 'zlq916@xnmsn.com', 'GB', '2013-07-02', 55, 'sssssss', 'unredeemed', 'unpaid', 'No', '  ', 'acb033af040717d5654d64ccbf68de6e89ef23f5'),
(803, 'GB', '1234567890', 'Gail.bourne@monash.edu', 'SI', '2013-07-02', 55, 'Hb3', 'unredeemed', 'unpaid', 'No', '', '9d00089c4194a6c21c2d95f432a2777dac29d24e'),
(804, 'AAA', '0412345678', 'z@123.com', 'SSSSS', '2013-07-02', 55, 'happy! happy! happy! happy! happy! happy! happy! h', 'unredeemed', 'unpaid', 'No', '  ', '43a784ccb1556e9769a993465bbe5bfe24b397d4'),
(805, 'SDSD', '0412345678', 'z@123.com', 'SDSAD', '2013-07-02', 55, 'sdsad', 'unredeemed', 'unpaid', 'No', '  ', 'f890d752d330caf426a52643f6510d6efd597f3e'),
(806, 'TEST', '0412345678', 'Zlq916@xnmsn.com', 'GHH', '2013-07-11', 55, 'Hhh', 'unredeemed', 'unpaid', 'No', '  ', '264bb3273d03cef72b6fbd7618bce7349989fa94'),
(807, 'TEST', '0412345678', 'aaa@aaa.com', 'SSSS', '2013-07-11', 55, 'sss', 'unredeemed', 'unpaid', 'No', '  ', '425ac6a281919b17c4d550ebeb2a5a130e579c7f'),
(808, 'DSFS', '2312414214', 'reddyishan90@gmail.com', 'SDSDDAS', '2013-07-11', 55, 'SFD', 'unredeemed', 'unpaid', 'No', '  ', '38afd2ec2f9db9276c61839b6a900df67a7c9544'),
(809, 'PARAM', '3231312313', 'reddyishan90@gmail.com', 'ASLDS', '2013-07-11', 55, 'dsafsaf', 'unredeemed', 'unpaid', 'No', '  ', 'cd8b7a4b8bb9bbf442a9d50fa465fe0e9d868a13'),
(810, 'FVZDFZ', '2342343242', 'reddyishan90@gmail.com', 'SDFFSF', '2013-07-11', 55, 'dsfs', 'unredeemed', 'unpaid', 'No', '  ', 'a1496d4ad0a359b6fe93d819e4a2141bd9d9ac35'),
(811, 'BANKTRANSFER TEST', '3243242423', 'gail.bourne@monash.edu', 'GAIL ', '2013-07-11', 55, 'testing ', 'unredeemed', 'unpaid', 'No', '  ', '6f8246002c1c5967ffc5e0ec80f2d7b59a60b1e3'),
(812, 'SDFDSFSDFS', '3424324232', 'ired1@student.monash.edu', 'SADA', '2013-07-11', 55, 'sads', 'unredeemed', 'unpaid', 'No', '  ', '872a319ee7a24a0ea855777702e15aae09deb042'),
(813, 'GB', '1234567890', 'gail.bourne@monash.edu', 'V', '2013-07-11', 55, 'vv', 'unredeemed', 'unpaid', 'No', '  ', '90b9305857ade3ea2021a4dd2723ccd54b46cf57'),
(814, 'DFAD', '3423423423', 'reddyishan90@gmail.com', 'EDS', '2013-07-12', 55, 'sdfsdfs', 'unredeemed', 'unpaid', 'No', '  ', 'c9264fc806cdb67dc2080db570871067a6134c2d'),
(815, 'EROL', '3222222222', 'adad@fff.com', 'ASD', '2013-07-15', 55, 'a', 'unredeemed', 'unpaid', 'No', '  ', 'd528edaa45e66e08a9ece98272130b42e77cef55'),
(816, 'A', '1111111111', 'adad@fff.com', 'GAIL', '2013-07-15', 55, 'a', 'unredeemed', 'unpaid', 'No', '  ', 'f022da4e40566305c0c8f39fd8f4b83dd5368834'),
(817, 'PAYPAL TEST', '0412345678', 'zhangluqi16@gmail.com', 'SSDSADDSAD', '2013-07-15', 55, 'dasdsad', 'unredeemed', 'unpaid', 'No', '  ', '2e946dff15fb8c09a1a17ae80c6b45f0d5814cd4'),
(818, 'ISHAN', '3242342342', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-16', 55, 'ishan', 'unredeemed', 'unpaid', 'No', '  ', '37a53dc01b25a87e9cb4d985a8516a070fd39667'),
(819, 'ISHAN', '3242342342', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-16', 55, 'ishan', 'unredeemed', 'unpaid', 'No', '  ', '6ef2c7d1d434b898fc74412b636387ecc7d44c40'),
(820, 'ISHAN', '3242342342', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-16', 55, 'ishan', 'unredeemed', 'unpaid', 'No', '  ', '4b68e45a767407ba32c8a08340a8ad86e654cfca'),
(821, 'ISHAN', '3242342342', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-16', 55, 'ishan', 'unredeemed', 'unpaid', 'No', '  ', 'fbbf192d8343f1afa97f7a91d44cac3057f6a46f'),
(822, 'ISHAN', '3242342342', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-16', 55, 'ishan', 'unredeemed', 'unpaid', 'No', '  ', 'f4904ffc386432fe314a91609597028323de8e7f'),
(823, 'ISHAN', '3242342342', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-16', 55, 'ishan', 'unredeemed', 'unpaid', 'No', '  ', 'bf67a68ae9d0403801d0a0474efc79997d5fb6f3'),
(824, 'ISHAN', '3242342342', 'gail.bourne@monash.edu', 'ISHAN', '2013-07-16', 55, 'ishan', 'unredeemed', 'unpaid', 'No', '  ', '5fbdc8ab88676c89b2762cdda82d60d30a615164'),
(825, 'CREDIT CARD PAYMENT WITHOUT PAYPAL', '3242342342', 'gail.bourne@monash.edu', 'CREDIT CARD PAYMENT WITHOUT PAYPAL', '2013-07-16', 55, 'credit card payment without paypal', 'unredeemed', 'unpaid', 'No', '  ', '5375ef76b6dc19bb987a8eab45f489e7abd6ccc8'),
(826, 'ISHAN', '0425023640', 'reddyishan90@gmail.com', 'AAA', '2013-07-16', 55, 'efsd', 'unredeemed', 'unpaid', 'Yes', '  ', 'cdd30858be416853ee25cea930d52dfe31401311'),
(827, 'GB', '1234567890', 'gail.bourne@monash.edu', 'GBRE', '2013-07-17', 2, 'gg', 'unredeemed', 'unpaid', 'No', '  ', '1d57ccdb172aa69de437d5a52d2029e4f6250db2'),
(828, 'ASDSAD', '1234567890', 'adad@fff.com', 'ASD', '2013-07-17', 2, 'a', 'unredeemed', 'unpaid', 'No', '  ', '0da8cbc894c3e556a24253917cfb703f8422388f'),
(829, 'GB', '1234567890', 'Gail.bourne@monash.edu', 'TEST', '2013-07-17', 2, 'Tet', 'unredeemed', 'unpaid', 'No', '  ', '459b50197f19fa4ed59faf560dd179d732ef0335'),
(830, 'GB', '1234567890', 'Gail.bourn@monash.edu', 'GBTEST SIS', '2013-07-17', 2, 'Bb', 'unredeemed', 'unpaid', 'No', 'Cash', '2019219149608a3f188cafaabd3808aace3e3309'),
(831, 'FB', '1234567890', 'Gail.bourne@monash.edu', 'GB TEST SIS CREDIT CARD', '2013-07-17', 2, 'Tt', 'unredeemed', 'unpaid', 'No', '  ', '3741d59112eee8ae8d8c64eab52203d4e26fe541'),
(832, 'FB', '1234567890', 'Gail.bourne@monash.edu', 'GB TEST SIS CREDIT CARD', '2013-07-17', 2, 'Tt', 'unredeemed', 'unpaid', 'No', '  ', 'e6c790b5c2e4b1307265a91b47820af1b2aa02c3'),
(833, 'FB', '1234567890', 'Gail.bourne@monash.edu', 'GB TEST SIS CREDIT CARD', '2013-07-17', 2, 'Tt', 'unredeemed', 'unpaid', 'No', 'Cash', '7331dfb7fe13c8c4d5e68c8ee419edf1a1884911'),
(834, 'FB', '1234567890', 'Gail.bourne@monash.edu', 'GB TEST SIS CREDIT CARD', '2013-07-17', 2, 'Tt', 'unredeemed', 'unpaid', 'Yes', 'PayPal', 'bcdb6b3045cff6247e2db382d5006d8fb8434230'),
(835, 'FB', '1234567890', 'Gail.bourne@monash.edu', 'TEST VALUE PART ON BUY GV', '2013-07-18', 55, 'Hhhh', 'unredeemed', 'unpaid', 'Yes', 'PayPal', 'd449b25b8df4400b649cf69e0ed4900ad8e8f8f9'),
(836, 'GB', '1234567890', 'Gail.bourne@monash.edu', 'BUYGV BANK T DEV', '2013-07-18', 55, 'Yyy', 'unredeemed', 'unpaid', 'Yes', '  ', '84c5bfbbc8e02d076ad931ba613d180180e1af7c'),
(837, 'ASDSAD', '1111111111', 'adad@fff.com', 'AA', '2013-07-19', 55, 'aa', 'unredeemed', 'unpaid', 'No', '  ', '9b41f9c0d7bce732d9af75c3b13bd58e9ce2a1e1'),
(838, 'ASDSAD', '1111111111', 'adad@fff.com', 'AA', '2013-07-19', 55, 'aa', 'unredeemed', 'unpaid', 'Yes', '  ', '2dc292b22ff8108e482f774eb6872f3e6a7be786'),
(839, 'GB', '1234567890', 'Gail.bourne@monash.edu', 'TEST DEV CC PAYT', '2013-07-19', 2, 'Pppp', 'unredeemed', 'unpaid', 'Yes', '  ', '706a95706215cee24eedce10a14654c8763799cb'),
(840, 'EROL', '1234567890', 'fezzaman05@hotmail.com', 'EROL', '2013-07-19', 55, 'hey', 'unredeemed', 'unpaid', 'No', '  ', 'c1d2fb848010807be783ec66dd6ddfad6863dbe7'),
(841, 'GB', '1234567890', 'Gail.bourne@monash.edu', 'GB DEV BANK TRANSFER', '2013-07-19', 55, 'Aaa', 'unredeemed', 'unpaid', 'Yes', 'PayPal', 'dcb63a930713a07525ae07a149f1a2df911925e0'),
(842, 'FB', '1234567890', 'Gail.bourne@monash.edu', 'SIS SEND EMAIL TO SEE WHAT I GET', '2013-07-20', 55, 'This is to check what kind of email I get gv 12.45', 'unredeemed', 'unpaid', 'Yes', 'Cash', '62362fbf882221470f099d8d0a119df93ce19831'),
(843, 'GBB', '1234567890', 'Gail.bourne@monash.edu', 'GG CHECK EMAIL SENT THIS WILL BE BANK TRANSESTER', '2013-07-20', 70, 'In payment type 12.50', 'unredeemed', 'unpaid', 'Yes', 'Banking Transfer', 'c02b74809aaccf4972b9bb7059fa28aa91a255a3'),
(844, 'FB', '1234567890', 'Gail.bourne@monash.edu', 'BBUY GV USE BANK TRANSFER BUTTON DEV', '2013-07-20', 55, '12.55', 'unredeemed', 'unpaid', 'No', '  ', 'c2fc6ebf83d192af1de8fb65d5778ca5fc90592e'),
(845, 'ISHAN', '2343423423', 'reddyishan90@gmail.com', 'DSSSD', '2013-07-24', 55, 'sd', 'unredeemed', 'unpaid', 'No', '  ', '292c7ebb82651f1977f19458c30a3bee33c808d7'),
(846, 'ISHAN REDDY', '6142502364', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-24', 70, 'kkk', 'unredeemed', 'unpaid', 'No', '  ', '8d163d76c569f509002af1a489436be60492eb8e'),
(847, 'KLSDSAD', '3827949234', 'reddyishan90@gmail.com', 'ESD', '2013-07-24', 55, 'sdsdf', 'unredeemed', 'unpaid', 'No', 'Cash', 'd18401b1bb37c5d9297cf16fc43858b4fdb37825'),
(848, 'ISHAN', '3342424324', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-24', 55, 'dskuhf', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', '0e3808238b738aafc13a2a62f36d2a49dec4e191'),
(849, 'ISHAN', '3984732947', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-26', 55, 'jdsfhkdsj', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', '967d1c50af49565e3ab37a33780edf8a1d2d43ea'),
(850, 'ISHAN', '3242342343', 'reddyishan90@gmail.com', 'SF', '2013-07-26', 55, 'f', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', '842066fdfe3fe1ad160fe790e41af09901100f39'),
(851, 'WW', '0020311111', 'reddyishan90@gmail.com', 'ISHAN', '2013-07-26', 70, 'ikkj', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', 'b1b986990332a28a0a8011eb538f1ded941bb5ad'),
(852, 'EROL', '1234567890', 'fezzaman05@hotmail.com', 'GAIL', '2013-07-26', 55, 'g', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', '2dcc3820e64b3d1a7866b22935c695fd6aa3980a'),
(853, 'EROL TANZ', '6143236753', 'fezzaman05@hotmail.com', 'GAIL', '2013-07-30', 55, 'test', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', '43d6eec5164077cafdcbd2c7bb5bc888e4e526ca'),
(854, 'EROL TANZ', '1111111111', 'test@hotmail.com', 'TEST', '2013-08-01', 55, 'test', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', 'cbc34d5f74b1c72aff8c37c780075f5f69e0f4a4'),
(855, 'EROL', '1111111111', 'fezzaman05@hotmail.com', 'TEST', '2013-08-01', 55, 'test', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', 'ebcab2a931b194b46b7af052d17915e104a90428'),
(856, 'GAIL BOURNE', '6141345678', 'gail.bourne@monash.eu', 'TEST FOR PAYPAL', '2013-08-01', 2, 'test', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', 'efe76debc08f498165df7f907b88ebc293d438e1'),
(857, 'GAIL BOURNE', '6141345678', 'gail.bourne@monash.eu', 'TEST PAYPAL CHARGE CANGES', '2013-08-01', 2, 'tes', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', 'c44201fe5bac6de29c443c0c27cc988299120d45'),
(858, 'EROL TANZ', '1111111111', 'fezzaman05@hotmail.com', 'TEST', '2013-08-01', 55, 'te', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', 'fe39d97644dc1d9ca43e372a80def23eeee66f34'),
(859, 'TEST', '1111111111', 'test@hotmail.com', 'TEST', '2013-08-02', 55, 'test', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', '812cd8837314e6595fcb0208c63461945db91d06'),
(860, 'GB TEST SIS', '1234567890', 'gail.bourne@monash.edu', 'TSET SIS DELE', '2013-08-08', 55, 'ss', 'unredeemed', 'unpaid', 'No', 'Cash', '301377d6f91551c76bdeceb505896fd2d31b918e'),
(861, 'DSAD', '1234567890', 'dsa@ssd.com', 'DSAD', '2013-10-04', 55, 'dsa', 'unredeemed', 'unpaid', 'No', '  PAYPAL/CC', 'd5843c2634578decb7f59b5452225a8eda6cb8a4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
