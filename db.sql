create table users(
    id int primary key auto_increment,
    name varchar(200) not null ,
    phone_number varchar(15) not null ,
    password varchar(300) not null
);

create table contacts(
     id int primary key auto_increment,
     name varchar(200) not null,
     phone_number varchar(15) not null,
     email varchar(200) not null,
     website varchar(200) not null,
     address text,
     user_id int
);