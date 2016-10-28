CREATE TABLE buku(
	id CHAR(3) PRIMARY KEY,
	judul VARCHAR(50) NOT NULL,
	genre VARCHAR(20) NOT NULL,
	pengarang VARCHAR(50) NOT NULL,
	penerbit VARCHAR(30) NOT NULL,
	tahunterbit YEAR NOT NULL,
	harga INT NOT NULL
);

INSERT INTO buku VALUES
('B01','Pulang','Fiksi','Tere Liye','Republika',2015,58650),
('B02','Aku','Biografi','Sjuman Djaya','Gramedia',2016,42500),
('B03','Sepotong Senja Untuk Pacarku','Fiksi','Seno Gumira Ajidarma','Gramedia',2016,59500),
('B04','Intelegensi Embun Pagi','Fiksi','Dee Lestari','Mizan',2016,100300);