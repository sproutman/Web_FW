TYPE=TRIGGERS
triggers='create trigger test_tri\nbefore insert on tb_test\nfor each row\nset new.t_name=\'mrsoft\''
sql_modes=1342177280
definers='root@localhost'
