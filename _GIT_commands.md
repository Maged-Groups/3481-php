# GIT Commands

## Global Configuration (One time only per PC)

```bash
git config --global user.name "Your Name"

git config --global user.email "your.email@domain.com"
```

## Initiate a Reposotory [Repo] (One time per project)

```bash
git init
```

## Start Tracking a file

```bash
git add file_path/file_name.ext
```

## Start Tracking all files

```bash
git add .
```

## Complete a day of work OR a task

```bash
git add .

git commit -m "any message"
```

## Move file from staged chamges to changes
```bash
git restore --staged <FILE_PATH_NAME>
```

## Move all files from staged chamges to changes
```bash
git restore --staged .
```

## Undo all changes to a file and return to last commit
```bash
git restore <FILE_PATH_NAME>
```

## Undo all changes to all files and return to last commit
```bash
git restore .
```

## Undo last commit and return files to staged changes
```bash
git reset --soft HEAD~1
NOTE: HEAD~1 means one(1) commit
NOTE: --soft means keep changes
NOTE: --hard means remove changes
```

## Link offline repo to online repo(GitHub)
```bash
git remote add origin <URL>
```

## Push all updates to online repo(GitHub) [First time]
```bash
git push -u origin main
```

## Push all updates to online repo(GitHub) [All times]
```bash
git push
```