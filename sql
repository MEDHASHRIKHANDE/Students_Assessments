Name:Roshan Chaudhary.
                                                                    SQL Queries:-
1)Display all the information of the emp table:
sql:select *from emp
2)Display unique jobs from emp table:
sql:select distinct job from emp
3)List the details of the emps in asc order of their salaries:
sql:select * from emp order by sal asc
4)List the details of the emps in asc order of the deptno and  desc of jobs
sql:select * from emp order by deptno asc, job desc
5)Display all the unique job groups in the desending order:
sql:select * from emp order by deptno asc, job desc
6)Display all the details of all'mgrs':
sql:select *from emp where job='manager' 
7)List the emps who joined before 1981:
sql:select * from emp where hiredate<'1981'
8)List the empno,ename,sal,dailysal of all employees in the Asc order of Annual:
sql:select empno,ename,sal,(sal/30) as Dailysal from emp order by(sal*12)asc
9)Display the empno,ename,job,hiredate,exp of all mgrs:
sql:select empno,ename,job,hiredate,Datediff(mm,hiredate,getDate()) as exp from emp where job='manager'
10)List the empno,ename,sal,exp of all emps working for mgrs 7839:
sql:select empno,ename,sal Datediff(mm,hiredate,getDate()) as exp from emp where mgr=7839
