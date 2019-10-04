--
-- categories テーブルの作成

CREATE TABLE IF NOT EXISTS `tbm_children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` char(20) NOT NULL,
  `login_pass` char(64) NOT NULL,
  `name` VARCHAR(64) NOT NULL,
  `sex` char(6) NOT NULL,
  `birth` date NOT NULL,
  `class` VARCHAR(10) NOT NULL,
  `class_number` int(4) NOT NULL,
  `bus` VARCHAR(11) NOT NULL,
  `login_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO tbm_children(login_id, login_pass, name, sex, birth, class, class_number,bus, login_count)
VALUES ('tsubomi', SHA2('kindergardentsubomi', 256), '花田つぼみ', 'female', '2013-08-07', 'さくら', 17, 'ピンク', 0);

INSERT INTO tbm_children(login_id, login_pass, name, sex, class, class_number,  login_count)
VALUES ('asari', SHA2('asariasari', 256), '浅利先生', 'female', 'さくら', 0, 0);

INSERT INTO tbm_children(login_id, login_pass, name, sex, birth, class, class_number,bus, login_count)
VALUES ('ktw26', SHA2('matsudaktw26', 256), '松田有人', 'male', '2014-02-06', 'まつ', 26, 'みどり', 0);

INSERT INTO tbm_children(login_id, login_pass, name, sex, birth, class, class_number, login_count)
VALUES ('misumi', SHA2('naomimisumi', 256), '三角直美', 'female', '2013-05-19', 'まつ', 27, 0);

INSERT INTO tbm_children(login_id, login_pass, name, sex, birth, class, class_number,bus, login_count)
VALUES ('yuri', SHA2('yuriyuri', 256), '三角悠樹', 'female', '2008-06-11', 'さくら', 27, 'ピンク');


UPDATE tbm_admins SET login_name='naomi' WHERE login_id='tippeln';

//学校では実行できなかった権限付与
GRANT SELECT,INSERT,UPDATE,DELETE ON DBzd3G15.* TO sysuser@localhost IDENTIFIED BY 'secret';


SELECT *
FROM tbm_admins
ORDER BY updated_date DESC, login_count DESC;