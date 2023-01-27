

CREATE TABLE att_log (
   	sn         VARCHAR (30) NOT NULL,
	scan_date  DATETIME NOT NULL,
	pin        VARCHAR (32) NOT NULL,
	verifymode INT NOT NULL,
	inoutmode  INT NOT NULL DEFAULT 0,
	reserved   INT NOT NULL DEFAULT 0,
	work_code  INT NOT NULL DEFAULT 0,
	att_id     VARCHAR (50) NOT NULL DEFAULT 0,
	PRIMARY KEY (sn, scan_date, pin),
	KEY pin (pin),
	KEY sn (sn)
)
ENGINE=FEDERATED
DEFAULT CHARSET=utf8mb4
CONNECTION='mysql://root:Coba lagi lain kali 2015@192.168.100.2:3309/fin_pro/att_log';

