drop table board_user;
create table board_user(
    board_user_id varchar(80) not null primary key,
    board_user_name varchar(80) not null,
    board_user_password varchar(80) not null,
    board_user_nickname varchar(80) not null
);
desc board_user;
ALTER TABLE board_user convert to charset utf8;
insert into board_user values ('kim123','김철수','1234','철수');

select * from board_user;


drop table board_content;
create table board_content(
    board_no int(4) not null primary key,
    title varchar(200) not null,
    content varchar(8000) not null,
    writer varchar(80) not null,
    indate timestamp default now()
);

alter table board_content modify board_no int(6) auto_increment;
alter table board_content auto_increment = 1;

desc board_content;
ALTER TABLE board_content convert to charset utf8;
insert into board_content (title,content,writer)
values ('김철수의 자기소개','안녕하세요. 김철수입니다.','kim123');

select * from board_content;
select board_no,title,writer,DATE_FORMAT(indate, '%Y-%m-%d') from board_content;


commit;

