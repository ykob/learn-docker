INSERT INTO employee_address SET
employee_id = (SELECT id FROM employee where number = 'DEV-0001'),
prefecture_code = '13',
city = '東京都新宿区',
street = '',
building = ''
;

INSERT INTO employee_address SET
employee_id = (SELECT id FROM employee where number = 'DEV-0002'),
prefecture_code = '12',
city = '千葉県市原市',
street = '',
building = ''
;

INSERT INTO employee_address SET
employee_id = (SELECT id FROM employee where number = 'DEV-0003'),
prefecture_code = '11',
city = '埼玉県和光市',
street = '',
building = ''
;

INSERT INTO employee_address SET
employee_id = (SELECT id FROM employee where number = 'SAL-0001'),
prefecture_code = '14',
city = '神奈川県横浜市',
street = '',
building = ''
;

INSERT INTO employee_address SET
employee_id = (SELECT id FROM employee where number = 'SAL-0002'),
prefecture_code = '13',
city = '東京都杉並区',
street = '',
building = ''
;

INSERT INTO employee_address SET
employee_id = (SELECT id FROM employee where number = 'SAL-0003'),
prefecture_code = '11',
city = '埼玉県さいたま市',
street = '',
building = ''
;
