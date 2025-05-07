# 2Do-lst

## 

Task
- id
- title
- desc
- created
- start_d
- end_d
- prio
- status (PENDING, DONE, IN_PROGRESS, CANCELLED, PAUSED)

Category


User

Task_to_user
user_id
task_id




task

CREATE TABLE category (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL
    
);

INSERT INTO category
VALUES (1, 'Normal')


CREATE TABLE task (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    priority INTEGER NULL DEFAULT 0,
    title TEXT NOT NULL,
    description TEXT NOT NULL,
    status TEXT CHECK( status IN ('PENDING', 'DONE', 'IN_PROGRESS', 'CANCELLED', 'PAUSED') )   NOT NULL DEFAULT 'PENDING',
    created TEXT NOT NULL DEFAULT current_timestamp,
    start_dt TEXT NULL,
    end_dt TEXT NULL,
    category_id INTEGER NOT NULL DEFAULT 1
    FOREIGN KEY(category_id) REFERENCES category(id)
);

