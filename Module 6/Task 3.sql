SELECT c.name as 'Category Name', sum(p.price*o.quantity) as 'Total Revenue'
FROM categories c 
LEFT JOIN products p
ON c.id = p.category_id
LEFT JOIN order_items o
ON p.id = o.product_id
GROUP BY c.name
ORDER BY sum(p.price*o.quantity) DESC;