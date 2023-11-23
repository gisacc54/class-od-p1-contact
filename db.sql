create table users(
    id int primary key,
    name varchar(200),
    phone_number varchar(15),
    password varchar(300)
);

create table contacts(
     id int primary key,
     name varchar(200),
     phone_number varchar(15),
     email varchar(200),
     website varchar(200),
     address text,
     user_id int
);