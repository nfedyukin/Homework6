# Homework6
-------------------------------

CREATE DATABASE news;

-------------------------------
CREATE TABLE news
(
    id SERIAL,
    created VARCHAR(20),
    headline VARCHAR(100),
    text TEXT,
    author VARCHAR(50)
);
--------------------------------

INSERT INTO news
(created, headline, text, author)
VALUES
  ('01.01.2018 12:00:00', 'Заголовок первой новости', 'Текст первой новости', 'Автор новости');

-------------------------------

INSERT INTO news
(created, headline, text, author)
VALUES
  ('02.01.2018 12:00:00', 'Headline of the second news', 'Text of the second news', 'Mr Author');


-------------------------------

INSERT INTO news
INSERT INTO news
(created, headline, text, author)
VALUES
  ('16.03.2018 00:01:00', 'Apple остановила производство iPhone',
   'Только что был опубликован отчет, в котором утверждается, что все операции на китайском заводе по производству iPhone Wistron были приостановлены Apple из-за предполагаемого использования недопустимых компонентов.', 'MailRu');
