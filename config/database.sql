CREATE TABLE users(
    id bigint 
    firstname       VARCHAR(50) NOT NULL,
    lastname        VARCHAR(50) NOT NULL,
    email           VARCHAR(50),
    passwd          TEXT NOT NULL,
    mobile_phone    VARCHAR(20) NULL,
    address         VARCHAR(100) NULL,
    birthday        DATE NULL,
    is_active       BOOLEAN DEFAULT TRUE,
    gender          CHAR(1) DEFAULT NULL,
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_at      TIMESTAMP DEFAULT NULL
);