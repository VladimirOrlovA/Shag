установка с сайта https://git-scm.com/download/win
качаем файл Git-2.24.1.2-64-bit

на вкладке выбираем --> adjusting your patch -> use git ... Command Prompt 

git clone <адресс ссылки на репозиторий github>

git push -u origin master -- 

git pull -- вытянуть изменения

git commit -am -- создание комментария

git status -- проверить статус

git add . -- добавить файлы



-----------------------------------------------------------------------

C:\xampp\htdocs>git clone https://github.com/VladimirOrlovA/Shag.git
Cloning into 'Shag'...
warning: You appear to have cloned an empty repository.

C:\xampp\htdocs>cd Shag

C:\xampp\htdocs\Shag>git status
On branch master

No commits yet

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        testwrite.txt

nothing added to commit but untracked files present (use "git add" to track)

C:\xampp\htdocs\Shag>git add .

C:\xampp\htdocs\Shag>git status
On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)
        new file:   testwrite.txt


C:\xampp\htdocs\Shag>git commit -am
error: switch `m' requires a value

C:\xampp\htdocs\Shag>git commit -am "first commit"
[master (root-commit) 914192f] first commit
 Committer: Владимир Орлов <ОрловВ@local.itstep>
Your name and email address were configured automatically based
on your username and hostname. Please check that they are accurate.
You can suppress this message by setting them explicitly. Run the
following command and follow the instructions in your editor to edit
your configuration file:

    git config --global --edit

After doing this, you may fix the identity used for this commit with:

    git commit --amend --reset-author

 1 file changed, 3 insertions(+)
 create mode 100644 testwrite.txt

C:\xampp\htdocs\Shag>git push -u origin master
Enumerating objects: 3, done.
Counting objects: 100% (3/3), done.
Writing objects: 100% (3/3), 283 bytes | 283.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0)
To https://github.com/VladimirOrlovA/Shag.git
 * [new branch]      master -> master
Branch 'master' set up to track remote branch 'master' from 'origin'.

C:\xampp\htdocs\Shag>






































