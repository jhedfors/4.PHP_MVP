-- retrieve all records
SELECT * from users;
-- select one record by email;
SELECT * FROM users WHERE email='jeff@hedfors.net';
-- insert new record
INSERT INTO users (first_name, last_name, email, password, created_date, modified_date) VALUES ('Jayden', 'Hedfors', 'jayden@hedfors.net', 'abc', '2016-04-16', '2016-04-16');
