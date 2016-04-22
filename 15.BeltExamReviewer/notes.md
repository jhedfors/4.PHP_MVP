# Welcome('/')
  * registration
    * name
    * alias
    * email
    * password
    * password_conf
  * login
    * email
    * password

### Queries
* register
  * __show__: select * from users where email = ?;
  * __create__: insert into users (name, alias, email, password,created_at, updated_at) values(?,?,?,?,NOW(),NOW());
* login
  * __show__ (above)


# Books(/books)
* href "add a book"
* href "logout"

### Recent book reviews
* books.name
* book.id
* reviews.rating
* reviews.user_id -> user.name
* reviews.reviews

### Other books with reviews
* all books.title (not included above)

### Queries
* __show__ SELECT * from books

  left join reviews on reviews.book_id = books.id

  left join users on review.user_id=users.id

  limit 3 sort ASC

* __show__ SELECT title from books (remaining)

# Add a new book and review (/books/$id)
* href "Home"
* href "logout"
* book.title
* index authors.name
* add author to authors
* review.review
* review.rating

### Queries
* __add:__ INSERT into authors (name, created_at, updated_at) values (?,NOW(),NOW())
* __add:__ INSERT INTO books (title,author_id,created_at, modified_at) values (?,?,NOW(),NOW())
* __add:__ INSERT INTO reviews (book_id, user_id, review, star_rating, created_at, updated_at) values(?,?,?,?, NOW(),NOW())

# Display Book ('/books/$id')
* book.title
* book.id
* authors.author
* review.review
* reviews.user_id -> user.name
* add reviews.review
* add reviews.rating
* delete

### Queries
 * __show:__ SELECT * FROM books

  LEFT JOIN authors ON books.author_id = author.id

  LEFT JOIN reviews ON books.id == reviews.book_id

  LEFT JOIN users ON reviews.user_id == users.id



 * __add:__ (above)


# Display user ("/users/$id")
* user.alias
* user.name
* user.email
* number of reviews
### reviews posted
* books.title
* books.id

### Queries
* __show:__ SELECT * FROM users

LEFT JOIN reviews on user.id = reviews.user_id

LEFT JOIN books on book.id == authors.book_id
