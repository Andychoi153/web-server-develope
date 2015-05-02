# web-server-develope
web server infra for fitting and plotting data raman
서버를 구축하기 전에 apache2 에서 수정해야할 코드들과 그외 인프라 구축

Korean

1.apache2.conf 에서 <Directory /var/www> Addhandler 구축해야함
경우에 따라 htpd.conf 혹은 site-enable/default-000 에서 코드수정

2.php, mysql설치,

3.php mysql apache2 연동

4.php.ini 20MB으로 설정 - 업로드 용량 설정

5.php 에서 terminal 실행할 수 있도록 하는 함수 system()-웹서버에서 서버에있는 파이썬 실행하기에 유용한 함수
단! output이 sting 또는 array 이외의 어떤 실행 결과가 나와서는 안된다!!-한마디로 data분석용으로만 유용한 함수다.

6.혹시 실행이 안된다거나 error가 나면 apache2에서 error log를 살펴보도록 한다.-원인을 파악하기에 유용하다.

7.내가만든 서버의 단점은 mysql을 사용하지 않기 때문에 데이터 전송과정에서 끝기면 위험하다. 중간에 서버접속이 끊기고
처음부터 다시해야할 경우가 생기면 위험한 경우가 발생한다.

8.이후부터는 코드참조

English

1.Must modification code of apache2.conf - <Directory /var/www> Addhandller ..

2.Install php, mysql

3.php mysql apache2 interlocking

4.In php.ini mdofication upload limit to 20MB

5.In php you can train running the terminal by class 'system()' - it is useful to running a python module in server. But if 
python module output some rsults except array or string, it will be failed.

6.If failed to run the module, check out error_log file in apache2 - it is useful to find the cause
