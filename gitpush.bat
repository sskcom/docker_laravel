@git init

@git config --global user.name "sskcom"
@git config --global user.email "sskcomjp08131@gmail.com"

@git add .

@git status

@SET /P ANSWER="実行します。よろしいですか (Y/N)？"

@if /i {%ANSWER%}=={y} (goto :yes)
@if /i {%ANSWER%}=={yes} (goto :yes)

@EXIT


@:yes

@set /p star="コメントを入力してください"

@git commit -m %star%

@git branch -M develop

@git remote add origin git@github.com:sskcom/QA-site.git



@git push -u origin develop
@set /p star="本当にokですか"


