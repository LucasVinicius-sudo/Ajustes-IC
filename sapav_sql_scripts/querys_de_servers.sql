USE SAPAV_DB;
CREATE TABLE servers(
id INTEGER PRIMARY KEY auto_increment,
type_user VARCHAR(50),
nome VARCHAR(100),
email VARCHAR(100),
password VARCHAR(300) not null
);
INSERT INTO servers (id, type_user, nome, email, password) VALUES (
0,
"server",
"Roberta Viena Lopes",
"rvvl@ic.ufal.br",
"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi");
SELECT * FROM servers;