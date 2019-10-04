--
-- categories テーブルの作成

CREATE TABLE tbm_admins
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  login_id VARCHAR(20) NOT NULL UNIQUE,
  login_pass CHAR(64)NOT NULL,
  login_count INT NOT NULL
);

INSERT INTO tbm_admins(login_id, login_pass) VALUES ('admin', SHA2('secretadmin',256));
INSERT INTO tbm_admins(login_id, login_pass) VALUES ('tippeln', SHA2('secrettippeln',256));
INSERT INTO tbm_admins(login_id, login_pass) VALUES ('tsubomi', SHA2('secrettsubomi',256));

//学校では実行できなかった権限付与
GRANT SELECT,INSERT,UPDATE,DELETE ON DBzd3G15.* TO sysuser@localhost IDENTIFIED BY 'secret';
GRANT SELECT,INSERT,UPDATE,DELETE ON DBzd3G15.* TO tippeln@localhost IDENTIFIED BY 'naomi7031';