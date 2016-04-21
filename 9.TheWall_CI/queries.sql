SELECT * from users;



SELECT messages.id AS message_id, first_name, last_name, message, messages.created_on, messages.users_id AS messages_users_id FROM messages
	  LEFT JOIN users
	  ON users.id = messages.users_id;
      
insert into users (first_name, last_name, email, password, user_level, created_on, modified_on) VALUES ('Jeff','Hedfors', 'jeff@hedfors.net', 'abc', 'admin', NOW(), NOW());