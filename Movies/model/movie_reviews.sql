CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` INT UNSIGNED AUTO_INCREMENT NOT NULL FOREIGN KEY,
  `movie_id`  INT UNSIGNED AUTO_INCREMENT NOT NULL FOREIGN KEY,
  `movie_rating` INT (5) NOT NULL,
  `review_description` VARCHAR(3000) NOT NULL


) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;


