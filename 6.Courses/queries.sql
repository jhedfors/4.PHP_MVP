-- needed queries;
	-- display;
	-- add;
	-- remove;
    
-- display;
SELECT * FROM courses;

-- add;

INSERT INTO courses (name, description, created_at, modified_at) values('PHP', 'PHP stuff', NOW(), NOW());

-- remove;

DELETE FROM courses where id=17;	



    

    


