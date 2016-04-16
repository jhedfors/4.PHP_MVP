-- display_all
SELECT * FROM products;
-- display_by_id
SELECT * FROM products WHERE id=1;
-- update_by_id
-- add
INSERT INTO products (name, description, price, created_at, modfied_at) VALUES ("Mug", "CodingDojo mug", "$10.95",now(),now());
-- delete_by