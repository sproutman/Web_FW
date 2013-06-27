TYPE=VIEW
query=select `db_database09`.`tb_student`.`sno` AS `sno`,`db_database09`.`tb_student`.`sname` AS `sname`,`db_database09`.`tb_score`.`yw` AS `yw`,`db_database09`.`tb_score`.`wy` AS `wy`,`db_database09`.`tb_score`.`sx` AS `sx` from `db_database09`.`tb_student` join `db_database09`.`tb_score` where (`db_database09`.`tb_student`.`id` = `db_database09`.`tb_score`.`sid`)
md5=52083c31b0a11c9f0f3ee0aef8eca77c
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
revision=1
timestamp=2007-03-14 11:42:06
create-version=1
source=select sno,sname,yw,wy,sx from tb_student,tb_score where tb_student.id=tb_score.sid
