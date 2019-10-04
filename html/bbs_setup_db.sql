--
-- categories テーブルの作成


CREATE DATABASE mybbs CHARACTER SET utf8 COLLATE utf8_general_ci;
--

CREATE TABLE posts
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  message TEXT NOT NULL,
  created DATETIME NOT NULL
);

INSERT INTO posts (name,message,created) VALUES ('たろう', 'こんにちは！ 今日もいい天気ですね！', '2010-08-01 21:00:00');
INSERT INTO posts (name,message,created) VALUES ('はなこ', 'あしたから旅行に行ってきます。おみやげ買ってくるね！', '2010-08-01 21:01:00');
INSERT INTO posts (name,message,created) VALUES ('じろう', 'いってらっしゃい～', '2010-08-01 21:02:00');
INSERT INTO posts (name,message,created) VALUES ('宇野洋介','二十万年前まん中にはたれているとき、「。','2019-03-08 09:08:42');
INSERT INTO posts (name,message,created) VALUES ('廣川英樹','いきおいで。お前さきから飛とびおりに照。','2018-11-02 10:02:02');
INSERT INTO posts (name,message,created) VALUES ('吉田あすか','気にもこったりは、こんどうして、そのと。','2019-04-07 16:07:08');
INSERT INTO posts (name,message,created) VALUES ('喜嶋さゆり','ようでした。そしていたい箱はこんなこと。','2019-04-27 00:27:52');
INSERT INTO posts (name,message,created) VALUES ('青田拓真','ましたりすべてみように殻かいがいきなり。','2019-02-10 15:10:58');
INSERT INTO posts (name,message,created) VALUES ('小泉加奈','ですか」「だからでもなかの樽たるのです。','2019-06-03 05:03:32');
INSERT INTO posts (name,message,created) VALUES ('中津川春香','ようなくなることあった」と言いわないの。','2019-07-13 21:13:03');
INSERT INTO posts (name,message,created) VALUES ('鈴木春香','十五分たちに祈いのきれと考えて寄よせ、。','2018-11-21 23:21:58');
INSERT INTO posts (name,message,created) VALUES ('藤本千代','なり眼めの中を、だまのようにゅうくつを。','2019-02-21 13:21:12');
INSERT INTO posts (name,message,created) VALUES ('斉藤知実','こんやりかがたふうにポケット州しゅうじ。','2019-07-07 18:07:36');
INSERT INTO posts (name,message,created) VALUES ('村山明美','うでどきどき眼めの下に来ました。そのま。','2019-06-07 16:07:34');
INSERT INTO posts (name,message,created) VALUES ('野村浩','びでその大きな蟹かにがらパンの袋ふくの。','2018-10-08 05:08:51');
INSERT INTO posts (name,message,created) VALUES ('松本太郎','のうぎょうぶがつから四、五人手を出す小。','2018-09-03 03:03:00');
INSERT INTO posts (name,message,created) VALUES ('山岸修平','こんどんなさいわの暗くらなんだ。けれど。','2018-11-12 21:12:08');
INSERT INTO posts (name,message,created) VALUES ('加納明美','校に出して向むこうへめぐったような、雑。','2018-09-17 13:17:01');
INSERT INTO posts (name,message,created) VALUES ('杉山明美','をごらんとしました。あれきしが何を燃も。','2019-08-01 14:01:53');
INSERT INTO posts (name,message,created) VALUES ('加納裕美子','ビロードを張はっきましたが、青く灼やい。','2018-10-04 16:04:19');
INSERT INTO posts (name,message,created) VALUES ('山岸学','のどくでそっていながら、そっと思いなあ。','2018-09-22 05:22:32');
INSERT INTO posts (name,message,created) VALUES ('吉本太一','かぶり、水銀すいした。「もうきの燈台看。','2018-12-16 12:16:22');
INSERT INTO posts (name,message,created) VALUES ('佐藤晃','とうがくといっしんとうりには、そうじか。','2019-05-29 05:29:41');
INSERT INTO posts (name,message,created) VALUES ('杉山修平','それっしてジョバンニは勢いきなまい、あ。','2019-07-14 14:14:43');
INSERT INTO posts (name,message,created) VALUES ('田辺稔','かったり引っ込こむとき石油せきにおいも。','2019-05-21 07:21:41');
INSERT INTO posts (name,message,created) VALUES ('中島稔','んかくしかるく飛とんでした。ジョバンニ。','2019-05-18 01:18:35');
INSERT INTO posts (name,message,created) VALUES ('原田稔','ムパネルラは、すうりなすったよ」「くじ。','2019-02-13 23:13:56');
INSERT INTO posts (name,message,created) VALUES ('小林淳','して始終しじゅうのあの人のせてくるっと。','2019-03-01 17:01:46');
INSERT INTO posts (name,message,created) VALUES ('吉田陽子','前が、おっしていると、ジョバンニの見る。','2018-12-12 01:12:55');
INSERT INTO posts (name,message,created) VALUES ('渡辺香織','かぶっつかまえができた。川下の方へ走り。','2019-05-24 01:24:43');
INSERT INTO posts (name,message,created) VALUES ('中津川里佳','いろいろなんとした。「ええ、そしてから。','2019-06-29 07:29:08');
INSERT INTO posts (name,message,created) VALUES ('小泉加奈','あがりました。そして、また、わたもちが。','2019-01-27 14:27:52');
INSERT INTO posts (name,message,created) VALUES ('木村知実','う思っているだろう。あすこにいちばんう。','2018-11-25 17:25:47');
INSERT INTO posts (name,message,created) VALUES ('佐藤七夏','心けっしゃしょうじょうはちょうの中でし。','2018-08-24 00:24:48');
INSERT INTO posts (name,message,created) VALUES ('原田聡太郎','やなんに来て、勢いきのある日いたいがよ。','2019-04-12 16:12:40');
INSERT INTO posts (name,message,created) VALUES ('村山直人','るくなってまもなくすよ。それはこの上を。','2019-05-11 01:11:26');
INSERT INTO posts (name,message,created) VALUES ('田中明美','けいのだ。今日牛乳ぎゅうにあかり小さい。','2019-06-13 02:13:18');
INSERT INTO posts (name,message,created) VALUES ('笹田京助','じてんでいました。ジョバンニは走りだね。','2018-11-28 06:28:34');
INSERT INTO posts (name,message,created) VALUES ('青山京助','すみの間に合わせるか、ジョバンニは何べ。','2018-09-27 17:27:26');
INSERT INTO posts (name,message,created) VALUES ('加藤加奈','弟きょうの方へお帰りますが少しかにカム。','2019-07-27 13:27:14');
INSERT INTO posts (name,message,created) VALUES ('佐々木英樹','おこうなすよ。もってなんとうすを見まし。','2018-09-18 08:18:13');
INSERT INTO posts (name,message,created) VALUES ('浜田裕樹','って。すると、車掌しゃの窓まどの外の、。','2018-08-05 11:05:02');
INSERT INTO posts (name,message,created) VALUES ('中島あすか','わりすが可愛かわるそうでないんでおりて。','2019-04-11 08:11:05');
INSERT INTO posts (name,message,created) VALUES ('田辺聡太郎','でもどろう、すっかさとたまま神かみさま。','2019-06-06 11:06:14');
INSERT INTO posts (name,message,created) VALUES ('松本明美','んぶんかく皺しわかっぱいになって大きく。','2019-02-12 06:12:21');
INSERT INTO posts (name,message,created) VALUES ('渚浩','げの人の助手じょしました。ジョバンニは。','2019-06-08 02:08:18');
INSERT INTO posts (name,message,created) VALUES ('西之園洋介','へとたどってじっけんかんがとう」青年は。','2019-07-31 21:31:52');
INSERT INTO posts (name,message,created) VALUES ('宮沢太一','星祭ほしい女の子の手首てくるような露つ。','2019-06-01 16:01:09');
INSERT INTO posts (name,message,created) VALUES ('宮沢桃子','とごとのみでやっぱいに鑿のみんなにかな。','2018-11-15 06:15:55');
INSERT INTO posts (name,message,created) VALUES ('田辺零','きなれました。どうか」博士はかせはジョ。','2019-06-04 08:04:30');
INSERT INTO posts (name,message,created) VALUES ('中村零','で顔を変へんな集あつまりがはだんしんご。','2019-04-07 23:07:56');
INSERT INTO posts (name,message,created) VALUES ('桐山香織','いきな望遠鏡ぼうとした。あしを下流かり。','2019-03-10 16:10:46');
INSERT INTO posts (name,message,created) VALUES ('桐山花子','吹ふきなり、大きな黒い平たいのだ。ぼく。','2019-06-14 11:14:10');

GRANT SELECT,INSERT,UPDATE,DELETE ON mybbs.* TO bbsuser@localhost IDENTIFIED BY 'abcd';