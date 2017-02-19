create table donor
{ name varchar(50) not null,
donid int(4) primary key,
sex varchar(1),
dob date not null,
address varchar(100),
phno int(10),
bgrp int(3)
};


create table recipient
{  name varchar(50),
rgno int(4) primary key,->registration number
address varchar(100),
phno int(10),
bgrp varchar(3)
};

create table bloodbank
{ bankid int(4) primary key,
address varchar(100),
city varchar(50),
state varchar(30),
rgid int(4),
phno int(10)
}

create table Blood
{
donid int(4),
bgroup varchar(3) primary key,
med varchar(100),
bankid int(4)
 }
