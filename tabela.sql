-- phpMyAdmin SQL Dump
-- version 

-- Máquina: localhost
-- Data de criação: 30/07/2021

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `tabela02`(
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `titulo` varchar(50) NOT NULL,
    `autor` varchar(20) NOT NULL,
    `editora` varchar(10) NOT NULL,
    `volumes` int(100) NOT NULL,
    `idade` int(2) NOT NULL,
    `data` date NOT NULL,
    `inicio` char(4) NOT NULL,
    `fim` char(4) NOT NULL,
    `sinopse` varchar(600) NOT NULL,
    `manga` varchar(50) NOT NULL,
    `anime` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;

INSERT INTO `tabela02`(`id`,`titulo`, `autor`, `editora`, `volumes`, `idade`, `data`,`inicio`, `fim`, `sinopse`, `manga`, `anime`) VALUES
(1, 'Orange', 'Ichigo Takano', 'JBC', 6, 14,'2021-08-20', '2005', '2015', 'Na primavera do segundo ano do colégio, chega uma carta vinda de dez anos no futuro. Nela, estava contido o desejo da Naho de 26 anos para a Naho de 16 anos, dizendo para ela “não passar pelos mesmos arrependimentos que eu passei”. E a Naho adolescente vai descobrir que o “arrependimento” é em relação ao Kakeru Naruse, o aluno novo que é transferido de Tóquio e o motivo da Naho adulta ter escrito a carta!', 'orange.jpeg', 'orangeAnime.jpeg'),
(2, 'Toradora (Light novel)', 'Yuyuko Takemiya', 'New Pop', 10, 16, '2021-08-20', '2006', '2010', 'Ryuuji Takasu, um garoto mal-encarado, mas de bom coração, começa o seu segundo ano do colégio conhecendo a Taiga Aisaka, uma garota baixinha, porém de temperamento feroz, e que é temida por todos pela alcunha de “Tigresa de Bolso”.E quando o pobre rapaz descobre, sem querer, um grande segredo da Taiga, dá-se início à épica batalha entre o Tigre e o Dragão!', 'toradora.jpeg', 'toradoraAnime.jpeg'),
(3, 'ReLife', 'Yayoi Sou', '', 15, 15, '2021-08-20', '2013', '2018', 'A História segue Kaizaki Arata, um desempregado de 27 anos que falha em todas as entrevistas de emprego após sair da última no qual ficou por somente três meses. Sua vida muda após conhecer Yoake Ryou do Instituto ReLIFE de Pesquisas, que o oferece uma droga capaz de modificar sua aparência para a de um jovem de 17 anos novamente e então tornar-se alvo de experimentos por um ano no qual que ele começa sua vida de estudante mais uma vez.', 'relife.jpeg', 'relifeAnime.jpeg'),
(4, 'Your lie in April', 'Naoshi Arakawa', 'Panini', 11, 13, '2021-08-20', '2011', '2015', 'Kousei Arima é um pianista prodígio que, devido aos duros treinos impostos por sua mãe e instrutora, fica traumatizado e se torna incapaz de tocar piano após o falecimento dela. Amargurado, o garoto mantém distância da música mesmo depois de anos, ignorando até mesmo o incentivo de seus amigos. Até que um dia ele conhece Kaori, uma violinista animada e cheia de personalidade, em um encontro que mudará sua vida.', 'yourlie.jpeg', 'yourlieAnime.jpeg'),
(5, 'Takagi-san, a mestre das pegadinhas', 'Sōichirō Yamamoto', 'Panini', 14, 11, '2021-08-20', '2013',' ~ ', 'Nessa batalha da juventude, perde que enrubescer! A Takagi-san, que se senta ao meu lado na escola, sempre me faz passar alguma vergonha! Mas ela que me aguarde! Hoje sou eu quem vai pregar uma peça nela!!', 'takagisan.jpeg', 'takagisanAnime.jpeg');