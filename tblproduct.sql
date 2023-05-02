
CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'MSI GF63 Thin Core i7 9th Gen', 'MSI4353', 'product-images/msi-laptop.jpeg', 1500.00),
(2, 'WD 1.5 TB Wired External Hard Disk Drive  (Black)', 'WD091', 'product-images/external-hardidisk.jpeg', 50.00),
(3, 'VERTIGO Running Shoes For Men  (Black)', 'LOTTO215', 'product-images/lotto-shoes.jpeg', 10.00);
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

