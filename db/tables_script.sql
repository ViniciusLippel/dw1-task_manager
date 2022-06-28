SET check_function_bodies = false;

CREATE TABLE task(
  id integer NOT NULL,
  stage_id integer NOT NULL,
  title varchar(45),
  description varchar,
  created_on date,
  deadline date,
  time_elapsed time,
  creator_user_id integer NOT NULL,
  responsible_user_id integer NOT NULL,
  CONSTRAINT task_pkey PRIMARY KEY(id)
);

CREATE TABLE project(
  id integer NOT NULL,
  "name" varchar(45),
  description varchar,
  CONSTRAINT project_pkey PRIMARY KEY(id)
);

CREATE TABLE planning_board(
  id integer NOT NULL,
  project_id integer NOT NULL,
  "name" varchar(45),
  description varchar,
  CONSTRAINT planning_board_pkey PRIMARY KEY(id)
);

CREATE TABLE "user"(
  id integer NOT NULL,
  "name" varchar(45),
  email varchar(45),
  birth_date date,
  lgpd bool,
  CONSTRAINT user_pkey PRIMARY KEY(id)
);

CREATE TABLE "function"(
  id integer NOT NULL,
  "name" varchar(45) NOT NULL,
  description varchar NOT NULL,
  freedom_level_id integer NOT NULL,
  CONSTRAINT function_pkey PRIMARY KEY(id)
);

CREATE TABLE user_function(
  user_id integer NOT NULL,
  function_id integer NOT NULL,
  planning_board_id integer NOT NULL,
  CONSTRAINT user_function_pkey PRIMARY KEY
    (user_id, function_id, planning_board_id)
);

CREATE TABLE freedom_level(
  id integer NOT NULL,
  description varchar,
  create_stage bool,
  edit_stage bool,
  delete_stage bool,
  create_task bool,
  edit_task bool,
  delete_task bool,
  add_user bool,
  delete_user bool,
  edit_project bool,
  delete_project bool,
  CONSTRAINT freedom_level_pkey PRIMARY KEY(id)
);

CREATE TABLE stage(
  id integer NOT NULL,
  planning_board_id integer NOT NULL,
  title varchar(45),
  description varchar,
  CONSTRAINT stage_pkey PRIMARY KEY(id)
);

CREATE TABLE participant(
user_id integer NOT NULL, task_id integer NOT NULL,
  CONSTRAINT participant_pkey PRIMARY KEY(user_id, task_id)
);

CREATE TABLE observer(
user_id integer NOT NULL, task_id integer NOT NULL,
  CONSTRAINT observer_pkey PRIMARY KEY(user_id, task_id)
);

CREATE TABLE login(
user_id integer NOT NULL, "password" varchar,
  CONSTRAINT login_pkey PRIMARY KEY(user_id)
);

ALTER TABLE user_function
  ADD CONSTRAINT user_function_user_id_fkey
    FOREIGN KEY (user_id) REFERENCES "user" (id);

ALTER TABLE user_function
  ADD CONSTRAINT user_function_function_id_fkey
    FOREIGN KEY (function_id) REFERENCES "function" (id);

ALTER TABLE user_function
  ADD CONSTRAINT user_function_planning_board_id_fkey
    FOREIGN KEY (planning_board_id) REFERENCES planning_board (id);

ALTER TABLE planning_board
  ADD CONSTRAINT planning_board_project_id_fkey
    FOREIGN KEY (project_id) REFERENCES project (id);

ALTER TABLE "function"
  ADD CONSTRAINT function_freedom_level_id_fkey
    FOREIGN KEY (freedom_level_id) REFERENCES freedom_level (id);

ALTER TABLE task
  ADD CONSTRAINT task_stage_id_fkey FOREIGN KEY (stage_id) REFERENCES stage (id)
  ;

ALTER TABLE stage
  ADD CONSTRAINT stage_planning_board_id_fkey
    FOREIGN KEY (planning_board_id) REFERENCES planning_board (id);

ALTER TABLE participant
  ADD CONSTRAINT participant_user_id_fkey
    FOREIGN KEY (user_id) REFERENCES "user" (id);

ALTER TABLE observer
  ADD CONSTRAINT observer_user_id_fkey
    FOREIGN KEY (user_id) REFERENCES "user" (id);

ALTER TABLE participant
  ADD CONSTRAINT participant_task_id_fkey
    FOREIGN KEY (task_id) REFERENCES task (id);

ALTER TABLE observer
  ADD CONSTRAINT observer_task_id_fkey FOREIGN KEY (task_id) REFERENCES task (id)
  ;

ALTER TABLE login
  ADD CONSTRAINT login_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user" (id)
  ;

ALTER TABLE task
  ADD CONSTRAINT task_creator_user_id_fkey
    FOREIGN KEY (creator_user_id) REFERENCES "user" (id);

ALTER TABLE task
  ADD CONSTRAINT task_responsible_user_id_fkey
    FOREIGN KEY (responsible_user_id) REFERENCES "user" (id);

