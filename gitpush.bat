@git init

@git config --global user.name "sskcom"
@git config --global user.email "sskcomjp08131@gmail.com"

@git add .

@git status

@SET /P ANSWER="���s���܂��B��낵���ł��� (Y/N)�H"

@if /i {%ANSWER%}=={y} (goto :yes)
@if /i {%ANSWER%}=={yes} (goto :yes)

@EXIT


@:yes

@set /p star="�R�����g����͂��Ă�������"

@git commit -m %star%

@git branch -M develop

@git remote add origin git@github.com:sskcom/QA-site.git



@git push -u origin develop
@set /p star="�{����ok�ł���"


