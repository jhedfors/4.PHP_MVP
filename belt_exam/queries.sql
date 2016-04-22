select * from users;
select * from schedules;
select * from destinations;

INSERT INTO users (name, username, password,created_at, modified_at) values ('Kazu Hedfors','khedfors','12345678',NOW(),NOW());
-- add user

SELECT username, password FROM users
WHERE username='jhedfors';
-- show from users

select * from destinations;
-- show all destinations

INSERT INTO destinations (destination, description, start_date, end_date,created_at, modified_at,user_planner_id)
VALUES ('Tokyo, Japan', 'Take a tour of Temples', '2016-06-30', '2016-07-06', NOW(),NOW(),1);
-- add destination

select * from schedules;
-- 
INSERT INTO schedules ( user_id, destination_id ) VALUES (2, 1);
 -- add user to schedule
 
 -- JOINS --
 SELECT users.name destination, start_date, end_date, description, FROM destinations
 LEFT JOIN schedules ON destinations.id = schedules.destination_id
 LEFT JOIN users ON users.id = schedules.user_id
 WHERE users.id = 2;





