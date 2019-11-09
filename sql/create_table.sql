CREATE TABLE `user`
(
    `id`       int(11)                                 NOT NULL AUTO_INCREMENT,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `active`   tinyint(1)                              NOT NULL,
    PRIMARY KEY (`id`)
);
