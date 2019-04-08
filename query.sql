START TRANSACTION;
	CREATE TABLE finalproject.Users (
		UserID 	  INTEGER 		 PRIMARY KEY AUTO_INCREMENT,
		Username  VARCHAR(20)    UNIQUE NOT NULL,
        Email	  VARCHAR(255)   UNIQUE NOT NULL,
        Password  VARCHAR(255)	 		NOT NULL,
        Salt	  TEXT,
        IsActive  BOOLEAN	DEFAULT 	FALSE,
        isAdmin   BOOLEAN   DEFAULT 	FALSE,
        
        CHECK (LENGTH(Password) >= 8)
    );
    
    CREATE TABLE finalproject.category (
		CategoryID   INTEGER 				PRIMARY KEY AUTO_INCREMENT,
        CategoryName VARCHAR(255)		    UNIQUE NOT NULL,
        Description  text			
    );
    
    CREATE TABLE finalproject.thread (
		ThreadID	INTEGER			PRIMARY KEY AUTO_INCREMENT,
        ThreadName  VARCHAR(255)    UNIQUE NOT NULL,
        PostCount   INTEGER			DEFAULT 0,
        CreatedOn	TIMESTAMP		DEFAULT now(),
        Category	INTEGER			NOT NULL,
        PostedBy	INTEGER			NOT NULL,
        FOREIGN KEY (Category)  	REFERENCES category(CategoryID),
        FOREIGN KEY (PostedBy)		REFERENCES users(UserID)
    );
    
    CREATE TABLE finalproject.post (
		PostID			INTEGER	PRIMARY KEY AUTO_INCREMENT,
        PostContent		TEXT    NOT NULL,
        ThreadID		INTEGER NOT NULL,
        FOREIGN KEY 	(ThreadID) REFERENCES finalproject.thread(ThreadID) ON DELETE CASCADE,
        CreatedOn		TIMESTAMP DEFAULT now(),
        Rating			INTEGER DEFAULT 0,
        PostedBy		INTEGER NOT NULL,
        FOREIGN KEY 	(PostedBy) REFERENCES finalproject.users(UserID)
    );
    
    CREATE TABLE finalproject.threadSubscribers (
		ThreadID		INTEGER,
		UserID			INTEGER,
        PhoneNumber		VARCHAR(12) NOT NULL,
        PRIMARY KEY (ThreadID, UserID)
    );
    
COMMIT;
