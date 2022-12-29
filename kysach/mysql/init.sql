CREATE DATABASE IF NOT EXISTS magazin;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON magazin.* TO 'user'@'%';


USE magazin;
SET NAMES utf8;


CREATE TABLE Hats
(
	id_hats              INT NOT NULL AUTO_INCREMENT,
	manufacturer         VARCHAR(1000) NOT NULL,
	info_hats            VARCHAR(1000) NOT NULL,
	img                  BLOB NULL,
    PRIMARY KEY(id_hats)
);


CREATE TABLE Himself
(
	id_himself           INT NOT NULL AUTO_INCREMENT,
	info_himself         VARCHAR(1000) NOT NULL,
	manufacturer         VARCHAR(1000) NOT NULL,
	img                  BLOB NULL,
    PRIMARY KEY(id_himself)
);


CREATE TABLE Joggers
(
	id_joggers           INT NOT NULL AUTO_INCREMENT,
	info_joggers         VARCHAR(1000) NOT NULL,
	manufacturer         VARCHAR(1000) NOT NULL,
	img                  BLOB NULL,
    PRIMARY KEY(id_joggers)
);


CREATE TABLE Product
(
	id_product           INT NOT NULL AUTO_INCREMENT,
	id_himself           INT NULL,
	id_joggers           INT NULL,
	id_hats              INT NULL,
    PRIMARY KEY(id_product)
);


ALTER TABLE Product
ADD FOREIGN KEY Himself (id_himself) REFERENCES Himself (id_himself);



ALTER TABLE Product
ADD FOREIGN KEY Joggers (id_joggers) REFERENCES Joggers (id_joggers);



ALTER TABLE Product
ADD FOREIGN KEY Hats (id_hats) REFERENCES Hats (id_hats);


INSERT INTO Himself (manufacturer, info_himself, img)
VALUES
    ('Швецов', 'Очень наджное и хорошее худи', 'http://pngimg.com/uploads/hoodie/hoodie_PNG46.png'),
    ('Зевс', 'Крайне стильное худи', 'http://pngimg.com/uploads/hoodie/hoodie_PNG44.png'),
    ('Шпиц', 'Моё худи', 'http://pngimg.com/uploads/hoodie/hoodie_PNG45.png'),
    ('Дарков', 'Необычайно обычное худи', 'http://pngimg.com/uploads/hoodie/hoodie_PNG38.png');

INSERT INTO Hats (manufacturer, info_hats, img)
VALUES
    ('kola', 'Ковбойская шляпа "Настоящий ковбой"', 'https://pngimg.com/uploads/cowboy_hat/cowboy_hat_PNG94.png'),
    ('Саша', 'Шляпа для рыбалки, головные уборы', 'https://ae04.alicdn.com/kf/Sec5f184941eb4391815a6c6b8d6587c6G/-.jpg_640x640.jpg'),
    ('Бурбон', 'Не крутая шапка', 'https://w7.pngwing.com/pngs/783/879/png-transparent-hat-baseball-cap-bonnet-clothing-red-hat-winter-models-winter-hat-leather-thumbnail.png');


INSERT INTO Joggers (manufacturer, info_joggers, img)
VALUES
    ('Андрей', 'Nights джогерс', 'https://ae04.alicdn.com/kf/Ha68ea2a1e3f64281a77c040bf29d7b3d7.png_350x350.png'),
    ('misha', 'Зумерские джогеры', 'https://img.joomcdn.net/b012dc1bf42e16383a9d341d043efceccf4defa316e_original.jpeg'),
    ('Олег', 'Просто много корманов', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgrY7FyyAg4il3cnTw7vkOl9W-y9UYGvWBEFU1GllXcNubMojUcVjdXGp1Gtdl5SPM7ps&usqp=CAU'),
    ('Денис', 'Шатны как штаны', 'https://stormline-russia.ru/wp-content/uploads/1638319/10/shtany_dlya_rybalki_ples.jpg');