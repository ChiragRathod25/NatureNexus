-- Table structure for table `product_images`
DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`image_id`),
  FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Add image_id column to products table
ALTER TABLE `products`
  ADD `primary_image_id` int(11) DEFAULT NULL AFTER `created_at`;

-- Add foreign key constraint to products table
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`primary_image_id`) REFERENCES `product_images` (`image_id`);
