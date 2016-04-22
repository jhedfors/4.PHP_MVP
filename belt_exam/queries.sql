select * from users;
-- select all

INSERT INTO users (first_name, last_name, email, password, created_at, modified_at) 
VALUES ('Jeff', 'Hedfors', 'jeff@hedfors.net','123456789', NOW(), NOW());
