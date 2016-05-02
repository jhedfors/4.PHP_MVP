SELECT * FROM users;

SELECT * from appointments;

-- add
INSERT INTO appointments (task, date_time, status, created_at, modified_at, user_id) VALUES ('Recieve Black Belt', "2016-04-29 16:00", "pending", NOW(), NOW(),1);

-- retrieve
SELECT appointments.id as appointment_id, task, date_time, status FROM appointments 
LEFT JOIN users ON users.id = appointments.user_id
WHERE users.id = 1;

-- update
UPDATE `belt_exam6`.`appointments` SET `task`='Recieve Black Belt!' WHERE `id`='4';
UPDATE appointments SET task = "Recieve Black Belt", date_time = "2016-04-29 16:00", status = "pending", modified_at = NOW()
WHERE id = 4;

-- delete 
DELETE FROM appointments WHERE id=3;


