# taskmanager with docker
This project is a simple Task Manager written in PHP, which utilizes MySQL database for storing tasks.

## installation
1. Clone this repository to your computer using the `git clone` command.
    ```bash
    git clone https://github.com/OlgaPec/taskmanager_docker.git
    ```

2. Navigate to the project directory:
    ```bash
    cd TaskManager
    ```

3. Build the Docker image and run the Docker container:
    ```bash
    docker build -t taskmanager-app .
    docker run -d --name taskmanager-container -p 8080:80 taskmanager-app
    ```

4. Open your web browser and go to `http://localhost:8080` to access the Task Manager application.

##########################################################################

# taskmanager without docker
User can sign in or log in to the task manager, add new tasks, change existing, delete old tasks or logout. 

DB settings is in file config.php

Use database with two tables:

- users (id, username, pass)
        int, text, text

- tasks (id, username, task_name, podrobnosti, termin, priorita)
        int, text, text, text, date, text



