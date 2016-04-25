insert into email_addresses (email_address, date_created, date_modified)
values('testing@email.comg',now(),now());

delete from email_addresses where id="3";

select * from email_addresses;/*
/
	Register
		name
        alias
        email
        password
        password_conf
    login
		email
        password
 /books
	href - add book/review
    href - logout
    recent book review (latest 3)
		title
        review_id
        star_rating
        reviewer first name
        reviewer_id
        review
        review created_at
	other review (the rest)
		title
        review_id
/books/add
	books.title
    author.name
		author.id
	reviews.review
    reviews.star_rating
/books/#id
	books.title
    author.name
    reviews:
		title
		(review_id)
		star_rating
		reviewer first name
		(reviewer_id)
		review
		review created_at
	add a review:
		(user.id)
        (books.id)
		reviews.review
        reviews.star_rating
/users/#id
	users.alias
    users.name
    users.email
    [count of reviews by id]
    reviews posted by user
		books.title

*/




SELECT 
    *
FROM
    users;
    

-- show all users
SELECT 
    *
FROM
    users
WHERE
    email = 'jeff@hedfors.net';
-- show_email_by_email
SELECT 
    *
FROM
    users
WHERE
    id = 1;
-- show_users by id
INSERT into authors (name, created_at, modified_at) values ('Stephen King Jr',NOW(),NOW());
-- add author


insert into users (name, alias, email, password,created_at, modified_at) values('Jeff Hedfors','Jeff','jeff@hedfors.net','12345678',NOW(),NOW());
-- insert new users
SELECT * FROM authors;
-- show all authors
INSERT into authors (name, created_at, modified_at) values ('Stephen King',NOW(),NOW());
-- add author
INSERT INTO books (title,author_id,created_at, modified_at) values ('Shawshank Redemption',1,NOW(),NOW());
-- add book
SELECT * from books;
-- show all books
INSERT INTO reviews (book_id, user_id, review, star_rating, created_at, modified_at) values(1,1,'awesome book',5, NOW(),NOW());
-- add review
SELECT * FROM reviews;
-- show all reviews

SELECT 
    books.id as book_id,title, star_rating, users.id as user_id, users.name as user_name, review, reviews.created_at as reviewed_on
FROM
    books
        LEFT JOIN
    reviews ON reviews.book_id = books.id
        LEFT JOIN
    users ON reviews.user_id = users.id;


-- show all books and reviews

SELECT 
	books.id as book_id,
    title,
    authors.name AS author_name,
    star_rating,
    users.id AS user_id,
    users.name AS user_name,
    review,
    reviews.created_at AS reviewed_on
FROM
    books
        LEFT JOIN
    reviews ON reviews.book_id = books.id
        LEFT JOIN
    users ON reviews.user_id = users.id
        LEFT JOIN
    authors ON authors.id = books.author_id
-- WHERE    books.id = '1';

-- show all reviews by book id

SELECT 
    users.id as user_id, alias, users.name, email, title, books.id
FROM
    users	
        LEFT JOIN
    reviews ON users.id = reviews.user_id
        LEFT JOIN
    books ON reviews.book_id = books.id
		LEFT JOIN
	authors on authors.id = books.author_id
    WHERE user_id = 1;
    