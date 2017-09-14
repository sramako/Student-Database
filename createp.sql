create database project;
\c project
create table student(
    usn varchar ,
    name varchar,
    dept_name varchar,
    year int,
    age int,
    semester int,
    primary key(usn)




);

create table department(
    dept_id int,
    dept_name varchar,
 primary key(dept_name)
    

);



create table attendance(
    usn varchar,
    la int,
    dbms int,
    daa int,
    toc int,
    mpca int,
    total_classes int,
    
     primary key(usn)


);

create table marks_sem4(
    usn varchar,
    la_t1 int ,
    dbms_t1 int,
    daa_t1 int,
    mpca_t1 int,
    toc_t1 int ,
    la_t2 int ,
    dbms_t2 int,
    daa_t2 int,
    mpca_t2 int,
    toc_t2 int ,
    
    
     primary key(usn)
     

);

create table subject(
    subject_id varchar,
    subject varchar,
    dept_name varchar,
    tot_credits int,
    primary key(subject)

);

create table takes(
    usn varchar,
    subject varchar,
    credits int,
    semester int,
     primary key(usn)
    
     
);

create table personal_details(
    usn varchar,
    email varchar,
    cgpa double precision,
    semester int ,
    year int,
    fathers_name varchar,
    phone varchar,
    Address varchar,
    board_marks varchar,
    maths varchar,
    pcm varchar

);
