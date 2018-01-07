<?php

Git and Git hub
1. git --version
// check git version and set is done correctly
2. git init
//initialise repository in local machine
3.git remote add myorigin https://github.com/NileshRPatil/Github-Learning.git
// add remote repository to local
4.git remote -v 
//check list 
5.git remote remove origin
//to remove origin
6.git status
//check get tracked(in green color) and untracked files(in red color)
7.git add Nilesh.txt
//stage a file in index
8. git add --all OR git add .
//stage all files
9.git rm --cached Nilesh.txt 
//remove files from index
10.git config --global user.name "NileshRPatil"
git config --global user.email "nileshrpatil1811@gmail"
//check authorisation
11. git commit -m "Initial Commit"
//
12. git log
//
13. git push myorigin master
//push files from local to remote

//using SSH key
14. ssh-keygen -t rsa -C "nileshrpatil1811@gmail"
//create ssh key on local
15. cd .ssh
16. clip < id_rsa.pub

//Branch
17. git branch
//list of branches
18. git branch mybranch
//create new branch
19. git checkout branch
//switch from master branch to mybranch
20. git checkout -b newbranch
//create new branch and switch into it.
21. git merge mybranch
// merge mybranch into current branch
22. git clone git@github.com:NileshRPatil/Github-Learning.git
//download remote files on local

