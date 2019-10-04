--
-- categories テーブルの作成

CREATE TABLE IF NOT EXISTS `tbm_dbadmins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` varchar(20) NOT NULL,
  `login_pass` char(64) NOT NULL,
  `login_count` int(11) NOT NULL,
  `updated_date` timestamp not null default current_timestamp on update current_timestamp,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO tbm_dbadmins(login_id, login_pass) VALUES ('dbadmin', SHA2('passworddbadmin',256));


UPDATE tbm_admins SET login_name='naomi' WHERE login_id='tippeln';

//学校では実行できなかった権限付与
GRANT SELECT,INSERT,UPDATE,DELETE ON DBzd3G15.* TO sysuser@localhost IDENTIFIED BY 'secret';


SELECT *
FROM tbm_admins
ORDER BY updated_date DESC, login_count DESC;