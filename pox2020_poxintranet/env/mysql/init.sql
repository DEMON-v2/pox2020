use poxintranet;

create table users(idx int not null auto_increment, username varchar(24) not null, password varchar(256) not null, auth_token varchar(256) not null, level varchar(5) not null, time datetime not null, primary key(idx));

create table board(idx int not null auto_increment, title varchar(40) not null, context varchar(80) not null, author varchar(24) not null, time datetime not null, primary key(idx));

insert into users(username, password, auth_token, level, time) values ('admin','f9c3be490abcbcf944a09af8fc845d56529a6c35868c8d6826bee48445aa283b','765f615f635f635f695f6e5f65', 'admin', now());