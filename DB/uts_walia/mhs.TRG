TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER update_nomer\nAFTER UPDATE ON mhs\nFOR EACH ROW\nBEGIN\nINSERT INTO log\nset id = old.id,\nnim = old.nim,\nno_hp_lama = old.no_hp,\nno_hp_baru = new.no_hp,\ntgl_diubah = NOW();\nEND'
sql_modes=1342177280
definers='root@localhost'
client_cs_names='cp850'
connection_cl_names='cp850_general_ci'
db_cl_names='latin1_swedish_ci'
