CREATE DATABASE formdb DEFAULT CHARACTER SET utf8;
USE formdb;
CREATE TABLE form(
    sum int,
    apartment varchar(6),
    id_page varchar(16),
    cash1 int,
    cash2 int,
    cash3 int,
    cash4 int,
    information1 varchar(30),
    information2 varchar(30),
    information3 varchar(30),
    information4 varchar(30),
    remark varchar(100)
)CHARSET=utf8;
